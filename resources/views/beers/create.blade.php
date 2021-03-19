@extends('beers.layout.app')
@section('title')
Form
@endsection
@section('content')
    <form action="{{route('beers.store')}}" method="post">
      @csrf
      {{-- csrf fa un input con un token,serve per far capire a laravel
      per capire se la chiamata viene dalla sua form --}}
      @method('POST')
      <div class="form-group">
      <label for="brand">Brand</label>
      <input class="form-control" type="text" name="brand" value="">
      </div>
      <div class="form-group">
      <label for="materials">Materials</label>
      <input class="form-control" type="text" name="materials" value="">
          </div>
        <div class="form-group">
      <label for="fermentation">Fermentation</label>
      <input class="form-control" type="text" name="fermentation" value="">
          </div>
        <div class="form-group">
      <label for="colour">Colour</label>
      <input class="form-control" type="text" name="colour" value="">
        </div>
        <div class="form-group">
      <label for="strength">Strength</label>
      <input class="form-control" type="text" name="strength" value="">
        </div>
        <div class="form-group">
      <label for="price">Price</label>
      <input class="form-control" type="text" name="price" value="">
        </div>
        <div class="form-group">
      <label for="cover">Cover</label>
      <input class="form-control" type="text" name="cover" value="">
        </div>
      <input class="btn btn-primary" type="submit" name="" value="Invia">
      {{-- devi specificarlo a laravel per dirgli di accettare la post --}}
      {{-- lui per creare input hidden ha bisogno di questo @method --}}
    </form>
@endsection
