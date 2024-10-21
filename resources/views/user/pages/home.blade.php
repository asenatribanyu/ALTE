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
    </div>
@endsection
