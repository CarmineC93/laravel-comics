{{-- Mostra solo un comic --}}

@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <img src="{{ $singleComic['thumb'] }}" alt="{{ $singleComic['title'] }}">
            <h2>{{ $singleComic['title'] }}</h2>
        </div>
    </section>
@endsection
