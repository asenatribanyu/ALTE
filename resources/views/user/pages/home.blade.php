@extends('user.layouts.main')
@section('title', 'Beranda')
@section('content')
    <div class="container mx-auto">
        @include('user.partials.hero')
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-2">
            @foreach ($artikels as $artikel)
                <div>
                    @include('user.partials.cardWithImage')
                </div>
            @endforeach
        </div>
    </div>

@endsection
