@extends('layouts.dashboard')
@section('content')

<div class="container">
    <form action="{{route('edificio.store')}}" method="post" enctype="multipart/form-data">
        @CSRF

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
                            <input type="text" id="" class="form-control" placeholder="Nome Engenheiro Responsável" name="txtNome" value="{{Auth::user()->name}}">
                        </p>
                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">Data:
                            <input type="date" id="" class="form-control" placeholder="Data da Inspeção" name="txtData">
                        </p>

                    </div>
                    <div class="col-12 border border mt-1">
                        <p class="text-muted">Nome do edifício:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Nome do Edificio" name="txtNomeEdificio">
                            </span>
                        </p>
                    </div>
                    <div class="col-8 border border mt-1">
                        <p class="text-muted">Endereço:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Endereço do Edificio" name="txtEndereco">
                            </span>
                        </p>
                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">Bairro:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Bairro do Edificio" name="txtBairro">
                            </span>
                        </p>
                    </div>
                    <div class="col-8 border border mt-1">
                        <p class="text-muted">Complemento:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Complemento" name="txtComplemento">
                            </span>
                        </p>

                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">CEP:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="CEP" name="txtCEP">
                            </span>
                        </p>
                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">CNPJ:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="CNPJ" name="txtCNPJ">
                            </span>
                        </p>
                    </div>
                    <div class="col-8 border border mt-1">
                        <p class="text-muted">Responsável pela Edificação:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Responsável pela Edificação" name="txtResponsavel">
                            </span>
                        </p>

                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">Telefone:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Telefone" name="txtTelefone">
                            </span>
                        </p>
                    </div>
                    <div class="col-8 border border mt-1">
                        <p class="text-muted">Email:
                            <span class="text-dark font-weight-bold">
                                <input type="email" id="" class="form-control" placeholder="Email" name="txtEmail">
                            </span>
                        </p>
                    </div>
                    <div class="col-12 border border mt-1">
                        <p class="text-muted">TIPOLOGIA:
                            <span class="text-dark font-weight-bold">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Residencial">
                                    <label class="form-check-label" for="inlineRadio1">Residencial</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Comercial">
                                    <label class="form-check-label" for="inlineRadio2">Comercial</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Industrial">
                                    <label class="form-check-label" for="inlineRadio2">Industrial</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label for="" class="form-text mr-4">Outros: </label>
                                    <input type="text" id="" class="form-control" name="txtOutro">
                                </div>

                            </span>
                        </p>
                    </div>
                    <div class="col-6 border border mt-1">
                        <p class="text-muted">Nº de pavimentos:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="N° de Pavimentos" name="txtNpavimentos">
                            </span>
                        </p>
                    </div>
                    <div class="col-6 border border mt-1">
                        <p class="text-muted">Ano de Construção:
                            <span class="text-dark font-weight-bold">
                                <input type="date" id="" class="form-control" placeholder="Ano da Construção" name="txtAnoConstrucao">
                            </span>
                        </p>
                    </div>
                    <div class="col-6 border border mt-1">
                        <p class="text-muted">Construtora:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Construtora" name="txtConstrutora">
                            </span>
                        </p>
                    </div>
                    <div class="col-6 border border mt-1">
                        <p class="text-muted">
                            Administrador:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Administrador" name="txtAdministrador">
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
                <button type="submit" class="btn btn-outline-success btn-lg">Cadastrar Edificio.</button>
            </div>


    </form>

</div>

@endsection