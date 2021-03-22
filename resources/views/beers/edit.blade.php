@extends('beers.layout.app')
@section('title','Form')
{{-- @section('title')
Form
@endsection --}}
@section('content')
  <div class="container">
    <form id="validateForm" action="{{route('beers.update',['beer'=>$beer->id])}}" method="post">
      @csrf
      {{-- csrf fa un input con un token,serve per far capire a laravel
      per capire se la chiamata viene dalla sua form --}}
      @method('PUT')
      <div class="form-group">
      <label for="brand">Brand</label>
      <input class="form-control" type="text" name="brand" value="{{$beer->brand}}">
            </div>
      <div class="form-group">
      <label for="materials">Raw Materials</label>
      <input class="form-control" type="text" name="materials" value="{{$beer->materials}}">
          </div>
        <div class="form-group">
      <label for="fermentation">Fermentation</label>
      <select class="form-control" name="fermentation">
        <option value="low" {{$beer->fermentation=="low" ? 'selected=selected' : ""}}>low</option>
        <option value="high" {{$beer->fermentation=="high" ? 'selected=selected' : ""}}>high</option>
        <option value="natural" {{$beer->fermentation=="natural" ? 'selected=selected' : ""}}>natural</option>
      </select>
          </div>
        <div class="form-group">
      <label for="colour">Colour</label>
<select class="form-control" name="colour">
      <option value="pale" {{$beer->colour=="pale" ? 'selected=selected' : ""}}>pale</option>
      <option value="red" {{$beer->colour=="red" ? 'selected=selected' : ""}}>red</option>
      <option value="dark" {{$beer->colour=="dark" ? 'selected=selected' : ""}}>dark</option>
    </select>
  </div>
        <div class="form-group">
      <label for="strength">Strength</label>
      <select class="form-control" name="strength">
            <option value="light" {{$beer->strength=="light" ? 'selected=selected' : ""}}>light</option>
            <option value="normal" {{$beer->strength=="normal" ? 'selected=selected' : ""}}>normal</option>
            <option value="strong" {{$beer->strength=="strong" ? 'selected=selected' : ""}}>strong</option>
          </select>
        </div>
        <div class="form-group">
      <label for="price">Price</label>
      <input class="form-control" type="text" name="price" value="{{$beer->price}}">
        </div>
        <div class="form-group">
      <label for="cover">Cover</label>
      <input class="form-control" type="text" name="cover" value="{{$beer->cover}}">
        </div>
        <div class="d-flex justify-content-between">
          <input class="btn btn-primary" type="submit" name="" value="Invia">
          <a href="{{route('beers.index')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Torna alla lista birre</a>
        </div>
      {{-- devi specificarlo a laravel per dirgli di accettare la post --}}
      {{-- lui per creare input hidden ha bisogno di questo @method --}}
    </form>
      </div>
      <script type="text/javascript">

              $('#validateForm').bootstrapValidator({
              feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
              },
              fields: {
                brand: {
                  validators: {
                    stringLength: {
                      min: 1,
                      max:50,
                      message: 'The brand name cannot be longer than 50 characters'
                    },
                    notEmpty: {
                      message: 'Please enter a brand name'
                    }
                  }
                },
                materials: {
                  validators: {
                    stringLength: {
                      min: 1,
                      max:250,
                      message: 'The raw materials cannot be longer than 250 characters'
                    },
                    notEmpty: {
                      message: 'Please specify the raw materials'
                    }
                  }
                },
                price: {

        validators: {
          numeric: {
          message: 'The price must be a number'
          },
          notEmpty: {
            message: 'Please enter a number'
          }
        }
      },
      cover: {
        validators: {
          stringLength: {
            min: 1,
            max:2048,
            message: 'The image url cannpt be longer than 2048 characters'
          },
          notEmpty: {
            message: 'Please enter an image URL'
          }
        }
      },
                }
              });
      </script>
@endsection
