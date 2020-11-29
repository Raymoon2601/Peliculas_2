@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <article class="col-md-12">
            <form action="{{route('roles/show')}}" method="post" novalidate class="form-inline">
                @csrf
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Buscar</button>
                    <a href="{{route('roles.index')}}" class=" btn btn-primary">Todo</a>
                    <a href="{{route('roles.create')}}">Crear</a>
                </div>
            </form>
        </article>
        
        <article>
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Status</th>
                        <th>Acción</th>
                    </tr>
                </thead> 
                <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <td>{{$role->name}}</td>
                        <td>{{$role->status_id}}</td>
                        <td>
                           <a class="btn btn-primary btn-xs" href="{{route('roles.edit',['id'=>$role->id])}}">Editar</a>
                           <a class="btn btn-danger btn-xs" href="{{route('roles/destroy',['id'=>$role->id])}}">Eliminar</a>  
                        </td>
                    </tr>
                    @endforeach
                </tbody>               
            </table>
        </article>
    </div>
</div>
@endsection