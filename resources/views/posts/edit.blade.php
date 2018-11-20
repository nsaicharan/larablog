@extends('layouts.main')

@section('content')
    <h1 class="font-weight-light text-center mb-5">Edit Post</h1>

    <div class="col-lg-9 mx-auto mb-5">
        @include('inc.errors')

        <form action="/posts/{{$post->id}}" method="POST">
            @method('PATCH')
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{$post->title}}">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea  rows="8" name="body" id="body" class="form-control">{{$post->body}}</textarea>
            </div>

            <button class="btn btn-primary btn-block btn-lg text-uppercase">Edit</button>
        </form>
    </div>

    {{-- Laravel CKEditor --}}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection