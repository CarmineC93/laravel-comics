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
                    <a href="/">{{ $page }}</a>
                </li>
            @endforeach
        </ul>

    </nav>
</header>
