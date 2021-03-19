@extends('beers.layout.app')
@section('title')
Homepage
@endsection
@section('content')
    <h1 class="text-center">Lista birre</h1>
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
                <th  class="align-middle" scope="row"><a href="{{route('beers.show',['beer'=>$beer->id])}}">{{$beer->id}}</a></th>
                <td  class="align-middle"><a href="{{route('beers.show',['beer'=>$beer->id])}}">{{$beer->brand}}</a></td>
                <td  class="align-middle"><a href="{{route('beers.show',['beer'=>$beer->id])}}">{{$beer->materials}}</a></td>
                <td  class="align-middle"><a href="{{route('beers.show',['beer'=>$beer->id])}}">{{$beer->fermentation}}</a></td>
                <td  class="align-middle"><a href="{{route('beers.show',['beer'=>$beer->id])}}">{{$beer->colour}}</a></td>
                <td  class="align-middle"><a href="{{route('beers.show',['beer'=>$beer->id])}}">{{$beer->strength}}</a></td>
                <td  class="align-middle"><a href="{{route('beers.show',['beer'=>$beer->id])}}">{{$beer->price}}</a></td>
                <td><a href="{{route('beers.show',['beer'=>$beer->id])}}"><img src="{{$beer->cover}}" width="150" /></a></td>
              </tr>
            @endforeach
@endsection
