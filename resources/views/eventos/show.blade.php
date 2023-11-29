@extends('layouts.main')

@section('title'. '$event->title')

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/eventos/{{$event->image}}" class="img-fluid" alt="/{{$event->titulo}}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{$event->titulo}}</h1>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{$event->cidade}}</p>
            <p class="event-owner"><ion-icon name="star-outline"></ion-icon> {{$eventOwner['name']}}</p>
            <a href="#" class="btn btn-primary" id="event-submit">Confirmar Presença</a>
        </div>
        <div id="description-container">
            <h2>Sobre o Evento</h2>
            <p class="event-description">{{$event->descricao}}</p>
        </div>

    </div>
</div>

@endsection