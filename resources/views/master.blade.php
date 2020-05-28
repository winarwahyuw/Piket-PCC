<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('style/main.css')}}">

</head>
<body>
    <nav class="navbar navbar-primary ">
        <h1 class="text-center">PIKET UKM PCC</h1>
    </nav>

    @yield('content')

    <footer class="text-center">
        <h5>&copy Departemen Software 2019</h5>
    </footer>

    {{-- ---------------------------------------------------------------------------------------------- --}}
    <script src="{{ asset ('jquery-2.2.1.min.js')}}"></script>
    <script src="{{asset('bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>
