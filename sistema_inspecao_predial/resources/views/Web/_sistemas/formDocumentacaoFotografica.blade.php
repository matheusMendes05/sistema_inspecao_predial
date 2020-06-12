@extends('layouts.dashboard')

@section('content')

@section('content')
<div class="container">
    <div class="text-center">
        <h1 class="display-4 text-muted border-bottom d-inline  mr-5">
            Documentacao Fotográfica.
        </h1>
    </div>
    <p class="text-right">
        <a href="{{route('sistema.index', ['edificio_id' => $edificio_id] )}}" class="text-danger ml-4">voltar <i class="fas fa-backspace"></i></a>
    </p>

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

<form action="{{route('documentacao.store', ['edificio_id' => $sistema->edificio_id, 'elemento_id' => $sistema->id])}}" method="post">
    @CSRF
    <!-- Modal Inspecao-->
    <div class="container p-4">
        <div class="row border">
            <div class="col-12 bg-success text-white my-2 rounded">
                <h4 class="text-center">
                    Foto Nº {{$sistema->id}}
                </h4>
            </div>
            <div class="col-3 bg-success text-white rounded">
                <label class="form-text font-weight-bold ">Não Conformidade: </label>
            </div>
            <div class="col-9">
                <input type="text" name="txt_nao_conformidade" id="" class="form-control ">
            </div>
            <div class="col-6">
                <div class="border m-2 p-2">
                    <img class="img-fluid" src="{{ env('APP_URL').$sistema->imagem}}" alt="Card image cap" width="400" style="max-width:100%; width: 400px; height: 200px">
                    <input type="hidden" name="txt_imagem" value="{{$sistema->imagem}}">
                </div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-12 bg-success text-white mt-2 rounded">
                        <p class="font-weight-bold text-center">SISTEMA</p>
                    </div>
                    <div class="col-12 text-dark">
                        <div>{{$sistema->sistema}}</div>
                        <input type="hidden" name="txt_sistema" value="{{$sistema->sistema}}">
                    </div>
                    <div class="col-12 bg-success text-white mb-2">
                        <p class="font-weight-bold text-center">RECOMENDAÇÕES TÉCNICAS</p>
                    </div>
                    <div class="col-12 text-dark">
                        <textarea class="form-control col-12" name="txt_recomendacao_tecnicas" id="" rows="4"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-2 bg-success text-white rounded">
                <p class="font-weight-bold ">Classificação</p>
            </div>
            <div class="col-4 text-dark">
                <div class="input-group">
                    <select class="custom-select" id="select" name="txt_classificacao">
                        <option value="Anomalia">Anomalia</option>
                        <option value="Falha">Falha</option>
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" onclick="classificacao()">Selecionar</button>
                    </div>
                </div>
            </div>
            <div class="col-6 text-dark">
                <div id="contend">
                    <input type="text" class="form-control" readonly>
                </div>
            </div>

            <div class="col-4 bg-success text-white mt-4 rounded border-white">
                <p class="font-weight-bold text-center">Criticidade</p>
            </div>
            <div class="col-8 text-dark mt-4">
                <select class="custom-select" id="inputGroupSelect04" name="txt_criticidade">
                    <option selected value="Critico">Critico</option>
                    <option value="Medio">Medio</option>
                    <option value="Baixo">Baixo</option>
                </select>
            </div>
        </div>
    </div>
    <div class="text-center mb-4">
        <button type="submit" class="btn btn-outline-success">Salvar</button>
    </div>
    </div>
</form>






@endsection