@extends('user.layouts.main')

@section('content')
    <div class="container flex justify-center gap-4 mx-auto">
        <div class="w-1/2">
            @include('user.partials.cardWithImage')
            @include('user.partials.cardWithImage')
        </div>
        <div class="w-1/2">
            @include('user.partials.carousel')
            @include('user.partials.cardOnly')
        </div>
    </div>
@endsection
