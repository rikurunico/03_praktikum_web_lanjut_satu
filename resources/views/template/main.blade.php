<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <script type="text/javascript" src="{{ asset('/js/app.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('/css/app.css') }}">
</head>
<body>
    @include('template.navbar')
    <div class="container mt-4">
        @yield('container')
    </div>
</body>
</html>