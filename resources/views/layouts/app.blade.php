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
                <img src="{{ asset('images/marchio-sito-test.png')}}" alt="">
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
