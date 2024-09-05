@extends('layouts.app')

{{-- bisa pakai @section('title','CRUD Laravel 🚀') soal nya cuman satu line aja  --}}

@section('title', )
    CRUD Laravel 🚀
@endsection

@section('content')
    <h1>
        Hello World
        <a class="btn btn-success" href="{{ url('posts/create') }}">+ Buat Postingan </a>
    </h1>
    @foreach ($post as $posts)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $posts->title }}</h5>
            <p class="card-text">{{ $posts->content }}</p>
            <p class="card-text"><small class="text-body-secondary">Last updated
                    {{ date('d M Y H:i', strtotime($posts->created_at)) }}</small></p>
            <a href="{{ url("posts/$posts->id") }}" class="btn btn-primary">Selengkapnya</a>
            <a href="{{ url("posts/$posts->id/edit") }}" class="btn btn-info">Edit</a>
        </div>
    </div>
    @endforeach
    </body>
@endsection
