@extends('layouts.app')

@section('content')
    <h2>Editar post</h2>

    <form action="{{ route('posts.update', $post['id']) }}" method="POST" class="mt-3">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Título</label>
            <input type="text" name="title" class="form-control" value="{{ $post['title'] }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Contenido</label>
            <textarea name="content" class="form-control" rows="5" required>{{ $post['content'] }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Volver</a>
    </form>
@endsection