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
                <a href="" class="text-success">
                    check-list
                    <i class="fa fa-building" aria-hidden="true"></i>
                </a>
            </div>

            <div class="ml-5">
                <div class="text-left">
                    <h6 class="text-dark">
                        Total de inspecões Realizadas: <span class="mr-3">40</span>
                        <a href=""><button class="btn btn-outline-success"> ver dados coletados de sistemas</button></a>
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

            <!-- <div class="col-12 col-sm-12 col-md-12 border border-muted">

                <div class=" p-4 bg-light">
                    <div class="text-center">

                        <span class="mx-4 alert alert-success col-sm-12">
                            <a href="" class="text-success">
                                Inspecionar Edificio?
                                <i class="fa fa-building" aria-hidden="true"></i>
                            </a>
                        </span>



                        <span class="mx-4 alert alert-primary col-sm-12">
                            <a href="" class="text-primary col-sm-12">
                                Editar Registro
                                <i class="fas fa-edit    "></i>
                            </a>
                        </span>


                         <div class="col-4">
                            <button class="btn btn-outline-primary">
                                Editar Registro
                                <i class="fas fa-edit    "></i>
                            </button>
                        </div> -->
            <!-- 
            <form action="" class="d-inline" method="post">
                @CSRF
                @method('delete') -->
            <!-- <button class="btn btn-outline-danger btn-lg" type="submit">Excluir <i class="fas fa-trash"></i></button> -->

            <!-- <span class="mx-4 alert alert-danger"> -->
            <!-- <button type="submit" class="btn text-danger">Excluir Registro <i class="fas fa-trash"></i></button>
                </span>

            </form>
        </div>
    </div>
</div> -->




        </div>

    </div>


    @endsection