<!doctype html>
<html lang="pt-BR">

<head>
    <title>Sistema de Inspeção Predial</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body class="bg-success">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container border-bottom">
                <a href="#" class="navbar-brand">
                    <img src="{{asset('img/logo.png')}}" alt="" srcset="" width="50">
                    <span class="logo">UNICEPLAC</span>
                </a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-primary">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav-primary">
                    <ul class="navbar-nav ml-auto">
                        <li class="navbar-item active">
                            <p class="mt-3 text-white">Redes Sociais
                                <a href="#" class="btn btn-outline-light"><i class="fab fa-facebook"></i></a>
                                <a href="#" class="btn btn-outline-light"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="btn btn-outline-light"><i class="fab fa-twitter"></i></a>
                            </p>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <section id="home" class="mt-4">
        <div class="container border-bottom mt-4 text-white">
            <div class="row">
                <div class="col-md-6 col-sm-12 d-flex">
                    <div class="align-self-center">
                        <h1 class="display-4">
                            Sistema de Inspeção Predial.
                        </h1>
                        <p>
                            Uma parceria entre o curso de Sistemas de Informação e Engenharia Civil.
                        </p>
                        <div class="form-group row">
                            @if (Route::has('login'))
                            @auth
                            <a href="{{ url('/home') }}" class="btn btn-outline-light btn-lg btn-block">Tela Inicial</a>
                            @else

                            <div class="col-md-8 offset-md-2">
                                <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg btn-block">Entrar <i class="fa fa-user-circle" aria-hidden="true"></i></a>
                            </div>

                            @if (Route::has('register'))
                            <div class="col-md-8 offset-md-2 mt-2">
                                <a href="{{ route('register') }}" class="btn btn-outline-light btn-lg btn-block text-center">Cadastre-se <i class=" fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                            @endif
                            @endauth
                            @endif
                        </div>
                    </div>
                </div>
                <!-- imagens -->
                <div class="col-md-6 col-sm-12 ">
                    <img id="banner1" class="img img-fluid align-self-center" src="img/banner01.png" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="text-center my-4">
                <h1 class="text-white display-4">O que é?</h1>
                <hr>
            </div>
            <div class="row">
                <div class="col-4 text-white text-justify">
                    <div class="text-center">
                        <i class="fa fa-question fa-8x" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-8 text-white text-justify">
                    <p class=" p-4 rounded">
                        A vistoria técnica, também conhecida como autovistoria ou inspeção predial, é exigida legalmente e realizada de tempos em tempos por profissional habilitado. Ela é a análise isolada ou
                        combinada das condições técnicas, de uso e de manutenção da edificação
                    </p>
                </div>
                <hr>
            </div>
            <hr>

            <div class="text-center my-4">
                <h1 class="text-white display-4">A importância de uma Inspeção Predial especializada</h1>
            </div>
            <hr>

            <div class="row">
                <div class="col-8 text-white text-justify">
                    <p class=" p-4 rounded">

                        Na Inspeção Predial, as anomalias e falhas são detectadas e classificadas de acordo com a urgência e o risco. O profissional de engenharia irá orientar e fazer o plano de correção, manutenção e os serviços que devem ser executados.</p>
                </div>
                <div class="col-4 text-white text-justify">
                    <p class=" p-4 text-center">
                        <i class="fa fa-building fa-8x"></i>
                    </p>
                </div>
            </div>
        </div>
    </section>


    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>