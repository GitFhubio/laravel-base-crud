<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Il chiostro - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="{{asset('css/app.css')}}">
          <script src="{{ asset('js/app.js') }}"></script>
          <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
          <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
        <!-- Styles -->
    </head>
    <body>
  <div class="wrapper">
    {{-- <div class="error-section">
      @if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
    </div> --}}
      <main>
    @yield('content')
   </main>
   </div>
   <script type="text/javascript">
    $('.show_confirm').click(function(e) {
        if(!confirm('This action cannot be undone. Are you sure you want to delete this?')) {
            e.preventDefault();
        }
    });
</script>
    </body>
</html>
