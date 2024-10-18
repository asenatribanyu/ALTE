<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Daftar | Arsip Lab Teknik Elektro</title>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    <section class="flex flex-col items-center justify-center min-h-screen">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class=" w-80" src="{{ asset('img/PNPElektro.png') }}" alt="logo">
            </a>
            <div
                class="relative w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                </button>
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="flex flex-col justify-center">
                        <h1
                            class="text-xl font-semibold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                            Halaman Registrasi
                        </h1>
                        <small class="mt-1 text-sm text-center text-gray-900 dark:text-white">Silakan masukkan data Anda
                            dalam formulir di bawah ini dan jangan lupa untuk memverifikasi email akun Anda.</small>
                    </div>
                    <form class="space-y-4 md:space-y-5" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div>
                            <label for="name"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama
                                Lengkap</label>
                            <input type="name" name="name" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('name') }}">
                            @error('name')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <label for="npm"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NPM</label>
                            <input type="string" name="npm" id="npm"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('npm') }}">
                            @error('npm')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Email</label>
                            <input type="email" name="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('email') }}">
                            @error('email')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('password') }}">
                            @error('password')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                            <small class="text-gray-500 dark:text-gray-400">*Password harus terdiri dari minimal 8
                                karakter dan mengandung angka</small>
                        </div>
                        <div>
                            <label for="password_confirmation"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Konfirmasi
                                Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="" value="{{ old('password_confirmation') }}">
                            @error('password_confirmation')
                                <small class="text-red-500">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800"
                                    required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the
                                    <a class="font-medium text-blue-600 hover:underline dark:text-blue-500"
                                        href="#">Terms and Conditions</a></label>
                            </div>
                        </div> --}}
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Sudah mempunyai akun? <a href="/login"
                                class="font-medium text-blue-600 hover:underline dark:text-blue-500">Masuk</a>
                        </p>
                    </form>
                </div>
            </div>
            @include('user.partials.footerAuth')
        </div>
    </section>
</body>

</html>
