@extends('layouts.app')

@section('content')
    <h2>Crear nuevo post</h2>

    <form action="{{ route('posts.store') }}" method="POST" class="mt-3 align-items-center">
        @csrf

        <div class="mb-3 form-group">
            <label class="form-label">Título</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3 form-group">
            <label class="form-label">Contenido</label>
            <textarea name="content" class="form-control" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection