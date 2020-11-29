@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <article class="col-md-10 col-md-offset-1">
            <form action= "{{route('movie/update',['id' => $movie->id])}}" method="POST"  novalidate>
                @csrf
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" value="{{$movie->name}}" required>
                </div>
                 <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" name="description" class="form-control" value="{{$movie->description}}" required>
                </div>
                 <div class="form-group">
                    <button type="submit" class="btn btn-sucess">Enviar</button>
                </div>
            </form>
        </article>
    </div>
</div>  
@endsection 