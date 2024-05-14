@extends('layouts.master')

@section('title', 'Encontros')

@section('content')

    <div>
        <form action="/events/allEvents" method="GET">
            <input type="text" id="search" name="search" placeholder="Procure por encontros">
        </form>
    </div>

    @if($search)
        <h2>Buscando por: {{ $search }}</h2>
    
    @else
        <h2>Próximos Encontros</h2>
        <p>Veja os próximos encontros</p>
    @endif
    
    @foreach($events as $event)

        <div>
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">
            
            <div>
                <p>{{ date('d/m/Y', strtotime($event->date)) }}</p>
                <h5> {{ $event->title }} </h5>
                <p>Participantes</p>
                <a href="/events/{{ $event->id }}">Saber mais</a>
            </div>
        </div>
    @endforeach

    @if(count($events) == 0 && $search)
        <p>Ainda não foram criados encontros com: {{ $search }}! <a href="/events/allEvents">Ver todos Encontros</a></p>
    @endif

@endsection