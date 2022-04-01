import React, { useState, useEffect } from 'react'
import Authenticated from '@/Layouts/Authenticated'
import { Head } from '@inertiajs/inertia-react'
import { DataGrid } from '@mui/x-data-grid'
import IconButton from '@mui/material/IconButton'
import DeleteIcon from '@mui/icons-material/Delete'
import VisibilityIcon from '@mui/icons-material/Visibility'
import Snackbar from '@mui/material/Snackbar';
import MuiAlert from '@mui/material/Alert';

import { API_BASE_URL } from '../config'


export default function Items(props) {

    const [updating, setUpdating] = useState(null)

    const [alertOpen, setDeleteSuccess] = useState(null)
    const [alertValue, setAlertValue] = useState('')
    const [severity, setSeverity] = useState('info')

    const [formName, setFormName] = useState('')
    const [formDescription, setFormDescription] = useState('')
    const [formPrice, setFormPrice] = useState('')
    const [formImage, setFormImage] = useState('images/items/')
    const [items, setItems] = useState(null)
    const [isLoading, setIsLoading] = useState(null)
    
    const Delete = async (id) => {
        if (!updating) {
            try {
                setUpdating(true)
                const response = await fetch(API_BASE_URL + '/items/' + id, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type':'application/json',
                        Accept: 'application/json'
                    }
                });
                await response;
                await setUpdating(false)
                onDelete(id)
            } catch (error) {
                setUpdating(false)
                console.error(error)
            }
            

        }
    }

    const columns = [
        { field: 'id', headerName: 'ID', width: 70 },
        { field: 'name', headerName: 'Name', width: 200, type: 'string' },
        { field: 'description', headerName: 'Description', width: 350, type: 'string' },
        { field: 'image', headerName: 'Image', width: 200, type: 'string' },
        { 
            field: 'price', 
            headerName: 'Price', 
            width: 75, 
            type: 'string', 
            valueFormatter: (params) => {
                // first converts to JS Date, then to locale option through date-fns
                return `$ ${params.value}`;
            } 
        },
        {
            field: 'view',
            headerName: 'View',
            width: 70,
            renderCell: (params) => {
                const onClick = (e) => {
                e.stopPropagation(); // don't select this row after clicking
        
                const api = params.api;
                const thisRow = {};
        
                api
                    .getAllColumns()
                    .filter((c) => c.field !== "__check__" && !!c)
                    .forEach(
                    (c) => (thisRow[c.field] = params.getValue(params.id, c.field))
                    );
        
                return alert(JSON.stringify(thisRow, null, 4));
                };
        
                return <IconButton onClick={onClick}><VisibilityIcon sx={{color: '#00ff00'}}/></IconButton>;
            }
        },
        {
            field: 'delete',
            headerName: 'Delete',
            width: 70,
            renderCell: (params) => {
                const onClick = (e) => {
                    e.stopPropagation(); // don't select this row after clicking
        
                    const api = params.api;
                    const thisRow = {};
            
                    api
                        .getAllColumns()
                        .filter((c) => c.field !== "__check__" && !!c)
                        .forEach(
                        (c) => (thisRow[c.field] = params.getValue(params.id, c.field))
                        );
                         
                    if (confirm(`This cannot be undone! \nDelete testimonial ${thisRow.id}?`)) {
                        Delete(thisRow.id)
                        setAlertValue("Deleted Successfully!")
                        setSeverity('success')
                        setDeleteSuccess(true)
                        return true
                    }
                    return null
                };
        
                return <IconButton onClick={onClick}><DeleteIcon sx={{color: '#ff0000'}}/></IconButton>;
            }
        }
    ];
    
    const DataTable = (props) => {
        return (
            <div style={{ height: 400, width: '100%' }}>
            <DataGrid
                rows={props.data}
                columns={columns}
                pageSize={5}
                rowsPerPageOptions={[5]}
                // checkboxSelection
            />
            </div>
        );
    }

    const Alert = React.forwardRef(function Alert(props, ref) {
        return <MuiAlert elevation={6} ref={ref} variant="filled" {...props} />;
    });

    const handleClose = (event, reason) => {
        if (reason === 'clickaway') {
            event.preventDefault()
          return;
        }
        setAlertValue('')
        setSeverity('info')
        setDeleteSuccess(false);
    };

    const onCreate = () => {
        setAlertValue('Created Successfully!')
        setSeverity('success')
        setDeleteSuccess(true)
        setFormDescription('')
        setFormName('')
        setFormImage('')
        setFormPrice('')
    }

    const CreateItem = async (data) => {
        var formdata = new FormData();
        formdata.append("name", data.name);
        formdata.append("description", data.description);
        formdata.append("price", data.price)
        formdata.append("image", data.image)

        var requestOptions = {
        method: 'POST',
        body: formdata,
        redirect: 'follow'
        };
        setUpdating(true)
        const response = await fetch(API_BASE_URL + "/items", requestOptions)
        .then(response => response.json())
        .then(result => {
            setTestimonials([...items, result.data])
        })
        .catch(error => console.log('error', error));
        await response;
        await setUpdating(false)
        onCreate()
    }

    const submitForm = (e) => {
        e.preventDefault()
        
        if (!formName){
            setAlertValue('Name is compulsory')
            setSeverity('error')
            setDeleteSuccess(true)
        } 
        if (!formDescription){
            setAlertValue('Description is compulsory')
            setSeverity('error')
            setDeleteSuccess(true)
        }
        if(!formPrice){
            setAlertValue('Price is compulsory')
            setSeverity('error')
            setDeleteSuccess(true)
        }
        if (formName && formDescription && formPrice) {
            let submit = {
                name: formName,
                description: formDescription,
                image: formImage,
                price: formPrice
            }
            CreateItem(submit)
        }
    }

    const onDelete = (id) => {
        let itemList = [...items]
        let index = itemList.findIndex(item => item.id === id)
        itemList.splice(index, 1)
        setItems(itemList)
    }

    const getItems = async () => {
        if(!items) {
            try {       
                setIsLoading(true)
                const response = await fetch(API_BASE_URL + '/items')
                const usersList = await response.json()
                setItems(usersList.data)
                setIsLoading(false)
            } catch (error) {
                setIsLoading(false)
                console.error(error)
            }
        }
    }

    useEffect(() => {
      getItems()
    }, [])
    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Irving Landscape | Items</h2>}
        >
            <Head title="Items" />
            <Snackbar open={alertOpen} autoHideDuration={3000} onClose={handleClose} anchorOrigin={{ vertical: 'top', horizontal: 'right' }}>
                <Alert onClose={handleClose} severity={severity} sx={{ width: '100%' }}>
                   {alertValue}
                </Alert>
            </Snackbar>

            <div className='py-12'>
                <form className="max-w-7xl mx-auto sm:px-6 lg:px-8 text-lg">
                    <h2 className='text-2xl font-bold'>Create a new Item</h2>
                    <div className='w-full flex flex-col my-4'>
                        <label className='text-sm'>Name</label>
                        <input id="name" name="name" className='py-3 px-2 focus:ring-0 focus:outline-none rounded-sm' placeholder="Name" value={formName} onChange={(e)=>{
                            setFormName(e.target.value)
                        }} required/>
                    </div>
                    <div className='w-full flex flex-col my-4'>
                        <label className='text-sm'>Description</label>
                        <input id="description" name="description" className='py-3 px-2 focus:ring-0 focus:outline-none rounded-sm' value={formDescription} onChange={(e)=>{
                            setFormDescription(e.target.value)
                        }} placeholder="Description" required/>
                    </div>
                    <div className='w-full flex flex-col my-4'>
                        <label className='text-sm'>Price ($)</label>
                        <input type='number' id="price" name="price" className='border-0 py-3 px-2 focus:ring-0 focus:outline-none rounded-sm' placeholder="0.00" value={formPrice} onChange={(e)=>{
                            setFormPrice(e.target.value)
                        }} required/>
                    </div>
                    <div className='w-full flex flex-col my-4'>
                        <label className='text-sm'>Image</label>
                        <input id="image" name="image" className='py-3 px-2 focus:ring-0 focus:outline-none rounded-sm' placeholder="Image Url" value={formImage} onChange={(e)=>{
                            setFormImage(e.target.value)
                        }} required/>
                    </div>
                    <div className='my-4'>
                        <button className='py-3 px-3 rounded font-semibold bg-green-300' type='submit' onClick={(e) => submitForm(e)}>Submit</button>
                    </div>
                    
                </form>
            </div>

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">Items</div>
                        <DataTable data={items ? items : []}/>
                    </div>
                </div>
            </div>
        </Authenticated>
    );
}
