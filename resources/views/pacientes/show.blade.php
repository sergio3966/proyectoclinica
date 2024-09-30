@extends('layout.app')
@section('title', 'Pacientes')
@section('content')
    <h1>Pacientes</h1>
    <h5>Listado de pacientes</h5>
    <hr>
    pacientes: <b>{{$pacientes}}</b>
@endsection