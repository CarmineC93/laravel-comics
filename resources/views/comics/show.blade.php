{{-- Mostra solo un comic --}}

@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <img src="{{ $singleComic['thumb'] }}" alt="{{ $singleComic['title'] }}">
            <h2 class="text-light">{{ $singleComic['title'] }}</h2>
            <h4 class="text-light">{{ $singleComic['sale_date'] }}</h4>
            <h4 class="text-light">{{ $singleComic['description'] }}</h4>

        </div>
    </section>
@endsection
