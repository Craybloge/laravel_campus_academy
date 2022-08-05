<html>
    <head>
        @if ($title)
                <title>{{ $title }}</title>
        @else
                <title>site vitrine Campus Academy</title>
        @endif
    </head>
    <body>
        <div><a href="/home">Home</a> | <a href="/about">About</a>
        <hr/>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
    