@php
    $pages = [
        [
            'item_text' => 'Characters',
            'route_name' => '',
        ],
        [
            'item_text' => 'Comics',
            'route_name' => 'comics.index',
        ],
        [
            'item_text' => 'Movies',
            'route_name' => '',
        ],
        [
            'item_text' => 'Tv',
            'route_name' => '',
        ],
        [
            'item_text' => 'Games',
            'route_name' => '',
        ],
        [
            'item_text' => 'Collectibles',
            'route_name' => '',
        ],
        [
            'item_text' => 'Videos',
            'route_name' => '',
        ],
        [
            'item_text' => 'Fans',
            'route_name' => '',
        ],
        [
            'item_text' => 'News',
            'route_name' => '',
        ],
        [
            'item_text' => 'Shop',
            'route_name' => '',
        ],
    ];
@endphp

<header>

    <div class="header-top">
        <div class="container">
            <ul>
                <li><a href="">DC Power Visa</a></li>
                <li><a href="">Additional DC sites</a></li>
            </ul>
        </div>
    </div>

    <nav class="header-bottom container flex flex-between">

        <div class="logo">
            <a href="/">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </a>

        </div>
        <ul class="flex align-center">
            @foreach ($pages as $page)
                <li>
                    {{-- aggiunta classe attiva --}}
                    <a class="{{ Route::currentRouteName() === $page['route_name'] ? 'active' : '' }}"
                        {{-- aggiunto un controllo che verifica la presenza di elementi da stampare --}}
                        href="{{ $page['route_name'] != '' ? route($page['route_name']) : '' }}">{{ $page['item_text'] }}</a>
                </li>
            @endforeach
        </ul>

    </nav>
</header>
