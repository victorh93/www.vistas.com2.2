
@extends('layouts/template');
@section('title','Sistema Visitas | Registrar Personas')

@section('contenido')
        <div class="container">
                <h2>{{$msg}}</h2>

                <a href="{{url('personas')}}" class="btn btn-secondary">Regresar</a>
        </div>

@endsection