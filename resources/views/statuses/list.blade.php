@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <article class="col-md-12">
            <form action="{{route('statuses/show')}}" method="post" novalidate class="form-inline">
                @csrf
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Buscar</button>
                    <a href="{{route('statuses.index')}}" class=" btn btn-primary">Todo</a>
                    <a href="{{route('statuses.create')}}">Crear</a>
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
                    @foreach($statuses as $status)
                    <tr>
                        <td>{{$status->name}}</td>
                        <td>{{$status->type_status_id}}</td>
                        <td>
                           <a class="btn btn-primary btn-xs" href="{{route('statuses.edit',['id'=>$status->id])}}">Editar</a>
                           <a class="btn btn-danger btn-xs" href="{{route('statuses/destroy',['id'=>$status->id])}}">Eliminar</a>  
                        </td>
                    </tr>
                    @endforeach
                </tbody>               
            </table>
        </article>
    </div>
</div>
@endsection