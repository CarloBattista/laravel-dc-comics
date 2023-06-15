<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titlePage')</title>
    @vite('resources/js/app.js')
</head>
<body>

    @include( 'partials.header' )

    <div class="mainView">
        @yield( 'content' )

        @include( 'partials.hero' )
        @include( 'partials.content' )
    </div>
    
</body>
</html>