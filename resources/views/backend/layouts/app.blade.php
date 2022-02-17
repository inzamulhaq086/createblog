<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
</head>

<body>
  
    @include('backend.layouts.header')
    @yield('content')
    @include('backend.layouts.footer')
    <script defer src="{{asset('js/custom.js')}}"></script>
</body>

</html>
