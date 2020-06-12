@extends('layouts.dashboard')

@section('content')

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

    <div class="text-">
        <h1 class="display-4 text-muted border-bottom d-inline">
            Coleta de Dados.
        </h1>
    </div>

    <div class="text-">
        <p class="text-muted">Cadastro de Sistemas de uma Edificação</p>
    </div>

    <div class="text-">
        <p class="text-muted">Nome do Edifício: <span class="text-success"> {{$edificio->nome_edificio}}</span></p>
    </div>

    <div>
        <div class="container">
            <form action="{{route('sistema.store',['edificio_id' => $edificio->id])}}" method="post" enctype="multipart/form-data" id="form-contend" class="{{route('sistema.store',['edificio_id' => $edificio->id])}}">
                @CSRF
                <div class="border rounded p-4 bg-light ">
                    <div id="componente">
                        <div class="row">
                            <div class="col-6">
                                <label for="componente">Selecione um sistema</label>
                                <div class="input-group">
                                    <select class="custom-select" id="descValue" name="txt_sistema_edificio">
                                        <option selected value="Estruturas">Estruturas</option>
                                        <option value="Fundacao">Fundacao</option>
                                        <option value="Vedacao">Vedação</option>
                                        <option value="Forro">Forro</option>
                                        <option value="piso">Piso</option>
                                        <option value="Fachada">Fachada</option>
                                        <option value="Esquadria">Esquadria</option>
                                        <option value="Impermeabilizacao">Impermeabilização</option>
                                        <option value="Histalacao_hidrossanitaria">INSTALAÇÃO HIDROSSANITÁRI</option>
                                        <option value="Instalacao-gas">INSTALAÇÃO DE GÁS</option>
                                        <option value="Instalacao_eletrica">INSTALAÇÃO ELÉTRICA</option>
                                        <option value="Elevadores">Elevadores</option>
                                        <option value="Climatizacao">Climatização</option>
                                        <option value="Ventilacao_exaustao">VENTILAÇÃO E EXAUSTÃO MECÂNICA</option>
                                        <option value="Motor_eletrico">MOTOR ELÉTRICO</option>
                                        <option value="Bomba_hidraulica">BOMBA HIDRÁULICA</option>
                                        <option value="COBERTURA">COBERTURA</option>
                                        <option value="SAIDA_DE_EMERGENCIA">SAÍDA DE EMERGÊNCIA</option>
                                        <option value="CHUVEIROS_AUTOMATICOS">CHUVEIROS AUTOMÁTICOS</option>
                                        <option value="SPDA">SPDA</option>
                                        <option value="PISCINA">PISCINA</option>
                                        <option value="PLAYGROUND">PLAYGROUND</option>
                                        <option value="QUADRA_ESPORTIVA">QUADRA ESPORTIVA</option>
                                        <option value="BRINQUEDOTECA_E_SALAO_DE_JOGOS">BRINQUEDOTECA E SALÃO DE JOGOS</option>

                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-success" type="button" onclick="teste()">Selecionar</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="componente">Elemento do Sistema</label>
                                    <div id="content">
                                        <input type="text" class="form-control" disabled>
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="col-12">
                            <hr class="bg-success">
                        </div> -->
                        </div>
                    </div>
                    <div id="formulario" class="my-2 p-2 border-top border-bottom border-success rounded bg-litgh">
                        <div class="row ">
                            <div class="col-6">
                                <label for="local" class="form-text text-muted">Local</label>
                                <input type="text" name="txt_local" class="form-control" id="local">
                            </div>
                            <div class="col-6">
                                <label for="foto" class="form-text text-muted">Foto</label>
                                <input type="file" name="txt_foto" class="form-control" id="foto">
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="obs" class="form-text text-muted">Observações</label>
                                    <textarea class="form-control" name="txt_obs" id="obs" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-outline-success btn-lg" id="buttomForm" type="submit">Enviar</button>
                            <a href="{{route('edificio.show', ['edificio_id' => $edificio->id])}}" class="text-danger mx-2">Voltar <i class="fas fa-backspace    "></i></a>

                        </div>

                        <div>
                        </div>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Verificar dados inspecionados
                        </button>


                    </div>
            </form>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Historico de Inspecões</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="height: 100%;">

                    <table class="table table-bordered">
                        <thead class=" bg-success text-white">
                            <tr>
                                <th scope="col">Sistema</th>
                                <th scope="col">Elemento</th>
                                <th scope="col">Local</th>
                                <th scope="col">Observação</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($sistemas as $sistema)
                            <tr>
                                <td>{{$sistema->sistema}}</td>
                                <td>{{$sistema->elemento}}</td>
                                <td>{{$sistema->local}}</td>
                                <td>{{$sistema->obs}}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Sair</button>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="{{ url(mix('Web/js/formulario.js'))}}"></script>





@endsection