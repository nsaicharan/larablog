@if ($errors->any())
    <div class="alert alert-danger mb-4">
        <ul class="px-3 mb-0">
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif