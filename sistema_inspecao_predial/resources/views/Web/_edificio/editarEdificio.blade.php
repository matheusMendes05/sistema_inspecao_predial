@extends('layouts.dashboard')

@section('content')

<div class="container">
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

    <form action="{{route('edificio.update', ['edificio_id'=> $edificio->id])}}" method="post" enctype="multipart/form-data">
        @CSRF
        @method('put')

        <div class="container">
            <div class=" my-4 p-2">
                <div class="row">
                    <div class="col-12  border p-2 text-white bg-success">
                        <div class="text-center">
                            <h4>Cadastro de Edificação</h4>
                        </div>
                    </div>
                    <div class="col-8 border border mt-1">
                        <p class="text-muted">Responsável pela Inspeção:
                            <input type="text" id="" class="form-control" placeholder="Nome Engenheiro Responsável" name="txtNome" value="{{$edificio->responsavel_inspecao}}">
                        </p>
                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">Data:
                            <input type="date" id="" class="form-control" placeholder="Data da Inspeção" name="txtData" value="{{$edificio->data}}">
                        </p>
                    </div>
                    <div class="col-12 border border mt-1">
                        <p class="text-muted">Nome do edifício:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Nome do Edificio" name="txtNomeEdificio" value="{{$edificio->nome_edificio}}">
                            </span>
                        </p>
                    </div>
                    <div class="col-8 border border mt-1">
                        <p class="text-muted">Endereço:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Endereço do Edificio" name="txtEndereco" value="{{$edificio->endereco}}">
                            </span>
                        </p>
                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">Bairro:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Bairro do Edificio" name="txtBairro" value="{{$edificio->bairro}}">
                            </span>
                        </p>
                    </div>
                    <div class="col-8 border border mt-1">
                        <p class="text-muted">Complemento:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Complemento" name="txtComplemento" value="{{$edificio->complemento}}">
                            </span>
                        </p>
                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">CEP:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="CEP" name="txtCEP" value="{{$edificio->cep}}">
                            </span>
                        </p>
                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">CNPJ:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="CNPJ" name="txtCNPJ" value="{{$edificio->cnpj}}">
                            </span>
                        </p>
                    </div>
                    <div class="col-8 border border mt-1">
                        <p class="text-muted">Responsável pela Edificação:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Responsável pela Edificação" name="txtResponsavel" value="{{$edificio->responsavel_edificio }}">
                            </span>
                        </p>
                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">Telefone:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Telefone" name="txtTelefone" value="{{$edificio->responsavel_telefone }}">
                            </span>
                        </p>
                    </div>
                    <div class="col-8 border border mt-1">
                        <p class="text-muted">Email:
                            <span class="text-dark font-weight-bold">
                                <input type="email" id="" class="form-control" placeholder="Email" name="txtEmail" value="{{$edificio->responsavel_email }}">
                            </span>
                        </p>
                    </div>
                    <div class="col-12 border border mt-1">
                        <p class="text-muted">TIPOLOGIA:
                            <span class="text-dark font-weight-bold">
                                <input class="form-control" type="text" name="inlineRadioOptions" id="inlineRadio1" value="{{$edificio->tipologia }}">
                            </span>
                        </p>
                    </div>
                    <div class="col-6 border border mt-1">
                        <p class="text-muted">Nº de pavimentos:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="N° de Pavimentos" name="txtNpavimentos" value="{{$edificio->n_pavimentos}}">
                            </span>
                        </p>
                    </div>
                    <div class="col-6 border border mt-1">
                        <p class="text-muted">Ano de Construção:
                            <span class="text-dark font-weight-bold">
                                <input type="date" id="" class="form-control" placeholder="Ano da Construção" name="txtAnoConstrucao" value="{{$edificio->ano_construcao}}">
                            </span>
                        </p>
                    </div>
                    <div class="col-6 border border mt-1">
                        <p class="text-muted">Construtora:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Construtora" name="txtConstrutora" value="{{$edificio->construtora}}">
                            </span>
                        </p>
                    </div>
                    <div class="col-6 border border mt-1">
                        <p class="text-muted">
                            Administrador:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Administrador" name="txtAdministrador" value="{{$edificio->administrador}}">
                            </span>
                        </p>
                    </div>
                    <div class="col-12  border p-2 text-white bg-success">
                        <div class="text-center">

                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center my-4">
                <button type="submit" class="btn btn-outline-success btn-lg">Editar Edificio.</button>
                <a href="{{route('edificio.index')}}"><span class="btn btn-outline-info btn-lg">Voltar</span></a>

            </div>



    </form>

</div>

@endsection