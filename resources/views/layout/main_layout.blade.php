<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{URL::to('css/app.css')}}">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ URL::to('js/app.js') }}"></script>
    <script src="{{ URL::to('js/custom.js') }}"></script>
</body>
</html>