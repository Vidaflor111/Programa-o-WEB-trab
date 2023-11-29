@extends('layouts.main')

@section('title'. 'Evento')

@section('content')
    @if($busca != '')
        <p>Buscando por: {{$busca}}</p>
    @endif
@endsection