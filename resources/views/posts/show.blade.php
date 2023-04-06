@extends('layouts.app')
@section('content')

    <div class="container">
        <a class="btn btn-outline-secondary " href="{{ url('/posts') }}">Go Back</a>

        <h3 class="text text-center">{{ $post->title }}</h3>
        <hr>
        <img style="width:100%;" src="storage/cover_images/{{ $post->cover_image }}" alt="">
        <div>
            <p>{!! $post->body !!}</p>
            <hr>
            <small>published on: {{ $post->created_at }} by {{ $post->user->name }}</small>
        </div>
        @if (!Auth::guest())
            @if (Auth::user()->id == $post->user_id)
                <a href="{{ url('/edit/' . $post->id) }}" class="btn btn-outline-primary">Edit</a>
                <a href="{{ url('/delete/' . $post->id) }}" class="btn btn-outline-primary">delete</a>
            @endif
        @endif
    </div>

@endsection
