@extends('layouts.dashboard')

@section('content')

@section('content')
<div class="container">
    <div class="text-">


        <h1 class="display-4 text-muted border-bottom">
            Edificios Cadastrados.
        </h1>


        <div class="row">
            <div class="col-6 ">
                <p>Historico de Edificações cadastradas no Sistema</p>
            </div>
            <div class="col-6 ">
                <div class="text-rigth">
                    <p class="text-right text-muted">Cadastrar um novo Edificio: <a href="{{route('edificio.create')}}"><button class="btn btn-success">Cadastrar</button></a></p>
                </div>
            </div>
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


    <div class="my-4">

        <!-- List all building-->

        @if(!empty($edificios))
        <table class="table table-responsive-md table-bordered table-sm">
            <thead>
                <tr class="bg-success text-white">
                    <!-- <th scope="col">ID</th> -->
                    <th scope="col">Nome do Edificio</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Responsável</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Data de Inspeção</th>
                </tr>
            </thead>
            <tbody>
                @foreach($edificios as $edificio)
                <tr>
                    <td><a href="{{route('edificio.show', ['edificio_id' => $edificio->id])}}" class="text-success font-weight-bold">{{$edificio->nome_edificio}}</a></td>
                    <td><a href="">{{$edificio->cnpj}}</a></td>
                    <td>{{$edificio->responsavel_edificio}}</td>
                    <td>{{$edificio->tipologia}}</td>
                    <td>{{$edificio->data}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @endif

    </div>
</div>



@endsection