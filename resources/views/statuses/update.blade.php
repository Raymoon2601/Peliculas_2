@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <article class="col-md-10 col-md-offset-1">
            <form action= "{{route('statuses/update',['id' => $statuses->id])}}" method="POST"  novalidate>
                @csrf
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{$statuses->name}}" required>
                </div>
                 <div class="form-group">
                    <label>Tipo de estatus</label>
                    <input type="text" name="type_status_id" class="form-control" value="{{$statuses->type_status_id}}" required>
                </div>
                 <div class="form-group">
                    <button type="submit" class="btn btn-sucess">Enviar</button>
                </div>
            </form>
        </article>
    </div>
</div>  
@endsection 