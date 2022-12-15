<div class="services ">
    <div class="container">
        <ul class="flex align-center">
            @foreach ($services as $service)
                <li>
                    <div class="flex">

                        <img src={{ Vite::asset($service['image']) }} alt="{{ $service['title'] }}">
                        <h6> <a href="{{ $service['title'] }}"> {{ $service['title'] }} </a> </h6>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
