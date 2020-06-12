  @extends('layouts.dashboard')

  @section('content')
  <div class="container">

      <div class="jumbotron bg-light">
          <h1 class="display-4 text-muted">Ficha de Inspeção Predial.</h1>
          <p class="lead">Sistema de Gerenciamento de Check-list</p>
          <hr class="my-2">
          <p>Bem Vindo: <span class="text-success font-weight-bolder">{{Auth::user()->email}}</span></p>
          <p class="lead">
              <a class="btn btn-outline-success btn-lg" href="{{route('edificio.create')}}" role="button">Cadastrar Edificio</a>
          </p>
      </div>

  </div>
  @endsection