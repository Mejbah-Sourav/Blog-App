<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title></title>
</head>
<body>

    <nav>
        <label>BlogWeb</label>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">About Us</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>
            @if (Route::has('login'))

            @auth
            <li>
                <a href="{{url('/dashboard')}}" class="btn btn-success">{{Auth::user()->name}}</a>
            </li>
            @else
            <li>
                <a href="{{route('register')}}" class="btn btn-success">Register</a>
            </li>
            <li>
                <a href="{{route('login')}}" class="btn btn-primary">Login</a>
            </li>
            @endauth
            @endif
        </ul>
    </nav>

    @foreach($post as $post)

    <div class="div_deg">
        <label>{{$post->username}}</label><br>
        <img src="post/{{$post->image}}" height="300px" width="300px">
        <p> {{$post->description}} </p>
    </div>
   @endforeach
</body>
</html>