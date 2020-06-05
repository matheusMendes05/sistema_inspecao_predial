@extends('layouts.dashboard')

@section('content')



<div class="container border p-4">
    <div class="row">

        <div class="col-12 text-center">

            <!-- message Success -->
            @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif

            <h1 class="display-4 text-muted">Editar Perfil.</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-8 offset-md-2">
            <!-- <div class="card">
                <div class="card-header">{{ __('Register') }}</div> -->

            <!-- <div class="card-body"> -->
            <!-- <form class="form-row" method="POST" action="{{ route('register') }}"> -->
            <form class="form-row" method="POST" action="{{ route('user.update', ['id' => $user->id]) }}">
                @CSRF
                @method('PUT')

                <div class="col-md-12">
                    <label for="name" class="form-text text-muted">{{ __('Nome de Usuário') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name}}" required autocomplete="name" autofocus placeholder="Digite seu Nome Completo">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="col-md-6">
                    <label for="email" class="form-text text-muted">{{ __('E-Mail') }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" placeholder="Digite seu E-mail">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="profissional_tittle" class="form-text text-muted">{{ __('Tittulo Profissional') }}</label>
                    <input id="profissional_tittle" type="text" class="form-control @error('profissional_tittle') is-invalid @enderror" name="profissional_tittle" value="{{ $user->profissional_tittle }}" required autocomplete="profissional_tittle" autofocus disabled>
                    <!-- <select class="custom-select" id="inputGroupSelect01" name="profissional_tittle" disabled value='{{$user->name}}'>
                        <option selected>Selecionar...</option>
                        <option value="ARQUITETO">ARQUITETO</option>
                        <option value="ENGENHEIRO CIVIL">ENGENHEIRO CIVIL</option>
                        <option value="OUTROS">OUTROS</option>
                    </select> -->

                    @error('profissional_tittle')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="col-md-6">
                    <label for="national_registry" class="form-text text-muted">{{ __('REGISTRO NACIONAL') }}</label>

                    <input id="national_registry" type="text" class="form-control @error('national_registry') is-invalid @enderror" name="national_registry" value="{{ $user->national_registry }}" required autocomplete="national_registry" placeholder="Registro Nacional" disabled>

                    @error('crea')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label for="card_n" class="form-text text-muted">{{ __('CREA') }}</label>

                    <input id="card_n" type="text" class="form-control @error('card_n') is-invalid @enderror" name="card_n" value="{{ $user->card_n }}" required autocomplete="card_n" placeholder="Conselho Federal de Engenharia e Agronomia" disabled>

                    @error('crea')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label for="crea" class="form-text text-muted">{{ __('SITUAÇÃO') }}</label>

                    <input id="crea" type="text" class="form-control @error('situation') is-invalid @enderror" name="situation" value="{{ $user->situation }}" required autocomplete="situation" placeholder="SITUAÇÃO" disabled>

                    @error('situation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-text text-muted">{{ __('Senha') }}</label>

                    <input id="password" type="password" class="form-control" name="password" placeholder="Senha com mínimo de 8 caracteres">

                </div>

                <div class="col-md-6">
                    <label for="password-confirm" class="form-text text-muted">{{ __('Confirmar Senha') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirme sua Senha">
                </div>


                <div class="m-auto py-4">
                    <a href="{{route('login')}}" class="text-success mr-3">Voltar</a>
                    <button class="btn btn-outline-success btn-lg" type="submit">Salvar</button>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
</div>

@endsection