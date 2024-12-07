@extends('layouts.app')
@section('title', 'Lista de Tareas')
@section('content')

<div class="card">
    <div class="card-body">
        <h1>Lista de Tareas</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->titulo }}</td>
                    <td>{{ $task->descripcion }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection