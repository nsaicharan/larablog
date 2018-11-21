@extends('layouts.app')

@section('content')
    <div class="col-lg-8 mx-auto">
        <h1>{{$post->title}}</h1>

        <p class="mb-4 text-muted">
            <small>Written by {{$post->user->name}} on {{$post->created_at->format('M d, Y')}}</small>
        </p>

        {!! $post->body !!}

        <hr class="my-4">

        <div class="d-flex">
            <form action="/posts/{{$post->id}}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-outline-danger">Delete</button>
            </form>

            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary ml-4 px-4">Edit</a>
        </div>
    </div>
@endsection