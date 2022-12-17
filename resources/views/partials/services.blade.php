@php
    $services = [
        [
            'title' => 'digital comics',
            'image' => 'resources/img/buy-comics-digital-comics.png',
        ],
        [
            'title' => 'dc merchandise',
            'image' => 'resources/img/buy-comics-merchandise.png',
        ],
        [
            'title' => 'subscription',
            'image' => 'resources/img/buy-comics-subscriptions.png',
        ],
        [
            'title' => 'comic shop locator',
            'image' => 'resources/img/buy-comics-shop-locator.png',
        ],
        [
            'title' => 'dc power visa',
            'image' => 'resources/img/buy-dc-power-visa.svg',
        ],
    ];
@endphp

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
