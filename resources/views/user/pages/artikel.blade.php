@extends('user.layouts.main')
@section('title', 'Artikel')
@section('content')
    <div class="w-full mx-auto mt-5 sm:max-w-lg md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
        @include('user.partials.articleHero')
        @include('user.partials.article')
    </div>
@endsection
