@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <section class="jumbotron text-center">
          <div class="container">
            <h1 class="jumbotron-heading">Resultados</h1>

            <canvas id="myChart"></canvas>
          </div>
        </section>
    </div>

    @foreach($candidatos as $candidato)
        <div class="row">
            <p>{{$candidato->nombre}} - Votos: {{count($candidato->votos)}}</p>            
        </div>
    @endforeach

</div>
@endsection

@section('footer')
    @include('layouts.footer')
    <script>
        var candidatos = [];
        @foreach($candidatos as $candidato)
        candidatos.push({'candidato':"{{$candidato->nombre}}",
                          'votos':{{count($candidato->votos)}},
                        'porcentaje':{{count($candidato->votos)}}*100/{{count($votos)}}
        });
        @endforeach
        create(candidatos);
    </script>
@endsection