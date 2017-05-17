@extends('layouts.master')

@section('content')

    <div class="album text-muted">
      <div class="container">

        
        <form method="post" action="/votos">
            {{csrf_field()}}
            <div class="row">
            @foreach($candidatos as $candidato)
              <div class="card">
                <img data-src="" alt="Card image cap">
                  <p class="card-title">{{$candidato->nombre}} </p>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <input type="radio" name="candidato" value="{{$candidato->id}}">
              </div>
            @endforeach
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Votar</button>
            </div>
        </form>
        

      </div>
    </div>

@endsection

@section('footer')
    @include('layouts.footer')
@endsection