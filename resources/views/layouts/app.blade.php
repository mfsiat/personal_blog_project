<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{config('app.name', 'MyBlog')}}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        {{-- <link rel="stylesheet" href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css"> --}}
    </head>
    <body>
        @include('inc.navbar')
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>
    </body>
</html>
