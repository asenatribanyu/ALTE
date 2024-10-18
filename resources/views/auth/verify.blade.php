<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Verifikasi | Arsip Lab Teknik Elektro</title>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    <section class="flex flex-col items-center justify-center min-h-screen">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
            <a href="/" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class=" w-80" src="{{ asset('img/PNPElektro.png') }}" alt="logo">
            </a>
            <div
                class="relative w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="flex flex-col items-center justify-center">
                        <h1
                            class="text-xl font-semibold leading-tight tracking-tight text-center text-gray-900 md:text-2xl dark:text-white">
                            Verifikasi Email
                        </h1>
                        <small class="mt-1 text-sm text-center text-gray-900 dark:text-white">Silakan periksa kotak
                            masuk email Anda dan klik tautan yang diberikan untuk memverifikasi alamat email Anda. Jika
                            Anda tidak menerima email tersebut, klik tombol di bawah ini.</small>
                    </div>
                    @if (session('status') == 'verification-link-sent')
                        <div class="text-blue-500">Email verifikasi telah dikirim.</div>
                    @endif
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Kirim
                            ulang email</button>
                    </form>
                </div>
            </div>
            @include('user.partials.footerAuth')
        </div>
    </section>
</body>

</html>
