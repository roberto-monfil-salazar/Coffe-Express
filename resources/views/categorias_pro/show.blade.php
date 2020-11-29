@extends('layouts.admin')
@section('contenido')
<div class="card mt-3">
    <div class="card-header d-inline-flex">
        <h3>Detalle Categoria</h3>
        <a href="{{ route('categorias_pro.index')}}" class="btn btn-primary ml-auto">
        <i class="fa fa-arrow-left">volver</i></a>
    </div>
    <div class="card-body">
        <p><b>ID:</b>  {{ $categorias_pro->ID_Categorias_Pro}}</p>
        <p><b>CAtegoria :</b>  {{ $categorias_pro->categoria}}</p>
        <p><b>Nombre :</b> {{ $categorias_pro->Nombre}} </p>
        <p><b>Condicion :</b> {{ $categorias_pro->condicion}} </p>
         </div>
    <div class="card-footer">
        <a class="btn btn-primary" href="{{route('categorias_pro.edit', $categorias_pro->ID_Categorias_Pro) }}">
            <i class="fa fa-edit"></i>
            Editar
        </a>
    </div>
</div>
@endsection