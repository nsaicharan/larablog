@extends('layouts.app')

@section('content')
    <h1 class="font-weight-light text-center mb-5">Create Post</h1>

    <div class="col-lg-9 mx-auto mb-5">
        @include('inc.errors')

        <form action="/posts" method="POST">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" value="{{old('title')}}">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea  rows="8" name="body" id="body" class="form-control {{$errors->has('body') ? 'is-invalid' : ''}}">{{old('body')}}</textarea>
            </div>

            <button class="btn btn-primary btn-block btn-lg text-uppercase">Create</button>
        </form>
    </div>

    {{-- Laravel CKEditor --}}
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection