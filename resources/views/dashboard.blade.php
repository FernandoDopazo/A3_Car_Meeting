@extends('layouts.master')

@section('title', 'Autos Encontros')

@section('content')

    <h1 id="dash-h1">Encontros que {{ $user->name }} está participando</h1>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if(count($eventsParticipant) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col"><ion-icon name="caret-down"></ion-icon></th>
                    <th scope="col"><ion-icon name="car-sport"></ion-icon>Encontro</th>
                    <th scope="col"><ion-icon name="body"></ion-icon>Participantes</th>
                    <th scope="col"><ion-icon name="create"></ion-icon>Alterações</th>
                    </tr>
                </thead>
                @foreach($eventsParticipant as $event)
                <tbody>
                    <tr>
                        <td scropt="row">{{ $loop->index + 1}}</td>
                        <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                        <td>{{ count($event->users) }}</td>
                        <td>
                            <form action="/events/leave/{{ $event->id }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="exit"></ion-icon> Sair do Evento </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        @else
            <p>Você ainda não está participando de nenhum evento, <a href="events/allEvents">participe agora!</a></p>
        @endif
    </div>

    <h1 id="dash-h1-2">Encontros de {{ $user->name }}</h1>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
    
        @if(count($events) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col"><ion-icon name="caret-down"></ion-icon></th>
                    <th scope="col"><ion-icon name="car-sport"></ion-icon>Encontro</th>
                    <th scope="col"><ion-icon name="body"></ion-icon>Participantes</th>
                    <th scope="col"><ion-icon name="create"></ion-icon>Alterações</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td scropt="row">{{ $loop->index + 1 }}</td>
                            <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                            <td>{{ count($event->users) }}</td>
                            <td>
                            <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"><ion-icon name="pencil"></ion-icon> Editar</a> 
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Você ainda não criou nenhum evento, <a href="/events/create">crie um agora</a>!</p>
        @endif
    </div>

@endsection
