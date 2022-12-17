{{-- Mostra tutti i comics --}}
@extends('layouts.app')

@section('content')
    <section class="pt-4">
        <div class="container">
            <div class="row row-cols-3">
                @foreach ($comics as $index => $comic)
                    <div class="col mb-3">
                        <div class="item">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                            <a href="{{ route('comics.show', $index) }}" class="text-light">{{ $comic['series'] }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
