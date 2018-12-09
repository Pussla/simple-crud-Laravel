<html>
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-3">
            @yield('content')
        </div>
    </body>
</html>