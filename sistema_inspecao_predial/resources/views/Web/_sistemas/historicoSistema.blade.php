@extends('layouts.dashboard')

@section('content')

@section('content')
<div class="container">
    <div class="text-">
        <h1 class="display-4 text-muted border-bottom   my-3">
            Historico de Dados Coletados.
        </h1>
        <p class="text-right">
            <a href="{{route('documentacao.index',['edificio_id' =>$edificio_id])}}" class="btn btn-outline-success">Historico de Documentação Fotográfica <i class="fas fa-history    "></i></a>

            <span class="text-right">
                <a href="{{route('edificio.show', ['edificio_id' => $edificio_id] )}}" class="text-danger ml-4">voltar <i class="fas fa-backspace"></i></a>
            </span>
        </p>

    </div>
</div>

@if(isset($message))
<div class="alert alert-success">
    <p class="text-white">{{$message}}</p>
</div>
@endif

@if($errors->all())
@foreach($errors->all() as $error)
<div class="alert alert-success">
    {{$error}}
</div>
@endforeach
@endif

@if($sistemas->isEmpty())
<div class="alert alert-danger">
    Não existe dados coletados.
</div>
@endif

<div class="container my-4">


    <div class="bg-success border  rounded text-white">
        <button type="button" class="btn button-outline-primary btn-lg btn-block text-white" data-toggle="collapse" data-target="#estruturas" aria-expanded="true" aria-controls="estruturas">Estruturas</button>
    </div>

    <div class="collapse navbar-collapse collapse show" id="estruturas">
        <div class="row">
            @foreach($sistemas as $sistema)

            @if($sistema->sistema == 'Estruturas')
            <div class="col-4 mt-2">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top img-fluid" src="{{ env('APP_URL').$sistema->imagem}}" alt="Card image cap" width="400" style="max-width:100%; width: 400px; height: 200px">
                    <div class="card-body">
                        <h5 class="card-title text-truncate">{{$sistema->sistema}}</h5>
                        <p class="card-text text-truncate"><strong>Local: </strong>{{$sistema->local}}</p>
                        <p class="card-text">{{$sistema->obs}}</p>
                        <a href="{{route('documentacao.create', ['edificio_id' => $sistema->edificio_id ,'elemento_id'=> $sistema->id])}}" class="btn btn-primary">Definir documento</a>
                        <form action="{{route('sistema.destroy', ['elemento_id' => $sistema->id])}}" class="d-inline" method="post">
                            @CSRF
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm text-white">excluir</button>
                        </form>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>

</div>

<script src="{{ url(mix('Web/js/estruturas.js'))}}"></script>



@endsection