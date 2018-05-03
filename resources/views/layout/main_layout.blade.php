<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>

    <script src="{{ URL::to('js/vue.js') }}"></script>
    <script src="{{ URL::to('js/temp.js') }}"></script>
</body>
</html>