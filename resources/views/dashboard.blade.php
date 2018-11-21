@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if(session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="/posts/create" class="btn btn-primary">Create New Post</a>

                        <h3 class="mt-4 mb-3 font-weight-light text-center">Your Posts</h3>

                        @if(count($posts) > 0)
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->title}}</td>
                                            <td class="text-center">
                                                <a href="/posts/{{$post->id}}/edit"
                                                   class="btn btn-primary btn-sm">Edit</a>
                                            </td>
                                            <td class="text-center">
                                                <form action="/posts/{{$post->id}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <input type="hidden" name="fromDashboard">
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <p class="text-center">You don't have any posts.</p>
                        @endif
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
@endsection
