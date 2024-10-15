<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Home</title>
</head>

<body class="bg-gray-50 dark:bg-gray-900">
    @include('user.partials.navbar')

    <div class="max-md:px-2">
        @yield('content')
        @include('user.partials.footer')
    </div>

    <script src="{{ asset('js/global.js') }}"></script>
</body>

</html>
