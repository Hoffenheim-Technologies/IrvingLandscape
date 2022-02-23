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
    const [deleteSuccess, setDeleteSuccess] = useState(null)
    const [deleteConfirm, setDeleteConfirm] = useState(false)

    const onDelete = (id) => {
        let testimonialList = [...testimonials]
        let index = testimonialList.findIndex(testimonial => testimonial.id === id)
        console.log(index)
        testimonialList.splice(index, 1)
        setTestimonials(testimonialList)
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
                checkboxSelection
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
    
    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Irving Landscape | Testimonials</h2>}
        >
            <Head title="Testimonials" />
            <Snackbar open={deleteSuccess} autoHideDuration={3000} onClose={handleClose} anchorOrigin={{ vertical: 'top', horizontal: 'right' }}>
                <Alert onClose={handleClose} severity="success" sx={{ width: '100%' }}>
                    Deleted Successfully!
                </Alert>
            </Snackbar>

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
