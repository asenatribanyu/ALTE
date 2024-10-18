<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Login | Arsip Lab Teknik Elektro</title>
</head>

<body class="flex items-center justify-center h-screen px-6 bg-gray-50 dark:bg-gray-900 md:px-0">
    <section class="container mx-auto">
        <div class="flex flex-col items-center justify-center">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-80" src="{{ asset('img/PNPElektro.png') }}" alt="logo">
            </a>
            <div
                class="relative w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="flex flex-col items-center justify-center">
                        <h1
                            class="text-xl font-semibold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                            Selamat Datang di Halaman Login <div>Arisp Lab Teknik Elektro</div>
                        </h1>
                        <small class="mt-1 text-sm text-gray-900 dark:text-white">Silahkan masuk dengan akun
                            anda.</small>
                    </div>
                    <form class="space-y-4 md:space-y-5" method="POST">
                        @csrf
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('email')
                                <small
                                    class="text-red-500">{{ $message == 'These credentials do not match our records.' ? 'Your email or password is incorrect. Please try again.' : '' }}</small>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input name="remember" id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Ingat Saya</label>
                                </div>
                            </div>
                            <a href="/forgot-password"
                                class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Lupa
                                Password?</a>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign
                            in</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Belum mempunyai akun? <a href="/register"
                                class="font-medium text-blue-600 hover:underline dark:text-blue-500">Daftar</a>
                        </p>
                    </form>
                </div>
            </div>
            @include('user.partials.footerAuth')
        </div>
    </section>
</body>

</html>
