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



export default function Testimonial(props) {

    const [updating, setUpdating] = useState(null)

    const [testimonials, setTestimonials] = useState(null)
    const [isLoading, setIsLoading] = useState(null)
    const [alertOpen, setDeleteSuccess] = useState(null)
    const [deleteConfirm, setDeleteConfirm] = useState(false)
    const [alertValue, setAlertValue] = useState('')
    const [severity, setSeverity] = useState('info')
    const [formName, setformName] = useState(props.auth.user.name)
    const [formComments, setFormComments] = useState('')

    const onDelete = (id) => {
        let testimonialList = [...testimonials]
        let index = testimonialList.findIndex(testimonial => testimonial.id === id)
        console.log(index)
        testimonialList.splice(index, 1)
        setTestimonials(testimonialList)
    }

    const onCreate = () => {
        setAlertValue('Created Successfully!')
        setSeverity('success')
        setDeleteSuccess(true)
        setFormComments('')
        setformName(props.auth.user.name)
    }

    const Delete = async (id) => {
        console.log(id)
        if (!updating) {
            try {
                setUpdating(true)
                const response = await fetch(API_BASE_URL + '/testimonials/' + id, {
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

    const CreateTestimonial = async (data) => {
        var formdata = new FormData();
        formdata.append("name", data.name);
        formdata.append("testimonial", data.testimonial);

        var requestOptions = {
        method: 'POST',
        body: formdata,
        redirect: 'follow'
        };
        setUpdating(true)
        const response = await fetch(API_BASE_URL + "/testimonials", requestOptions)
        .then(response => response.json())
        .then(result => {
            console.log(result)
            setTestimonials([...testimonials, result.data])
        })
        .catch(error => console.log('error', error));
        await response;
        await setUpdating(false)
        onCreate()
    }

    const Alert = React.forwardRef(function Alert(props, ref) {
        return <MuiAlert elevation={6} ref={ref} variant="filled" {...props} />;
    });

    const handleAlertClose = () => {
        setDeleteConfirm(false)
    }
    
    const handleClose = (event, reason) => {
        if (reason === 'clickaway') {
            event.preventDefault()
          return;
        }
        setAlertValue('')
        setSeverity('info')
        setDeleteSuccess(false);
      };

    const columns = [
        { field: 'id', headerName: 'ID', width: 70 },
        { field: 'name', headerName: 'Name', width: 255 },
        {
            field: 'testimonial',
            headerName: 'Testimonial',
            description: 'This column has text data',
            sortable: false,
            width: 1000,
        },
        {
            field: 'view',
            headerName: 'View',
            width: 100,
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
            width: 100,
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

    const getTestimonials = async () => {
        console.log('started')
        if(!testimonials) {
            try {       
                setIsLoading(true)
                const response = await fetch(API_BASE_URL + '/testimonials')
                const playersList = await response.json()
                console.log(playersList)
                setTestimonials(playersList.data)
                setIsLoading(false)
            } catch (error) {
                setIsLoading(false)
                console.error(error)
            }
        }
    }

    useEffect(() => {
      getTestimonials()
      console.log(testimonials)
    }, [])

    const submitForm = (e) => {
        e.preventDefault()
        console.log('')
        
        if (!formName){
            setAlertValue('Name is null')
            setSeverity('error')
            setDeleteSuccess(true)
        } 
        if (!formComments){
            setAlertValue('Comment is null')
            setSeverity('error')
            setDeleteSuccess(true)
        }
        if (formName && formComments) {
            let submit = {
                name: formName,
                testimonial: formComments
            }
            CreateTestimonial(submit)
        }
    }
    
    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Irving Landscape | Testimonials</h2>}
        >
            <Head title="Testimonials" />
            <Snackbar open={alertOpen} autoHideDuration={3000} onClose={handleClose} anchorOrigin={{ vertical: 'top', horizontal: 'right' }}>
                <Alert onClose={handleClose} severity={severity} sx={{ width: '100%' }}>
                   {alertValue}
                </Alert>
            </Snackbar>

            <div className='py-12'>
                <form className="max-w-7xl mx-auto sm:px-6 lg:px-8 text-lg">
                    <h2 className='text-2xl font-bold'>Create a new Testimonial</h2>
                    <div className='w-full flex flex-col my-4'>
                        <label className='text-sm'>Name</label>
                        <input id="name" name="name" className='py-3 px-2 focus:ring-0 focus:outline-none rounded-sm' placeholder="Name" value={formName} onChange={(e)=>{
                            setformName(e.target.value)
                        }} required/>
                    </div>
                    <div className='w-full flex flex-col my-4'>
                        <label className='text-sm'>Comments</label>
                        <input id="testimonial" name="testimonial" className='py-3 px-2 focus:ring-0 focus:outline-none rounded-sm' value={formComments} onChange={(e)=>{
                            setFormComments(e.target.value)
                        }} placeholder="Comments" required/>
                    </div>
                    <div className='my-4'>
                        <button className='py-3 px-3 rounded font-semibold bg-green-300' type='submit' onClick={(e) => submitForm(e)}>Submit</button>
                    </div>
                    
                </form>
            </div>

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        {
                        isLoading ? 
                        <div className="p-6 bg-white border-b border-gray-200">Loading...</div> 
                        : 
                        testimonials ? 
                        <>
                        <div className="p-6 bg-white border-b border-gray-200">This is a list of testimonials</div>
                        <DataTable data={testimonials ? testimonials : []}/>
                        </>
                        :
                        <div className="p-6 bg-white border-b border-gray-200">There are no testimonials</div>
                        }
                    </div>
                </div>
            </div>
        </Authenticated>
    );
}
