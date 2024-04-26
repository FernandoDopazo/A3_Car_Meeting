@extends('layouts.master')

@section('title', 'Autos Encontros')

@section('content')

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

@endsection
