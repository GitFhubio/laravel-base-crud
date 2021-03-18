<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Il chiostro - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Styles -->
    </head>
    <body>
      <main>
    @yield('content')
   </main>
    </body>
</html>
