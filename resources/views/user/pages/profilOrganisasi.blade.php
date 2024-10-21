@extends('user.layouts.main')
@section('title', 'Struktur Organisasi')
@section('content')
    <div class="w-full mx-auto sm:max-w-lg md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
        @include('user.partials.hero')
        @include('user.partials.strukturOrganisasi')
    </div>
@endsection
