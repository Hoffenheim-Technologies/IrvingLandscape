import React, { useState, useEffect } from 'react'
import Authenticated from '@/Layouts/Authenticated'
import { Head } from '@inertiajs/inertia-react'
import { DataGrid } from '@mui/x-data-grid'

import { API_BASE_URL } from '../config'


const columns = [
    { field: 'id', headerName: 'ID', width: 70 },
    { field: 'email', headerName: 'Email', width: 200, type: 'string' },
    { field: 'created_at', headerName: 'Date Added', width: 500, type: 'date',valueFormatter: (params) => {
        // first converts to JS Date, then to locale option through date-fns
        let mydate = Date(params.value)
        return mydate;
      } },
];

const rows = [
    { id: 1, lastName: 'Snow', firstName: 'Jon', age: 35 },
    { id: 2, lastName: 'Lannister', firstName: 'Cersei', age: 42 },
    { id: 3, lastName: 'Lannister', firstName: 'Jaime', age: 45 },
    { id: 4, lastName: 'Stark', firstName: 'Arya', age: 16 },
    { id: 5, lastName: 'Targaryen', firstName: 'Daenerys', age: null },
    { id: 6, lastName: 'Melisandre', firstName: null, age: 150 },
    { id: 7, lastName: 'Clifford', firstName: 'Ferrara', age: 44 },
    { id: 8, lastName: 'Frances', firstName: 'Rossini', age: 36 },
    { id: 9, lastName: 'Roxie', firstName: 'Harvey', age: 65 },
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

export default function Subscribers(props) {
    const [users, setUsers] = useState(null)
    const [isLoading, setIsLoading] = useState(null)

    const getUsers = async () => {
        console.log('started')
        if(!users) {
            try {       
                setIsLoading(true)
                const response = await fetch(API_BASE_URL + '/subscribers')
                const usersList = await response.json()
                console.log(usersList)
                setUsers(usersList.data)
                setIsLoading(false)
                console.log(users)
            } catch (error) {
                setIsLoading(false)
                console.error(error)
            }
        }
    }

    useEffect(() => {
      getUsers()
      console.log(users)
    }, [])
    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Irving Landscape | Subscribers</h2>}
        >
            <Head title="Subscribers" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">Subscribers</div>
                        <DataTable data={users ? users : []}/>
                    </div>
                </div>
            </div>
        </Authenticated>
    );
}
