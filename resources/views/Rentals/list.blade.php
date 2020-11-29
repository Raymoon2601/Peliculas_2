@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <article class="col-md-12">
            <form action="{{route('rentals/show')}}" method="post" novalidate class="form-inline">
                @csrf
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Buscar</button>
                    <a href="{{route('rentals.index')}}" class=" btn btn-primary">Todo</a>
                    <a href="{{route('rentals.create')}}">Crear</a>
                </div>
            </form>
        </article>
        
        <article>
            <table class="table table-condensed table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Fecha inicio</th>
                        <th>Fecha fin</th>
                        <th>Total</th>
                        <th>Usuario</th>
                        <th>Estado</th>
                        <th>Acción</th>
                    </tr>
                </thead> 
                <tbody>
                    @foreach($rentals as $rental)
                    <tr>
                        <td>{{$rental->start_date}}</td>
                        <td>{{$rental->end_date}}</td>
                        <td>{{$rental->total}}</td>
                        <td>{{$rental->user_id}}</td>
                        <td>{{$rental->status_id}}</td>
                        <td>
                           <a class="btn btn-primary btn-xs" href="{{route('rentals.edit',['id'=>$rental->id])}}">Editar</a>
                           <a class="btn btn-danger btn-xs" href="{{route('rentals/destroy',['id'=>$rental->id])}}">Eliminar</a>  
                        </td>
                    </tr>
                    @endforeach
                </tbody>               
            </table>
        </article>
    </div>
</div>
@endsection