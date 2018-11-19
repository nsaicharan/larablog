@extends('layouts.main')

@section('content')
    <div class="col-lg-8 mx-auto">
        <h1>{{$post->title}}</h1>

        <p class="mb-4 text-muted">
            <small>Created on {{$post->created_at}}</small>
        </p>

        {!! $post->body !!}
    </div>
@endsection