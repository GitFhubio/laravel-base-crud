@extends('beers.layout.app')
@section('title')
Homepage
@endsection
@section('content')
  <div class="header d-flex justify-content-between align-items-center">
    <h1 class="text-center">Lista birre</h1>
    <a style="height:80%;" href="{{route('beers.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Create a new beer</a>
  </div>
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
            <script type="text/javascript">
                $('.show_confirm').click(function(e) {
                    if(!confirm('This action cannot be undone. Are you sure you want to delete this?')) {
                        e.preventDefault();
                    }
                });
            </script>
@endsection
