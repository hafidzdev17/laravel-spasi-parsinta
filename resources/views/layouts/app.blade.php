<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Laravel' }}</title>
</head>
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<body>
    
    @yield('content')


<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>