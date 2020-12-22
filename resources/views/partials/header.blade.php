<header>
    <div id="logo">
        <img src="{{ asset('images/marchio-sito-test.png')}}" alt="logo">
    </div>
    <div class="menu">
        <nav>
            <ul>
                <li>
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('prodotti-page') }} ">Prodotti</a>
                </li>
                <li>
                    <a href="{{ route('news-page') }} ">News</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
