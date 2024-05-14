@extends('layouts.master')

@section('title', $events->title)

@section('content')

    <div id="img-meeting" class="img-print-page">
        <img src="/img/events/{{ $events->image }}" alt="{{ $events->title }}">
    </div>

    <div id="info-meeting" class="info-print-page">
        <h1>{{ $events->title }}</h1>
        <p>{{ date('d/m/Y', strtotime($events->date)) }}</p>
        <p>{{ $events->city }}</p>
        <h3>O evento conta com:</h3> 
        <ul>
            @foreach($events->items as $item)
                <li><span>{{ $item }}</span></li>
            @endforeach
        </ul>
    </div>

    <div id="description-meeting" class="decrip-print-page">
        <h3>Sobre o evento:</h3>
        <p>{{ $events->description}}</p>
    </div>

@endsection