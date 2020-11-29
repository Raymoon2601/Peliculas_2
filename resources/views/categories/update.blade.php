@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <article class="col-md-10 col-md-offset-1">
            <form action= "{{route('categories/update',['id' => $categories->id])}}" method="POST"  novalidate>
                @csrf
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{$categories->name}}" required>
                </div>
                 <div class="form-group">
                    <label>Status_id</label>
                    <input type="text" name="status_id" class="form-control" value="{{$categories->status_id}}" required>
                </div>
                 <div class="form-group">
                    <button type="submit" class="btn btn-sucess">Enviar</button>
                </div>
            </form>
        </article>
    </div>
</div>  
@endsection 