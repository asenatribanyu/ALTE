<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Reset Password</title>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    <section>
        <div class="flex flex-col items-center justify-center min-h-screen">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-40" src="https://flowbite.com/docs/images/logo.svg" alt="logo">
            </a>
            <div
                class="relative w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <button type="button"
                    class="toggle-button absolute top-3 right-0 text-white dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center mr-2"
                    id="darkModeToggle">
                    <svg class="w-[18px] h-[18px] text-gray-800 dark:text-white toggle-icon toggle-icon-light"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path
                            d="M17.8 13.75a1 1 0 0 0-.859-.5A7.488 7.488 0 0 1 10.52 2a1 1 0 0 0 0-.969A1.035 1.035 0 0 0 9.687.5h-.113a9.5 9.5 0 1 0 8.222 14.247 1 1 0 0 0 .004-.997Z" />
                    </svg>
                    <svg class="w-[18px] h-[18px] text-gray-800 dark:text-white hidden toggle-icon toggle-icon-dark"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10Zm0-11a1 1 0 0 0 1-1V1a1 1 0 0 0-2 0v2a1 1 0 0 0 1 1Zm0 12a1 1 0 0 0-1 1v2a1 1 0 1 0 2 0v-2a1 1 0 0 0-1-1ZM4.343 5.757a1 1 0 0 0 1.414-1.414L4.343 2.929a1 1 0 0 0-1.414 1.414l1.414 1.414Zm11.314 8.486a1 1 0 0 0-1.414 1.414l1.414 1.414a1 1 0 0 0 1.414-1.414l-1.414-1.414ZM4 10a1 1 0 0 0-1-1H1a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1Zm15-1h-2a1 1 0 1 0 0 2h2a1 1 0 0 0 0-2ZM4.343 14.243l-1.414 1.414a1 1 0 1 0 1.414 1.414l1.414-1.414a1 1 0 0 0-1.414-1.414ZM14.95 6.05a1 1 0 0 0 .707-.293l1.414-1.414a1 1 0 1 0-1.414-1.414l-1.414 1.414a1 1 0 0 0 .707 1.707Z" />
                    </svg>
                </button>
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="flex flex-col items-center justify-center">
                        <div class="flex flex-col justify-center">
                            <h1
                                class="text-xl font-semibold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                                Reset Password
                            </h1>
                            <small class="mt-1 text-sm text-center text-gray-900 dark:text-white">Please fill in the
                                password with a new one to change the old passwords.</small>
                        </div>
                    </div>
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div>
                            <input type="hidden" name="token" value="{{ request()->token }}">
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required value="{{ request()->email }}">
                            @error('email')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New
                                Password</label>
                            <input type="password" name="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('password')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm New
                                Password
                            </label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('password_confirmation')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <input type="hidden" name="token" value="{{ request()->route('token') }}">
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Reset
                            Password</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>