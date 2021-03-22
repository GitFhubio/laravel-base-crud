@extends('beers.layout.app')
@section('title')
Product
@endsection
@section('content')
    <div class="product-container d-flex align-items-center flex-column">
        <div class="card" style="width: 20rem;">
            <img class="card-img-top" src="{{$beer->cover}}" alt="Card image cap">
            <div class="card-body">
            <p class="card-text"><strong>#{{$beer->id}}</strong></p>
            <p class="card-text"><strong>Brand: </strong>{{$beer->brand}}</p>
            <p class="card-text"><strong>Raw Materials: </strong>{{$beer->materials}}</p>
            <p class="card-text"><strong>Fermentation: </strong>{{$beer->fermentation}}</p>
            <p class="card-text"><strong>Colour: </strong> {{$beer->colour}}</p>
            <p class="card-text"><strong>Price: </strong> {{$beer->price}}</p>
            <div class="card-buttons d-flex justify-content-between align-items-center">
            <a href="{{route('beers.edit',['beer'=>$beer->id])}}" class="btn btn-primary">Edit</a>
            {{-- l'edit lo faremo lunedi --}}
            <form method="POST" action="{{route('beers.destroy', ['beer' => $beer->id])}}">
                @csrf
                @method('DELETE')
                <button type="submit" name="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-danger show_confirm">
                  Delete<i class="fas fa-trash"></i>
                </button>
              </form>
            </div>
            </div>
        </div>
        <div class="buttons">
          <a href="{{route('beers.index')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Torna alla lista birre</a>
          <a href="{{route('beers.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Inserisci nuova birra</a>
        </div>
    </div>
    <script type="text/javascript">
        $('.show_confirm').click(function(e) {
            if(!confirm('This action cannot be undone. Are you sure you want to delete this?')) {
                e.preventDefault();
            }
        });
    </script>
        {{-- <table class="table">
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
        </table> --}}

    </head>
@endsection
