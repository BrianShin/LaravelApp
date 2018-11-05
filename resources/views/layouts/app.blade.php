<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="{{asset('css/app.css')}}">
        <!-- {{ config('app.name', 'Brian') }} -->
        <title>Brian</title>
    </head>
    <body>
        <!-- navigation -->
        @include('include.navbar ')

        <div class='container'>
                @yield('content')
        </div>        
    </body>
</html>