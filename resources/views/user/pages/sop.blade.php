@extends('user.layouts.main')
@section('title', 'SOP')
@section('content')
    <div class="w-full mx-auto mt-5 sm:max-w-lg md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-2">
            @foreach ($artikels as $artikel)
                <div>
                    @include('user.partials.cardWithImage')
                </div>
            @endforeach
        </div>
    </div>
@endsection
