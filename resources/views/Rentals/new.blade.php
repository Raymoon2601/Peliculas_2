@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row ">
        <article class="col-md-10 col-md-offset-1">
            <form action="{{route('rentals.store')}}" method="post" novalidate>
                @csrf
                <div class="form-group">
                    <label>Fecha de inicio</label>
                    <input type="date" name="start_date" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label>Fecha fin</label>
                    <input type="date" name="end_date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Total</label>
                    <input type="number" name="total" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Id usuario</label>
                    <input type="text" name="user_id" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>estado</label>
                    <input type="text" name="status_id" class="form-control" required>
                </div>

                 <div class="form-group">
                    <button type="submit" class="btn btn-sucess">Enviar</button>
                </div>
            </form>
        </article>
    </div>
</div>
@endsection