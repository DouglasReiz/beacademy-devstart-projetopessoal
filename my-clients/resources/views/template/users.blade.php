<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;700;800;900&family=Poppins:wght@300;400&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css">
    

    
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul class="menu">
                    <li class="menu-item"><a href="{{ route('users.index') }}">Usuários</a></li>
                    <li class="menu-item"><a href="{{ route('clients.index') }}">Clientes</a></li>
                </ul>

                <h1>Sua Agenda</h1>

                <ul class="menu-social">
                    @if(Auth::user())
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link class="nav-link text-white" :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Sair') }}
                                </x-responsive-nav-link>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">Registre-se</a>
                        </li>
                    @endif
                </ul>
                
            </nav>
        </div>
    </header>

    @yield('body')

    <footer>
        <div class="container">
            <div class="copy">
                <p>Projeto planejado e produzido por 
                <div class="badge-base LI-profile-badge" data-locale="pt_BR" data-size="medium" data-theme="dark" data-type="VERTICAL" data-vanity="douglasalves-dev-back-end" data-version="v1">
                    <a class="badge-base__link LI-simple-link" href="https://br.linkedin.com/in/douglasalves-dev-back-end?trk=profile-badge" target="_blank">Douglas Alves</a>
                </div>
                
                </p>

                

            </div>
        </div>
    </footer>
</body>
    <script src="sweetalert2/dist/sweetalert2.min.js"></script>
</html>