@extends('layouts.dashboard')

@section('content')

@section('content')
<div class="container">
    <div class="text-">
        <h1 class="display-4 text-muted border-bottom">
            Insformações da Edificação.
        </h1>
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
    <div class=" my-4 p-2">



        <div class="d-flex justify-content-start ">

            <div class="mr-2">
                <form action="{{route('edificio.destroy', ['edificio_id' => $edificio->id])}}" class="d-inline" method="post">
                    @CSRF
                    @method('delete')

                    <button type="submit" class="btn text-danger">Excluir Registro <i class="fas fa-trash"></i></button>

                </form>
            </div>

            <div class="mt-2 mr-2">
                <a href="{{route('edificio.edit', ['edificio_id' => $edificio->id])}}" class="text-primary col-sm-12">
                    Editar Registro
                    <i class="fas fa-edit    "></i>
                </a>
            </div>

            <div class="mt-2 mr-2">
                <a href="{{route('sistema.create', ['edificio_id'=> $edificio->id])}}" class="text-success">
                    check-list
                    <i class="fa fa-building" aria-hidden="true"></i>
                </a>
            </div>


            <div class="ml-5">
                <div class="text-left">
                    <h6 class="text-dark">
                        Total de inspecões Realizadas: <span class="mr-3">{{$contador}}</span>
                        <a href="{{route('sistema.index',[$edificio->id])}}"><button class="btn btn-outline-success"> ver dados coletados de sistemas</button></a>
                    </h6>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-12  border p-2 text-white bg-success">
                <div class="text-center">
                    <h4>Dados de Edificação</h4>
                </div>
            </div>

            <div class="col-8 border border mt-1">
                <p class="text-muted">Responsável pela Inspeção:
                    <span class="text-dark font-weight-bold">{{$edificio->responsavel_inspecao}}</span>
                </p>
            </div>
            <div class="col-4 border border mt-1">
                <p class="text-muted">Data:
                    <span class="text-dark font-weight-bold">{{$edificio->data}}</span>
                </p>

            </div>
            <div class="col-12 border border mt-1">
                <p class="text-muted">Nome do edifício:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->nome_edificio}}
                    </span>
                </p>

            </div>
            <div class="col-8 border border mt-1">
                <p class="text-muted">Endereço:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->endereco}}
                    </span>
                </p>
            </div>
            <div class="col-4 border border mt-1">
                <p class="text-muted">Bairro:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->bairro}}
                    </span>
                </p>
            </div>
            <div class="col-8 border border mt-1">
                <p class="text-muted">Complemento:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->complemento}}
                    </span>
                </p>

            </div>
            <div class="col-4 border border mt-1">
                <p class="text-muted">CEP:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->cep}}
                    </span>
                </p>
            </div>
            <div class="col-4 border border mt-1">
                <p class="text-muted">CNPJ:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->cnpj}}
                    </span>
                </p>
            </div>
            <div class="col-8 border border mt-1">
                <p class="text-muted">Responsável pela Edificação:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->responsavel_edificio}}

                    </span>
                </p>

            </div>
            <div class="col-4 border border mt-1">
                <p class="text-muted">Telefone:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->responsavel_telefone}}

                    </span>
                </p>
            </div>
            <div class="col-8 border border mt-1">
                <p class="text-muted">Email:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->responsavel_email}}

                    </span>
                </p>
            </div>
            <div class="col-12 border border mt-1">
                <p class="text-muted">TIPOLOGIA:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->tipologia}}
                    </span>
                </p>
            </div>
            <div class="col-6 border border mt-1">
                <p class="text-muted">Nº de pavimentos:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->n_pavimentos}}
                    </span>
                </p>
            </div>
            <div class="col-6 border border mt-1">
                <p class="text-muted">Ano de Construção:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->ano_construcao}}
                    </span>
                </p>
            </div>
            <div class="col-6 border border mt-1">
                <p class="text-muted">Construtora:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->construtora}}
                    </span>
                </p>
            </div>
            <div class="col-6 border border mt-1">
                <p class="text-muted">
                    Administrador:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->administrador}}
                    </span>
                </p>
            </div>
            <div class="col-12 border border mt-1">
                <p class="text-muted">
                    Responsável Pelo Acompanhamento da Obra:
                    <span class="text-dark font-weight-bold">
                        {{$edificio->responsavel_acompanhamento_obra}}
                    </span>
                </p>
            </div>

            <div class="col-12  border p-2 text-white bg-success">
                <div class="text-center">

                </div>
            </div>
            <div class="mt-2 mr-2">
                <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                    Localização Georeferêncial
                    <i class="fa fa-map " aria-hidden="true"></i>
                </button>
            </div>
        </div>
    </div>


    <!-- Modal Posicionamento Georeferencial -->
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <p class="modal-title text-center">Nome do Edificio: <span class="text-success">{{$edificio->nome_edificio}}</span></p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <div class="collapse navbar-collapse mb-4 show" id="form-localizacao">
                        <div class="">
                            <div class="col-12 col-sm-8 col-md-8 border border-white rounded">
                                <p>
                                </p>
                            </div>
                            <div class=" my-1" id="screanMap">
                                <!-- Map: <input type="text" id="searchmap"> -->
                                <div id="map-canvas" style="width: 100%; height: 400px;"></div>
                                <div id="verificar-latitude" hidden>{{$mapa->latitude}}</div>
                                <div id="verificar-longitude" hidden>{{$mapa->longitude}}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal footer -->
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div> -->

            </div>
        </div>
    </div>


    @endsection