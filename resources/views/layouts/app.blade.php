<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @if (View::hasSection('title'))
            @yield('title') - {{ config('app.name') }}
        @else
            {{ config('app.name') }}
        @endif
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('inc.nav')

    <div id="app" class="container mt-5">
        @yield('content')
    </div>

    @yield('scripts')
</body>
</html>