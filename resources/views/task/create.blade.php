@extends('layouts.app')
@section('title', 'Nueva tarea')

@section('content')
<div class="card">
    <div class="card-body">
        <h1>Crear Tarea</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label>Título</label>
            <input type="text" name="titulo" class="form-control">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
            <div class="mt-4">
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
        </form>

    </div>
</div>
@endsection