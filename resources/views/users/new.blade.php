@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <article class="col-md-10 col-md-offset-1">
            <form action="{{route('user.store')}}" method="post" novalidate>
                @csrf
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Contraseña</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Estado</label>
                    <input type="text" name="status_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Rol</label>
                    <input type="text" name="role_id" class="form-control" required>
                </div>
                 <div class="form-group">
                    <button type="submit" class="btn btn-sucess">Enviar</button>
                </div>
            </form>
        </article>
    </div>
</div>
@endsection