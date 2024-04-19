<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>@yield('title')</title>
</head>
<body>


    <header class="header">
        <a href="{{url('/')}}" class="logo">Autos</a>

        <nav class="navbar_top">
            <a href="{{url('/login')}}">Login/Logout</a>
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
                    <li><a href="#"><i class="fas fa-tv"></i>Dashboard</a></li>
                    <li><a href="#"><i class="fas fa-book"></i>Meetings</a></li>
                    <li><a href="#"><i class="fas fa-cogs"></i>Customizations</a></li>
                    <li><a href="#"><i class="fas fa-heart"></i>Comunity</a></li>
                    <li><a href="#"><i class="fas fa-user"></i>About us</a></li>
                </ul>
            </div>
        </label>
    </div>

    <div class="contents">
        @yield('content')
    </div>

    <footer>
        <p> Copyright &copy;2024 Design by <span class="design">Fernando Dopazo & Lucas Bohler</span></p>
    </footer>
</body>
</html>
