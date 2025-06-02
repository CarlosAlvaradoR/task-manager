@extends('layouts.app')

@section('content')
    <div class = "container">
        <h1> Crear tarea </h1>
        <form action = "{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class = "form-group">
                <label for="title"> Título </label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class = "form-group">
                <label for="description"> Descripción </label>
                <textarea name="description" id="description" class="form-control" required> </textarea>
            </div>
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection
