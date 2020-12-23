<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>@yield('title')</title>
    </head>
    <body>
        <div class="container">
            @include('partials.header')

            <main>
                @yield('content')
                @yield('cards')
            </main>

        </div>

        @include('partials.footer')

        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
