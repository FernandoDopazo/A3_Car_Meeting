@extends('layouts.master')

@section('title', 'Autos Encontros')

@section('content')

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
<section id="home">
    <div class="hero">
        <h2>Bem-vindo ao Maior Portal de Encontros de Carros!</h2>
        <p>Descubra eventos incríveis, compartilhe sua paixão e conecte-se com outros entusiastas.</p>
        <a href="/events/allEvents" class="btn-even">Ver Próximos Eventos</a>
    </div>
</section>

@endsection
