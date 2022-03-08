import React from 'react';
import Authenticated from '@/Layouts/Authenticated';
import { Head } from '@inertiajs/inertia-react';
import { Link } from '@inertiajs/inertia-react';

export default function Dashboard(props) {
    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Irving Landscape</h2>}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200">Welcome to Your Dashboard, {props.auth.user.name}!</div>
                    </div>
                </div>
            </div>
            <div className='flex flex-row'>
            <div className="py-12 w-1/2">
                <div className="w-full mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200 flex justify-between items-center">
                            <span>Our Users.</span>
                        <Link
                            href={route('users')}
                            className={
                                'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-lg text-gray-900 transition duration-150 ease-in-out no-underline'
                            }
                            >
                                Users
                            </Link>
                        </div>
                    </div>
                </div>
            </div>

            <div className="py-12 w-1/2">
                <div className="w-full mx-auto sm:px-6 lg:px-8">
                    <div className="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div className="p-6 bg-white border-b border-gray-200 flex justify-between items-center">
                            <span>Check out the Testimonials.</span>
                        <Link
                            href={route('testimonial')}
                            className={
                                'inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-lg text-gray-900 transition duration-150 ease-in-out no-underline'
                            }
                            >
                                Testimonials
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
        </Authenticated>
    );
}
