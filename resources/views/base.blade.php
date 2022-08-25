<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container">
            <a href="" class="navbar-brand">coach tach</a>
            <ul class="navbar-nav">
                @auth
                <li class="nav-item"><a href="{{route('homepage')}}" class="nav-link ">{{auth()->user()->name}}</a></li>
                    
                @endauth
                @guest

                <li class="nav-item"><a href="{{route('login')}}" class="nav-link">login</a></li>
                <li class="nav-item"><a href="{{route('singin')}}" class="nav-link">singup</a></li>
                @endguest

                @auth

                    <li class="nav-item"><a href="{{route('logout')}}" class="nav-link">logout</a></li>
                @endauth
                <li class="nav-item"><a href="{{route('student.create')}}" class="btn btn-danger btn-sm">Apply for cws</a></li>
            </ul>
        </div>
    </nav>
    @section('data')
        
    @show
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>