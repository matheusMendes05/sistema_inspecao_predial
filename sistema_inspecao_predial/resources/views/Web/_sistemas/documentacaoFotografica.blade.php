@extends('layouts.dashboard')

@section('content')

@section('content')
<div class="container">
    <div class="text-center">
        <h1 class="display-4 text-muted border-bottom d-inline  mr-5">
            Documentacao Fotográfica.
        </h1>
        <p class="text-right">
            <strong class="text-muted">Total:</strong> {{count($documentacao)}}
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


<div class="container">

    @if($documentacao->isEmpty())
    <div class="alert alert-danger">
        Não existe Documentação fotográficas
    </div>
    @endif

    @foreach($documentacao as $documento )


    <div class="row">
        <div class="col-12 my-3">
            <div class="card">
                <div class="card-header">
                    Foto Nº {{$documento->sistema_id}}
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col-4 border my-2 bg-light">
                            <h6 class="align-self-center">NÃO CONFORMIDADE</h6>
                        </div>
                        <div class="col-8 my-2 border">
                            <p>{{$documento->nao_conformidade}}</p>
                        </div>
                        <div class="col-5 border text-center mx-1">
                            <img class="card-img-top img-fluid" src="{{env('APP_URL').$documento->imagem}}" alt="Card image cap" width="400" style="max-width:100%; width: 400px; height: 250px">
                        </div>
                        <div class="col-6 border">
                            <div class="col-12  bg-light text-center">
                                <h6>SISTEMA</h6>
                            </div>
                            <div class="col-12">
                                <p class="text-center">
                                    {{$documento->sistema}}
                                </p>
                            </div>
                            <div class="col-12  bg-light text-center mt-4">
                                <h6>RECOMENDAÇÕES TÉCNICAS</h6>
                            </div>
                            <div class="col-12 ">
                                <p>
                                    {{$documento->recomendacao_tecnica}}
                                </p>
                            </div>
                        </div>
                        <div class="col-6 border-top mt-2 ">
                            <div class="row">
                                <div class="col-4  bg-light mt-4 border">
                                    <h6 class="text-center">Classificação</h6>
                                </div>
                                <div class="col-8 mt-4 ">
                                    <p>
                                        {{$documento->classificacao}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 border-top mt-2">
                            <div class="row">
                                <div class="col-4  bg-light mt-4 border">
                                    <h6 class="text-center">Criticidade</h6>
                                </div>
                                <div class="col-8 mt-4">

                                    @if($documento->criticidade == "Critico")
                                    <span class="aler alert-danger p-1">
                                        {{$documento->criticidade}}
                                    </span>
                                    @endif
                                    @if($documento->criticidade == "Medio")
                                    <span class="aler alert-warning p-1">
                                        {{$documento->criticidade}}
                                    </span>
                                    @endif
                                    @if($documento->criticidade == "Baixo")
                                    <span class="aler alert-primary p-1">
                                        {{$documento->criticidade}}
                                    </span>
                                    @endif
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="card-footer">
                    <div class="text-right">
                        <form action="{{route('documentacao.destroy',['documento_id' =>$documento->id ])}}" method="post">
                            @CSRF
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">Excluir <i class="fa fa-trash" aria-hidden="true"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="text-right my-4">
        <a href="{{route('sistema.index', ['edificio_id' => $edificio_id] )}}" class="text-danger">voltar <i class="fas fa-backspace"></i></a>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Gerar Arquivo PDF</h1>
            <!-- <p class="lead">Jumbo helper text</p> -->
            <hr class="my-2">
            <p>O PDF irá conter um relatório da documentação fotográfica.</p>
            <p class="lead">
                <a class="btn btn-warning btn-lg text-white" href="Jumbo action link" role="button">PDF <i class="fa fa-file-pdf-o" aria-hidden="true"></i></a>
            </p>
        </div>
    </div>
</div>






@endsection