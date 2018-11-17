<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @if (View::hasSection('title'))
            @yield('title') - {{ config('app.name') }}
        @else
            {{ config('app.name') }}
        @endif
    </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('inc.nav')

    <main class="mt-4 text-center">
        @yield('content')
    </main>
</body>
</html>