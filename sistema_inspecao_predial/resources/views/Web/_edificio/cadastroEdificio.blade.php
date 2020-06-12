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
                            <input type="text" id="" class="form-control" placeholder="Nome Engenheiro Responsável" name="txtNome" value="{{Auth::user()->name}}" readonly>
                        </p>
                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">Data:
                            <input type="text" class="form-control" placeholder="Data da Inspeção" name="txtData" id="data_inspecao" readonly>
                        </p>
                    </div>
                    <div class="col-12 border border mt-1">
                        <p class="text-muted">Nome do edifício:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="Nome do Edificio" name="txtNomeEdificio" required>
                            </span>
                        </p>
                    </div>
                    <div class="col-8 border border mt-1">
                        <p class="text-muted">Endereço:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="endereco" class="form-control" placeholder="Endereço do Edificio" name="txtEndereco" required readonly>
                            </span>
                        </p>
                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">Bairro:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="bairro" class="form-control" placeholder="Bairro do Edificio" name="txtBairro" required readonly>
                            </span>
                        </p>
                    </div>
                    <div class="col-8 border border mt-1">
                        <p class="text-muted">Complemento:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="complemento" class="form-control" placeholder="Complemento" name="txtComplemento">
                            </span>
                        </p>

                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">CEP:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="cep" class="form-control" placeholder="CEP" name="txtCEP" required onblur="requisitar()">
                            </span>
                            <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" class="ml-1" target="_blank">Não sei meu CEP</a>

                        </p>
                    </div>
                    <div class="col-4 border border mt-1">
                        <p class="text-muted">CNPJ:
                            <span class="text-dark font-weight-bold">
                                <input type="text" id="" class="form-control" placeholder="CNPJ" name="txtCNPJ" required>
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
                                <input type="tel" id="" class="form-control" placeholder="(61) 9 9999-9999" name=" txtTelefone">
                            </span>
                        </p>
                    </div>
                    <div class="col-8 border border mt-1">
                        <p class="text-muted">Email:
                            <span class="text-dark font-weight-bold">
                                <input type="email" id="" class="form-control" placeholder="joao@teste.com" name="txtEmail">
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
                                <input type="text" id="" class="form-control" placeholder="N° de Pavimentos" name="txtNpavimentos" required>
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

            <input type="hidden" name="localizacao" id="" value="localizacao">
            <div class="collapse navbar-collapse collapse show" id="form-localizacao">
                <div class="text-center border bg-success mt-1">
                    <h1 class="text-white">Localização - Edificação</h1>
                </div>
                <div class="">
                    <!-- <div class="form-group my-3">
                        <h6>Digite o Endereço da Inspeção - OAE</h6><input type="text" class="form-control input-sm col-12  " placeholder="Endereço" name="tittle" id="tittle">
                    </div> -->
                    <div class=" my-2" id="screanMap">
                        <div class="text-center">
                            <p class="text-muted">Para ter mais Precisão em achar o local de inspeção, arraste a bolinha vermelha do mapa ate o local desejado.</p>
                        </div>
                        <!-- Map: <input type="text" id="searchmap"> -->
                        <div id="map" style="width: 100%; height: 200px;"></div>
                    </div>
                    <div class="row col-12 my-3 " hidden>
                        <div class="col-6">
                            <input type="text" name="latitude" id="latitude" class="form-control" placeholder="Latitude">
                        </div>
                        <div class="col-6">
                            <input type="text" name="longitude" id="longitude" class="form-control" placeholder="Longitude">
                        </div>
                    </div>
                    <div class="text-rigth my-5">
                        <p class="text-primary">OBS: Se o Google maps não aparecer, atualize a pagina e tente novamente.</p>
                    </div>
                </div>
            </div>


            <div class="text-center my-4">
                <button type="submit" class="btn btn-outline-success btn-lg">Cadastrar Edificio.</button>
            </div>


    </form>

</div>






<script src="{{ url(mix('Web/js/webservice.js'))}}"></script>


@endsection