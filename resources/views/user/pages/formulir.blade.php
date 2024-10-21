@extends('user.layouts.main')
@section('title', 'Formulir')
@section('content')
    <div class="w-full mx-auto my-5 sm:max-w-lg md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
            @include('user.partials.cardOnly')
        </div>
    </div>
@endsection
