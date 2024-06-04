@extends('layouts.master')

@section('title', 'Autos Encontros')

@section('content')
<div>
    <h2>Bem-vindo ao Maior Portal de Encontros de Carros!</h2>
</div>
<br>
<div style="flex-direction: column;">
    <div class="square_photo">
        <div class="carrossel">
            <div class="conteiner" id="img">
                <img src="images/r35.jpg" alt="">
                <img src="images/first_car.jpg" alt="">
                <img src="images/old_car.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<br><br>
<div>
    <h1>Últimos eventos</h1>
</div>
<br><br><br>
<div style="width: 100%;height:100%;display:flex;justify-content:space-between">
    
    <a href="/" style="background-color: black;width:20%;height:200px;margin-left:5%;border-radius:10%;text-decoration:none;color:transparent">
        <h2>teste</h2>
    </a>
   
    <a href="/" style="background-color: black;width:20%;height:200px;margin-left:5%;border-radius:10%;text-decoration:none;color:transparent">
        <h2>teste</h2>
    </a>

    <a href="/" style="background-color: black;width:20%;height:200px;margin-left:5%;border-radius:10%;text-decoration:none;color:transparent">
        <h2>teste</h2>
    </a>

    <a href="/" style="background-color: black;width:20%;height:200px;margin-left:5%;border-radius:10%;text-decoration:none;color:transparent">
        <h2>teste</h2>
    </a>
</div>
<div class="hero">
    <p>Descubra eventos incríveis, compartilhe sua paixão e conecte-se com outros entusiastas.</p>
        <a href="/events/allEvents" class="btn-even">Ver Próximos Eventos</a>
</div>

@endsection
