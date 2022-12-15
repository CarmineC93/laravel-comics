<header>
    <nav class="container flex flex-between">

        <div class="logo">
            <a href="">
                <img src="../assets/img/dc-logo.png" alt="logo">
            </a>

        </div>
        <ul class="flex align-center">
            @foreach ($pages as $page)
                <li>
                    <a href={{ route($page) }}>{{ $page }}</a>
                </li>
            @endforeach
        </ul>

    </nav>
</header>
