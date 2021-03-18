<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Il chiostro</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
         <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Styles -->
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Brand</th>
              <th scope="col">Materials</th>
              <th scope="col">Fermentation</th>
              <th scope="col">Colour</th>
              <th scope="col">Strength</th>
              <th scope="col">Price</th>
              <th scope="col">Cover</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($beers as $beer)
              <tr>
                <th scope="row">{{$beer->id}}</th>
                <td>{{$beer->brand}}</td>
                <td>{{$beer->materials}}</td>
                <td>{{$beer->fermentation}}</td>
                <td>{{$beer->colour}}</td>
                <td>{{$beer->strength}}</td>
                <td>{{$beer->price}}</td>
                <td><img src="{{$beer->cover}}" width="150" /></td>
              </tr>
            @endforeach

          </tbody>
        </table>

    </head>
    <body>

    </body>
</html>
