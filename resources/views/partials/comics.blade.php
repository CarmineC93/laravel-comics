@foreach ($data as $comic)
    <div class="card">
        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
        <h5>{{ $comic['title'] }}</h5>
    </div>
@endforeach
