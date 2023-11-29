@extends('layouts.main')

@section('title'. 'Evento')

@section('content')
    @if($id != null)
        <p>Exibindo evento id: {{$id}}</p>
    @endif

@endsection