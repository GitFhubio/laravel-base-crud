@extends('beers.layout.app')
@section('title')
Form
@endsection
@section('content')
  <div class="container">
    <form class="was-validated" action="{{route('beers.store')}}" method="post">
      @csrf
      {{-- csrf fa un input con un token,serve per far capire a laravel
      per capire se la chiamata viene dalla sua form --}}
      @method('POST')
      <div class="form-group">
      <label for="brand">Brand</label>
      <input class="form-control" type="text" name="brand" value="" required>
      <div class="valid-feedback">
       Looks good!
      </div>
      <div class="form-group">
      <label for="materials">Materials</label>
      <input class="form-control" type="text" name="materials" value="" required>
      <div class="valid-feedback">
       Looks good!
      </div>
          </div>
        <div class="form-group">
      <label for="fermentation">Fermentation</label>
      <input class="form-control" type="text" name="fermentation" value="" required>
      <div class="valid-feedback">
       Looks good!
      </div>
          </div>
        <div class="form-group">
      <label for="colour">Colour</label>
      <input class="form-control" type="text" name="colour" value="" required>
      <div class="valid-feedback">
       Looks good!
      </div>
        </div>
        <div class="form-group">
      <label for="strength">Strength</label>
      <input class="form-control" type="text" name="strength" value="" required>
      <div class="valid-feedback">
       Looks good!
      </div>
        </div>
        <div class="form-group">
      <label for="price">Price</label>
      <input class="form-control" type="text" name="price" value="" required>
      <div class="valid-feedback">
       Looks good!
      </div>
        </div>
        <div class="form-group">
      <label for="cover">Cover</label>
      <input class="form-control" type="text" name="cover" value="" required>
      <div class="valid-feedback">
       Looks good!
      </div>
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
      // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
'use strict'

// Fetch all the forms we want to apply custom Bootstrap validation styles to
var forms = document.querySelectorAll('.needs-validation')

// Loop over them and prevent submission
Array.prototype.slice.call(forms)
  .forEach(function (form) {
    form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
      </script>
@endsection
