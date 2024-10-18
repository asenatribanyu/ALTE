<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Atur Ulang Password | Arsip Lab Teknik Elektro</title>
</head>

<body class="px-6 bg-gray-50 dark:bg-gray-900 md:px-0">
    <section>
        <div class="flex flex-col items-center justify-center min-h-screen">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class=" w-80" src="{{ asset('img/PNPElektro.png') }}" alt="logo">
            </a>
            <div
                class="relative w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="flex flex-col items-center justify-center">
                        <div class="flex flex-col justify-center">
                            <h1
                                class="text-xl font-semibold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                                Atur Ulang Password
                            </h1>
                            <small class="mt-1 text-sm text-center text-gray-900 dark:text-white">Silakan isi kata sandi
                                baru untuk mengganti kata sandi lama.</small>
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
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password
                                Baru</label>
                            <input type="password" name="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('password')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <label for="password_confirmation"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi Password
                                Baru
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
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Atur
                            Ulang Password</button>
                    </form>
                </div>
            </div>
            @include('user.partials.footerAuth')
        </div>
    </section>
</body>

</html>
