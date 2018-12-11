<html>
    <head>
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            @include('inc.messages')
            @yield('content')
        </div>
    </body>
</html>