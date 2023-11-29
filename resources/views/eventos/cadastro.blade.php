@extends('layouts.main')

@section('title'. 'Evento')

@section('content')

<<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre um evento</h1>
    <form action="/eventos" method="POST" enctype= "multipart/form-data">
        @csrf
        <div class="form-group mt-3">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image" name="image" class="from-control-file">
        </div>
        <div class="form-group mt-3">
            <label for="titulo">Evento:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento">
        </div>
        <div class="form-group mt-3">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Local do evento">
        </div>
        <div class="form-group mt-3">
            <label for="privado">O evento é privado?</label>
            <select name="privado" id="privado" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="descricao">Descrição:</label>
            <textarea name="descricao" id="descricao" class="form-control" placeholder="Escreva uma descrição para seu evento"></textarea>
        </div>
        <input type="submit" class="btn btn-primary mt-3" value="Cadastrar evento">
    </form>
</div>


@endsection