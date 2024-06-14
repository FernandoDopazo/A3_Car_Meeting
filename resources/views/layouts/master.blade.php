<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="styles.css">
    <script src="{{ asset('resources/js/carrossel.js') }}" defer></script>
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">

    <title>@yield('title')</title>

    <!-- CSS -->
    <link rel="stylesheet" href="/css/styles.css">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <header class="header">
        <a href="{{url('/')}}" class="logo">Autos Encontros</a>

        <nav class="navbar_top">
            @auth
            <a href="/events/create">Publicar</a>
            <a href="/dashboard">Meu perfil</a>
            <form method="POST" action="/logout">
                @csrf
                <a href="/logout" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
            </form>
            @endauth
            @guest
            <a href="/login">Login</a>
            <a href="/register">Cadastre-se</a>
            @endguest
        </nav>
    </header>
    <div class="Dashboard">
        <label>
            <input class="ipt_toggle" type="checkbox">
            <div class="toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <div class="slide">
                <h1 class="menu_dash"></h1>
                <ul>
                    <li><a href="/events/allEvents"><i class="fas fa-book"></i>Meetings</a></li>
                    <li><a href="#"><i class="fas fa-cogs"></i>Marketplace</a></li>
                    <li><a href="#"><i class="fas fa-heart"></i>Customizations</a></li>
                    <li><a href="#"><i class="fas fa-user"></i>About us</a></li>
                </ul>
            </div>
        </label>
    </div>

    <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg">{{ session('msg')}}</p>
                @endif
                @yield('content')
            </div>
        </div>

    <footer>
        <p> Copyright &copy;2024 Design by <span class="design">Fernando Dopazo & Lucas Bohrer</span></p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</body>
</html>
