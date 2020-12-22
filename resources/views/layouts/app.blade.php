<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>La Molisana</title>
    </head>
    <body>
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
        <main>
            @yield('content')

        </main>

        <footer>

        </footer>

        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
