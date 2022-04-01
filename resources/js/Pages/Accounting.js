import React, { useState, useEffect } from 'react';
import Authenticated from '@/Layouts/Authenticated';
import { Head } from '@inertiajs/inertia-react';
import { DataGrid } from '@mui/x-data-grid';
import IconButton from '@mui/material/IconButton'
import DeleteIcon from '@mui/icons-material/Delete'
import VisibilityIcon from '@mui/icons-material/Visibility'
import Snackbar from '@mui/material/Snackbar';
import MuiAlert from '@mui/material/Alert';

import { API_BASE_URL } from '../config'

export default function Accounting(props) {

    const columns = [
        { field: 'id', headerName: 'ID', width: 10 },
        { field: 'date', headerName: 'Date', width: 100 },
        { field: 'description', headerName: 'Description', width: 350 },
        { field: 'type', headerName: 'Type', type: 'string', width: 90 },
        { field: 'cost', headerName: 'Value', type:'number', width: 65,
        valueFormatter: (params) => {
            // first converts to JS Date, then to locale option through date-fns
            return `$ ${params.value}`;
        }},
        { field: 'view', headerName: 'View', width: 70,
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
            width: 75, minWidth: 50, maxWidth: 100,
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
                         
                    if (confirm(`This cannot be undone! \nDelete record ${thisRow.id}?`)) {
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
        },
    ];
    
    const rows = [
        { id: 1, date: '27-08-04', description: 'Sale of Goods', cost: 1000, type: 'Credit' },
        // { id: 2, lastName: 'Lannister', firstName: 'Cersei', age: 42 },
        // { id: 3, lastName: 'Lannister', firstName: 'Jaime', age: 45 },
        // { id: 4, lastName: 'Stark', firstName: 'Arya', age: 16 },
        // { id: 5, lastName: 'Targaryen', firstName: 'Daenerys', age: null },
        // { id: 6, lastName: 'Melisandre', firstName: null, age: 150 },
        // { id: 7, lastName: 'Clifford', firstName: 'Ferrara', age: 44 },
        // { id: 8, lastName: 'Frances', firstName: 'Rossini', age: 36 },
        // { id: 9, lastName: 'Roxie', firstName: 'Harvey', age: 65 },
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
    
    const [updating, setUpdating] = useState(null)
    const [totals, setTotals] = useState(null)
    const [accounts, setAccounts] = useState(null)
    const [isLoading, setIsLoading] = useState(null)
    const [alertOpen, setDeleteSuccess] = useState(null)
    const [deleteConfirm, setDeleteConfirm] = useState(false)
    const [alertValue, setAlertValue] = useState('')
    const [severity, setSeverity] = useState('info')
    const [formDate, setformDate] = useState('')
    const [formType, setFormType] = useState('Credit')
    const [formComments, setFormComments] = useState('')
    const [formValue, setFormValue] = useState(0)

    const onDelete = (id) => {
        getTotals()
        let testimonialList = [...accounts]
        let index = testimonialList.findIndex(testimonial => testimonial.id === id)
        console.log(index)
        testimonialList.splice(index, 1)
        setAccounts(testimonialList)
    }

    const onCreate = () => {
        getTotals()
        setAlertValue('Created Successfully!')
        setSeverity('success')
        setDeleteSuccess(true)
        setFormComments('')
        setformDate('')
    }

    const Delete = async (id) => {
        console.log(id)
        if (!updating) {
            try {
                setUpdating(true)
                const response = await fetch(API_BASE_URL + '/accounts/' + id, {
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
        formdata.append("type", data.type);
        formdata.append("description", data.description);
        formdata.append("cost", data.cost);
        formdata.append("date", data.date);

        var requestOptions = {
        method: 'POST',
        body: formdata,
        redirect: 'follow'
        };
        setUpdating(true)
        const response = await fetch(API_BASE_URL + "/accounts", requestOptions)
        .then(response => response.json())
        .then(result => {
            console.log(result)
            setAccounts([...accounts, result.data])
        })
        .catch(error => console.error(error));
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
    
    const getAccounts = async () => {
        console.log('started')
        if(!accounts) {
            try {       
                setIsLoading(true)
                const response = await fetch(API_BASE_URL + '/accounts')
                const playersList = await response.json()
                console.log(playersList)
                setAccounts(playersList.data)
                setIsLoading(false)
            } catch (error) {
                setIsLoading(false)
                console.error(error)
            }
        }
    }

    const getTotals = async () => {
        try {       
            setIsLoading(true)
            const response = await fetch(API_BASE_URL + '/accounts/total')
            const playersList = await response.json()
            console.log(playersList)
            setTotals(playersList)
            setIsLoading(false)
        } catch (error) {
            setIsLoading(false)
            console.error(error)
        }
    }
    useEffect(() => {
        getAccounts()
        getTotals()
      }, [])
  
      const submitForm = (e) => {
          e.preventDefault()
          console.log('')
          
          if (!formDate){
              setAlertValue('Date is null')
              setSeverity('error')
              setDeleteSuccess(true)
          } 
          if (!formComments){
              setAlertValue('Comment is null')
              setSeverity('error')
              setDeleteSuccess(true)
          }
          if (formDate && formComments) {
                let submit = {
                    date: formDate,
                    description: formComments,
                    type: formType,
                    cost: formValue,
                }
                CreateTestimonial(submit)
          }
      }
    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Irving Landscape | Accounting</h2>}
        >
            <Head title="Accounting" />
            <Snackbar open={alertOpen} autoHideDuration={3000} onClose={handleClose} anchorOrigin={{ vertical: 'top', horizontal: 'right' }}>
                <Alert onClose={handleClose} severity={severity} sx={{ width: '100%' }}>
                   {alertValue}
                </Alert>
            </Snackbar>

            <div className='py-12'>
                <form className="max-w-7xl mx-auto sm:px-6 lg:px-8 text-lg">
                    <h2 className='text-2xl font-bold'>Create a new Record</h2>
                    <div className='sm:grid grid-cols-2 gap-3'>
                        <div className='w-full flex flex-col my-4 mx-2'>
                            <label className='text-sm'>Date</label>
                            <input id="date" name="date" type={'date'} className='py-3 px-2 focus:ring-0 focus:outline-none rounded-sm border-0' placeholder="Date" value={formDate} onChange={(e)=>{
                                setformDate(e.target.value)
                            }} required/>
                        </div>
                        <div className='w-full flex flex-col my-4 mx-2'>
                            <label className='text-sm'>Type</label>
                            <select name='type' id='type' onChange={(e)=>{setFormType(e.target.value)}} className='py-3 px-2 focus:ring-0 focus:outline-none rounded-sm border-0'>
                                <option disabled>Select an option</option>
                                <option value={'Credit'}>Credit Transaction</option>
                                <option value={'Debit'}>Debit Transaction</option>
                            </select>
                        </div>
                    </div>
                    <div className='sm:grid grid-cols-2 gap-3'>
                        <div className='w-full flex flex-col my-4 mx-2'>
                            <label className='text-sm'>Description</label>
                            <input id="testimonial" name="testimonial" className='py-3 px-2 focus:ring-0 focus:outline-none rounded-sm border-0' value={formComments} onChange={(e)=>{
                                setFormComments(e.target.value)
                            }} placeholder="Description" required/>
                        </div>
                        <div className='w-full flex flex-col my-4 mx-2'>
                            <label className='text-sm'>Value ($)</label>
                            <input id="testimonial" name="testimonial" type={'number'} className='py-3 px-2 focus:ring-0 focus:outline-none rounded-sm border-0' value={formValue} onChange={(e)=>{
                                setFormValue(e.target.value)
                            }} placeholder="0" required/>
                        </div>
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
                        accounts ? 
                        <>
                        <div className="p-6 bg-white border-b border-gray-200">Accounting Records</div>
                        <DataTable data={accounts ? accounts : []}/>
                        </>
                        :
                        <div className="p-6 bg-white border-b border-gray-200">There are no accounting records</div>
                        }
                        <div>
                            <div>Debit Total is <span style={{color: 'rgb(239 68 68)'}}>{totals ? totals.debit : 0}</span></div>
                            <div>Credit Total is <span style={{color: 'rgb(34 197 94)'}}>{totals ? totals.credit : 0}</span></div>
                        </div>
                        <div>
                            <div>Net Balance is {totals ? totals.debit > totals.credit ? <span style={{color: 'rgb(239 68 68)'}}>{totals.credit - totals.debit}</span> : <span style={{color: 'rgb(34 197 94)'}}>{totals.credit - totals.debit}</span> : 0}</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </Authenticated>
    );
}
