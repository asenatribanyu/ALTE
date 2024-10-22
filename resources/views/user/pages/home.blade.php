@extends('user.layouts.main')
@section('title', 'Beranda')
@section('content')
    <div class="w-full mx-auto sm:max-w-lg md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
        @include('user.partials.jumbotron')
        @include('user.partials.hero')
        @include('user.partials.headingSOP')
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-2">
            @foreach ($artikels as $artikel)
                <div>
                    @include('user.partials.cardWithImage')
                </div>
            @endforeach
        </div>
        <div class="flex items-center justify-center mt-5 lg:mt-10">
            <a href="/standar-operasi-prosedur"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Lihat
                semua SOP</a>
        </div>
    </div>
@endsection
