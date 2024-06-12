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
    <div id="events-container" class="col-md-12">
        <div id="cards-container" class="row">
            @foreach($event as $event)
                    
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
                    
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-tilte"> {{ $event->title }} </h5>
                        <p class="card-participants">{{ count($event->users) }} Participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
        @endforeach
   

<div class="hero">
    <p>Descubra eventos incríveis, compartilhe sua paixão e conecte-se com outros entusiastas.</p>
        <a href="/events/allEvents" class="btn-even">Ver Próximos Eventos</a>
</div>

@endsection
