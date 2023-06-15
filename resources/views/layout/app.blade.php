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

    <div class="mainView">
        @yield( 'content' )
    </div>
    
</body>
</html>