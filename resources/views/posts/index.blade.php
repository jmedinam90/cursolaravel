@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Posts</h2>
        <a href="{{ route('posts.create') }}" class="btn btn-primary">+ Nuevo post</a>
    </div>

    @forelse ($posts as $index => $post)
        <div class="card mb-4 
            @if ($index % 3 === 0) border-primary 
            @elseif ($index % 3 === 1) border-success 
            @else border-warning @endif">
            <div class="card-body">
                <h5 class="card-title">{{ $post['title'] }}</h5>
                <p class="card-text">{{ $post['content'] }}</p>

                <a href="{{ route('posts.show', $post['id']) }}" class="btn btn-sm btn-outline-info">Ver / Editar</a>

                <form action="{{ route('posts.destroy', $post['id']) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                </form>
            </div>
        </div>
    @empty
        <p class="text-muted">No hay posts aún.</p>
    @endforelse
@endsection