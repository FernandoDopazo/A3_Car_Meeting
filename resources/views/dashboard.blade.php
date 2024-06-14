@extends('layouts.master')

@section('title', 'Autos Encontros')

@section('content')

    <h1 id="dash-h1">Encontros que {{ $user->name }} está participando</h1>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
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
                <tr>
                    <td scropt="row">contador de envento</td>
                    <td><a href="#"></a>titulo do encontro</td>
                    <td>quantidade de participantes</td>
                    <td>
                        <form action="#" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="exit"></ion-icon> Sair do Evento </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <h1>Encontros de {{ $user->name }}</h1>

    <div class="col-md-10 offset-md-1 dashboard-events-container">
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
                @foreach($createdEvents as $event)
                <tr>
                    <td scropt="row">contador de envento</td>
                    <td><a href="#"></a>{{ $event->title }}</td>
                    <td>{{ $event->users->count() }}</td>
                    <td>
                        <a href="#" class="btn btn-info edit-btn"><ion-icon name="pencil"></ion-icon> Editar</a>
                        <form action="#" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
