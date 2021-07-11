@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Categorias</h1>
@stop

@section('content')
    <div class="card">
        <div class="car-body">
            <div class="card-header">
                <a href="{{route('admin.categories.create')}}" class="btn btn-secondary">Agregar Categoria</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td width='10px'>
                                <a href="{{route('admin.categories.edit',$category)}}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width='10px'>
                                <form action="{{route('admin.categories.destroy',$category)}}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
