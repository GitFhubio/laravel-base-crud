@extends('beers.layout.app')
@section('title')
Product
@endsection
@section('content')
    <h1 class="text-center">Birra selezionata</h1>
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
              <tr>
                <th class="align-middle" scope="row">{{$beer->id}}</th>
                <td class="align-middle">{{$beer->brand}}</td>
                <td class="align-middle">{{$beer->materials}}</td>
                <td class="align-middle">{{$beer->fermentation}}</td>
                <td class="align-middle">{{$beer->colour}}</td>
                <td class="align-middle">{{$beer->strength}}</td>
                <td class="align-middle">{{$beer->price}}</td>
                <td class="align-middle"><img src="{{$beer->cover}}" width="150" /></td>
              </tr>
          </tbody>
        </table>

    </head>
@endsection
