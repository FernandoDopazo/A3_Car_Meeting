<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <title>@yield('title')</title>
</head>
<body>


    <header class="header">
        <a href="{{url('/')}}" class="logo">Logo</a>

        <nav class="navbar_top">
            <a href="/">Home</a>
            <a href="#">Contact</a>
            @auth
            <a href="/events/create">Anunciar</a>
            <a href="/dashboard">Profile</a>
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
                <h1 class="menu_dash">MENU</h1>
                <ul>
                    <li><a href="#"><i class="fas fa-book"></i>Meetings</a></li>
                    <li><a href="#"><i class="fas fa-cogs"></i>Marketplace</a></li>
                    <li><a href="#"><i class="fas fa-heart"></i>Customizations</a></li>
                    <li><a href="#"><i class="fas fa-user"></i>About us</a></li>
                </ul>
            </div>
        </label>
    </div>

    <div class="contents">
        @yield('content')
    </div>

    <footer>
        <p> Copyright &copy;2024 Design by <span class="design">Fernando Dopazo & Lucas Bohrer</span></p>
    </footer>
</body>
</html>
