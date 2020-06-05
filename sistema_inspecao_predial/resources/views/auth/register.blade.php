@extends('layouts.app')

@section('content')
<div class="container border p-4">
    <div class="row">
        <div class="col-12 text-center">
            <i class="fa fa-user-circle fa-4x my-2 text-white" aria-hidden="true"></i>

            <h1 class="display-4 text-white">Cadastro de Usuário.</h1>
            <p class="text-white">O Sistema só poderá ser ultilizado por profissionais que estejam regularizado no CREA</p>

        </div>


    </div>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-8 offset-md-2">

            <div class="justify-content-md-center" id="check-user">
                <div class="col-6 offset-4">
                    <div id="content">
                        <p class="text-white">Verificar situação CREA: <input type="text" name="crea" id="card_n" class="form-control "></p>
                        <button class="btn btn-outline-light" id="buttom" onclick="checkEngineer()">consultar</button>
                    </div>
                </div>
            </div>

            <form class="form-row" method="POST" action="{{ route('register') }}" id="form-register">
                @CSRF

                <div class="col-md-12">
                    <label for="name" class="form-text text-white">{{ __('Nome de Usuário') }}</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Digite seu Nome Completo" readonly="readonly">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>


                <div class="col-md-6">
                    <label for="email" class="form-text text-white">{{ __('E-Mail') }}</label>

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Digite seu E-mail" readonly="readonly">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="profissional_tittle" class="form-text text-white">{{ __('Tittulo Profissional') }}</label>
                    <input id="profissional_tittle" type="text" class="form-control @error('profissional_tittle') is-invalid @enderror" name="profissional_tittle" value="{{ old('profissional_tittle') }}" required autocomplete="profissional_tittle" autofocus placeholder="EX: ENGENHEIRO CIVIL" readonly="readonly">
                    <!-- <select class="custom-select" id="inputGroupSelect01" name="profissional_tittle" >
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
                    <label for="national_registry" class="form-text text-white">{{ __('REGISTRO NACIONAL') }}</label>

                    <input id="national_registry" type="text" class="form-control @error('national_registry') is-invalid @enderror" name="national_registry" value="{{ old('national_registry') }}" required autocomplete="national_registry" placeholder="Registro Nacional" readonly="readonly">

                    @error('crea')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label for="card_n" class="form-text text-white">{{ __('CREA') }}</label>

                    <input id="crea" type="text" class="form-control @error('card_n') is-invalid @enderror" name="card_n" value="{{ old('card_n') }}" required autocomplete="card_n" placeholder="Conselho Federal de Engenharia e Agronomia" readonly="readonly">

                    @error('crea')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-3">
                    <label for="crea" class="form-text text-white">{{ __('SITUAÇÃO') }}</label>

                    <input id="situation" type="text" class="form-control @error('situation') is-invalid @enderror" name="situation" value="{{ old('situation') }}" required autocomplete="situation" placeholder="SITUAÇÃO" readonly="readonly">

                    @error('situation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-text text-white">{{ __('Senha') }}</label>

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha com mínimo de 8 caracteres">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md-6">
                    <label for="password-confirm" class="form-text text-white">{{ __('Confirmar Senha') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirme sua Senha">
                </div>


                <div class="m-auto pt-4">
                    <a href="{{route('login')}}" class="text-light mr-3">Voltar</a>
                    <button class="btn btn-outline-light btn-lg" type="submit">Salvar</button>
                </div>

            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection