import React, { useState } from 'react';
import ApplicationLogo from '@/Components/ApplicationLogo';
import Dropdown from '@/Components/Dropdown';
import NavLink from '@/Components/NavLink';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink';
import { Link } from '@inertiajs/inertia-react';

export default function Authenticated({ auth, header, children }) {
    const [showingNavigationDropdown, setShowingNavigationDropdown] = useState(false);

    return (
        <div className='sm:flex flex-row sm:w-full'>
            <div className='hidden sm:block sm:w-1/6 sm:min-w-[200px] shrink-0'>
                <nav className="bg-green-300 border-b h-full border-gray-100 pt-5">
                    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div className="flex justify-between h-16">
                            <div className="flex flex-col">
                                <div className="shrink-0 flex items-center justify-center mb-12">
                                    <Link href={route('dashboard')}>
                                        <ApplicationLogo className="block h-9 w-auto text-gray-500" />
                                    </Link>
                                </div>
                                <div className="hidden space-x-8 sm:my-3 sm:flex">
                                    <NavLink href={route('dashboard')} active={route().current('dashboard')}>
                                        Dashboard
                                    </NavLink>
                                </div>
                                <div className="hidden space-x-8 sm:my-3 sm:flex">
                                    <NavLink href={route('users')} active={route().current('users')}>
                                        Users
                                    </NavLink>
                                </div>
                                <div className="hidden space-x-8 sm:my-3 sm:flex">
                                    <NavLink href={route('subscribers')} active={route().current('subscribers')}>
                                        Subscribers
                                    </NavLink>
                                </div>
                                <div className="hidden space-x-8 sm:my-3 sm:flex">
                                    <NavLink href={route('testimonial')} active={route().current('testimonial')}>
                                        Testimonial
                                    </NavLink>
                                </div>
                                <div className="hidden space-x-8 sm:my-3 sm:flex">
                                    <NavLink href={route('items')} active={route().current('items')}>
                                        Items
                                    </NavLink>
                                </div>
                                <div className="hidden space-x-8 sm:my-3 sm:flex">
                                    <NavLink href={route('packages')} active={route().current('packages')}>
                                        Packages
                                    </NavLink>
                                </div>
                                <div className="hidden space-x-8 sm:my-3 sm:flex">
                                    <NavLink href={route('account')} active={route().current('account')}>
                                        Accounting
                                    </NavLink>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div className="min-h-screen relative bg-gray-100 sm:w-5/6 sm:max-w-[calc(100%-200px)]">
                <nav className="bg-white border-b border-gray-100">
                    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div className="justify-end w-full">
                            <div className="hidden sm:flex sm:items-center sm:ml-6 justify-end">
                                <div className="ml-3 relative">
                                    <Dropdown>
                                        <Dropdown.Trigger>
                                            <span className="inline-flex rounded-md">
                                                <button
                                                    type="button"
                                                    className="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                                >
                                                    {auth.user.name}

                                                    <svg
                                                        className="ml-2 -mr-0.5 h-4 w-4"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                    >
                                                        <path
                                                            fillRule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clipRule="evenodd"
                                                        />
                                                    </svg>
                                                </button>
                                            </span>
                                        </Dropdown.Trigger>

                                        <Dropdown.Content>
                                            <Dropdown.Link href={route('logout')} method="post" as="button">
                                                Log Out
                                            </Dropdown.Link>
                                        </Dropdown.Content>
                                    </Dropdown>
                                </div>
                            </div>

                            <div className="-mr-2 flex items-center sm:hidden">
                                <button
                                    onClick={() => setShowingNavigationDropdown((previousState) => !previousState)}
                                    className="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                                >
                                    <svg className="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path
                                            className={!showingNavigationDropdown ? 'inline-flex' : 'hidden'}
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                            strokeWidth="2"
                                            d="M4 6h16M4 12h16M4 18h16"
                                        />
                                        <path
                                            className={showingNavigationDropdown ? 'inline-flex' : 'hidden'}
                                            strokeLinecap="round"
                                            strokeLinejoin="round"
                                            strokeWidth="2"
                                            d="M6 18L18 6M6 6l12 12"
                                        />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div className={(showingNavigationDropdown ? 'block' : 'hidden') + ' sm:hidden'}>
                        <div className="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink href={route('dashboard')} active={route().current('dashboard')}>
                                Dashboard
                            </ResponsiveNavLink>
                        </div>
                        <div className="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink href={route('users')} active={route().current('users')}>
                                Users
                            </ResponsiveNavLink>
                        </div>
                        <div className="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink href={route('subscribers')} active={route().current('subscribers')}>
                                Subscribers
                            </ResponsiveNavLink>
                        </div>
                        <div className="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink href={route('testimonial')} active={route().current('testimonial')}>
                                Testimonial
                            </ResponsiveNavLink>
                        </div>
                        <div className="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink href={route('items')} active={route().current('items')}>
                                Items
                            </ResponsiveNavLink>
                        </div>
                        <div className="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink href={route('packages')} active={route().current('packages')}>
                                Packages
                            </ResponsiveNavLink>
                        </div>
                        <div className="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink href={route('account')} active={route().current('account')}>
                                Accounting
                            </ResponsiveNavLink>
                        </div>
                        {/* <div className="pt-2 pb-3 space-y-1">
                            <ResponsiveNavLink href={route('sales')} active={route().current('sales')}>
                                Sales
                            </ResponsiveNavLink>
                        </div> */}

                        <div className="pt-4 pb-1 border-t border-gray-200">
                            <div className="px-4">
                                <div className="font-medium text-base text-gray-800">{auth.user.name}</div>
                                <div className="font-medium text-sm text-gray-500">{auth.user.email}</div>
                            </div>

                            <div className="mt-3 space-y-1">
                                <ResponsiveNavLink method="post" href={route('logout')} as="button">
                                    Log Out
                                </ResponsiveNavLink>
                            </div>
                        </div>
                    </div>
                </nav>

                {header && (
                    <header className="bg-white shadow">
                        <div className="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">{header}</div>
                    </header>
                )}

                <main>{children}</main>
                <div className='absolute w-full text-center'>Powered by Hoffenheim Technologies</div>
            </div>
        </div>
    );
}
