@extends('beers.layout.app')
@section('title')
Homepage
@endsection
@section('nav')
<div class="my-nav d-flex justify-content-around align-items-center">
    <div class="left text-center"><h1 class="text-center">Lista birre</h1></div>
    <div class="center text-center">
    <nav class="navbar navbar-light bg-light">
        <form action="{{ route('beers.index') }}" class="form-inline d-flex justify-content-between" method="GET">
          <input class="form-control" type="search" placeholder="Search" name="search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </nav>
    </div>
    <div class="right text-center">
    <a style="height:80%;" href="{{route('beers.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create a new beer</a>
</div>
</div>
@endsection
@section('content')
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Brand</th>
              <th scope="col">Raw Materials</th>
              <th scope="col">Fermentation</th>
              <th scope="col">Colour</th>
              <th scope="col">Strength</th>
              <th scope="col">Price</th>
              <th scope="col">Cover</th>
              <th scope="col">Options</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($beers as $beer)
              <tr>
                <th  class="align-middle" scope="row"><a href="{{route('beers.show',['beer'=>$beer])}}">{{$beer->id}}</a></th>
                <td  class="align-middle"><a href="{{route('beers.show',compact('beer'))}}">{{$beer->brand}}</a></td>
                <td  class="align-middle"><a href="{{route('beers.show',$beer)}}">{{$beer->materials}}</a></td>
                <td  class="align-middle"><a href="{{route('beers.show',['beer'=>$beer->id])}}">{{$beer->fermentation}}</a></td>
                <td  class="align-middle"><a href="{{route('beers.show',['beer'=>$beer->id])}}">{{$beer->colour}}</a></td>
                <td  class="align-middle"><a href="{{route('beers.show',['beer'=>$beer->id])}}">{{$beer->strength}}</a></td>
                <td  class="align-middle"><a href="{{route('beers.show',['beer'=>$beer->id])}}">{{$beer->price}}</a></td>
                <td class="align-middle"><a href="{{route('beers.show',['beer'=>$beer->id])}}"><img src="{{$beer->cover}}" width="150" /></a></td>
                <td class="align-middle text-center" >
                    <a href="{{route('beers.show',compact('beer'))}}" class="btn btn-primary">Show<i class="fa fa-eye"></i></a>
                    <a href="{{route('beers.edit',['beer'=>$beer->id])}}" class="btn btn-primary">Edit<i class="fas fa-edit"></i></a>
                    <form method="POST" action="{{route('beers.destroy', ['beer' => $beer->id])}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger show_confirm">
                      Delete<i class="fas fa-trash"></i>
                    </button>
                  </form></td>
            </tr>
            @endforeach
@endsection
