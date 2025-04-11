import { Head } from '@inertiajs/react';

export default function Welcome({ auth, laravelVersion, phpVersion }) {
    return (
        <>
            <Head title="Health System" />
            <div className="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                <div className="max-w-7xl mx-auto p-6 lg:p-8">
                    <div className="flex justify-center">
                        <svg
                            viewBox="0 0 62 65"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            className="h-16 w-auto bg-gray-100 dark:bg-gray-900"
                        >
                            {/* your SVG content */}
                        </svg>
                    </div>

                    <div className="text-center scale-100 p-16 bg-white border-t-4 rounded-lg">
                        <h1 className="text-4xl font-bold text-gray-900 dark:text-white">
                            Health System
                        </h1>
                        <p className="mt-2 text-lg text-gray-600 dark:text-gray-300">
                            Multi-Tenancy System
                        </p>
                    </div>
                </div>
            </div >
        </>
    );
}
