@extends('layouts.master')

@section('title', 'Encontros')

@section('content')

    <div id="search-container" class="h-50 d-inline-block">
        <h1>Busque por Cidade</h1>
        <form action="/events/allEvents" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Busque aqui">
        </form>
    </div>
    
    <div id="events-container" class="col-md-12">
    @if($search)
        <h2>Buscando por: {{ $search }}</h2>
    @else
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
    @endif
    
        
    <div id="cards-container" class="row">
    @foreach($events as $event)
            
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

    @if(count($events) == 0 && $search)
        <p>Ainda não foram criados encontros em: {{ $search }}! <a href="/events/allEvents">Ver todos Encontros</a></p>
    @endif

@endsection