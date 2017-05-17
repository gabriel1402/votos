@extends('layouts.master')

@section('content')

<h1>Registrar un candidato</h1>
    <div class="col-md-8">
        <form method="post" action="/candidatos">
            {{csrf_field()}}
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>              

          <div class="form-group">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>

            <div class="form-group">
                @include('layouts.errors')            
            </div>
        </form>
        
</div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection