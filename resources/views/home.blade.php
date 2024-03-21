<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ecommerce-Shop</title>
</head>

<body class="">
    <div class="row">
        <div class="col-1" id="">
            @section('sidebar')
                @include('components.sidebar')
            @show
        </div>
        <div class="col-11" >
            <div class="container-fluid">
               @include('components.navbar')
                <div class="row">
                    @yield('container_left')
                    @yield('container')
                    @yield('container_right')
                </div> 
            </div>
            @yield('card')
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/home.js') }}"></script>
    @yield('js')
</body>

</html>
