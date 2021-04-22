<!--
Onur Akman
CST-323
01/10/2021
This is my own work
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Share and Tell Jokes</title>
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css')}}" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/public/css/app.css')}}">
</head>
<body>
    <!-- NAVBAR -->
    <nav id="navbar">
        <a href="{{route('home')}}" id="brand">Share Your Joke or Read One</a>
        <div id="navbar-links">
            <ul id="navbar-list">
                <li>
                    <a id="read" href="{{route('joke')}}">Read a joke...</a>
                </li>
                <li>
                    <a id="tell" href="{{route('share')}}">Tell a joke...</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- CONTENT -->
    <main class="container">
        @yield('content')
    </main>
    <script src="{{asset('https://code.jquery.com/jquery-3.5.1.slim.min.js')}}" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js')}}https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js')}}" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
