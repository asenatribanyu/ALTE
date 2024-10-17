@extends('user.layouts.main')
@section('title', 'Artikel')
@section('content')
    <div class="container mx-auto">
        @include('user.partials.hero')
        @include('user.partials.article')
    </div>
@endsection
