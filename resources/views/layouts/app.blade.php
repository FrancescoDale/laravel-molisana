<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>La Molisana</title>
    </head>
    <body>
        @include('partials.header')
        <main>
            @yield('content')

        </main>

        @include('partials.footer')

        <script src="{{ asset('js/app.js')}}" charset="utf-8"></script>
    </body>
</html>
