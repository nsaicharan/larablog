@extends('layouts.main')

@section('content')
    <h1 class="font-weight-light text-center mb-5">Latest Posts</h1>

    @if(count($posts) > 0)
        <div class="row">
            @foreach($posts as $post)
                <div class="col-lg-8 offset-lg-2 mb-4">
                    <h2>
                        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                    </h2>

                    <p class="text-muted">
                        <small>Created on {{$post->created_at}}</small>
                    </p>

                    {!! $post->body !!}
                </div>
            @endforeach

            <div class="col-lg-8 offset-lg-2">
                {{$posts->links()}}
            </div>
        </div>
        {{-- /.row --}}
    @else
        <p class="h5 text-center text-muted">No posts available!</p>
    @endif
@endsection