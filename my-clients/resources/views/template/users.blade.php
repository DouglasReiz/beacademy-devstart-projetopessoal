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
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul class="menu">
                    <li class="menu-item"><a href="{{ route('users.index') }}">Usuários</a></li>
                    <li class="menu-item"><a href="{{ route('clients.index') }}">Clientes</a></li>
                    <li class="menu-item"><a href="{{ route('clients.create') }}">Novo Clientes</a></li>
                </ul>
                
            </nav>
        </div>
    </header>

    @yield('body')
</body>
</html>