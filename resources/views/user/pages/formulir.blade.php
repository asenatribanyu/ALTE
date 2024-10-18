@extends('user.layouts.main')
@section('title', 'Formulir')
@section('content')
    <div class="mx-auto my-5 max-w-7xl">
        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
            @include('user.partials.cardOnly')
        </div>
    </div>
@endsection
