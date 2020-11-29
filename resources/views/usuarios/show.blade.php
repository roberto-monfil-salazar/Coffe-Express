@extends('layouts.admin')
@section('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Detalle Usuarios</h3>
        <a href="{{ route('usuarios.index')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <p><b>ID:</b>  {{ $usuarios->id }}</p>
        <p><b>Nombre_Usuario :</b>  {{ $usuarios->name}}</p>
        <p><b>Apellido_Pa_Usuario :</b> {{ $usuarios->Apellido_Pa_Usuario}} </p>
        <p><b>Apellido_Ma_Usuario :</b> {{ $usuarios->Apellido_Ma_Usuario}} </p>
        <p><b>Edad :</b> {{ $usuarios->Edad}} </p>
        <p><b>Sexo :</b> {{ $usuarios->Sexo}} </p>
        <p><b>UserNme :</b> {{ $usuarios->email}} </p>
        <p><b>Psswr :</b> {{ $usuarios->password}} </p>
         </div>
    <div class="card-footer">
        <a class="btn btn-primary" href="{{route('usuarios.edit', $usuarios->id ) }}">
            <i class="fa fa-edit"></i>
            Editar
        </a>
    </div>
</div>
@endsection