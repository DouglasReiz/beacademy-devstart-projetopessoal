<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;800;900&family=Poppins:wght@300;400&display=swap" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">


    

    
</head>
<body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid ">
                <ul class="navbar-nav">
                @if(Auth::user())
                    @if(Auth::user()->is_admin)
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">Usuários</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('clients.index') }}" class="nav-link">Clientes</a>
                        </li>
                    @else

                        <a href="{{ route('clients.showEach', Auth::user()->id) }}" class="nav-link">Meus Clientes</a>

                    @endif
                @endif

                </ul>

                <h1 class="text-light"><a href="{{ route('home.index') }}" class="nav-link text-white">Sua Agenda</a></h1>

                <ul class="navbar-nav">
                    @if(Auth::user())
                        <li class="nav-item">
                            <a class="nav-link active" href="#">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link class="nav-link" :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Sair') }}
                                </x-responsive-nav-link>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registre-se</a>
                        </li>
                    @endif
                </ul>
            </nav>
    </header>

    <main>
        <div class="container">
            @yield('body')
        </div>

    </main>

    <footer class="">
        <div class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
            <div class="container-fluid ">
                <p class="text-white">Projeto planejado e produzido por 
                    <a class="navbar-brand badge-base__link LI-simple-link" href="https://br.linkedin.com/in/douglasalves-dev-back-end?trk=profile-badge" target="_blank">Douglas Alves</a>
                </p>
                <div class="badge-base LI-profile-badge" data-locale="pt_BR" data-size="medium" data-theme="dark" data-type="VERTICAL" data-vanity="douglasalves-dev-back-end" data-version="v1"></div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>