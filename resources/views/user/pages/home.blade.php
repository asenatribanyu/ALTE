@extends('user.layouts.main')
@section('title', 'Beranda')
@section('content')
    <div class="container mx-auto">
        <div class="flex justify-center gap-4 my-5">
            <div class="w-7/12 ">
                @include('user.partials.carousel')
            </div>
            <div class="w-5/12">
                @include('user.partials.quickAccess')
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 lg:grid-cols-2">
            @for ($i = 0; $i < 5; $i++)
                <div>
                    @include('user.partials.cardWithImage')
                </div>
            @endfor
        </div>
    </div>

@endsection
