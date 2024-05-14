@extends('layouts.master')

@section('title', 'Criar Eventos')

@section('content')

    <div>
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image" class="from-control-file">
            </div>
            
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
            </div>
            
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            
            <div class="form-group">
                <label for="title">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
            </div>
            
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            
            <div class="form-group">
                <label for="title">Adicione :</label>
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Vaga Coberta"> Vaga Coberta
                 </div>
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Música"> Música
                 </div>
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Banheiro"> Banheiro
                </div>
                <div class="form-group">	
                    <input type="checkbox" name="items[]" value="Loja de Conveniência"> Loja de Conveniência
                </div>
            </div>
            
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>

@endsection