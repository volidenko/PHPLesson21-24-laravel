<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset("css/bootstrap.min.css")  }}" rel="stylesheet">
</head>
<body>
    @section('menu')
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a href="{{ url("topic") }}" class="{{ $page == "Главная" ? "nav-link active" : "nav-link" }}">Главная</a>
                <a href="{{ url("block/create") }}" class="{{ $page == "Добавление блока" ? "nav-link active" : "nav-link" }}">Добавление блока</a>
                <a href="{{ url("topic/create") }}" class="{{ $page == "Добавление раздела" ? "nav-link active" : "nav-link" }}">Добавление разделов</a>
            </div>
        </div>
    </nav>
    @show
    <div class="container col-12">
        @yield('content')
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src=" {{ asset("js/bootstrap.min.js")}}" type="text/javascript"></script>
</body>
</html>
