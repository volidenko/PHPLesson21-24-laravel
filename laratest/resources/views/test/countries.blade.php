<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3> {{ $title}} </h3>
    @if ($rand<500)
        <div> {{ $rand}} меньше 500 </div>
    @else
    @if ($rand == 500)
        <div> {{ $rand }} равен 500 </div>
    @else
    <div> {{ $rand}} больше 500 </div>
    @endif
    @endif
    <h4>Countries</h4>
    <ul>
        @foreach ($countries as $item)
            <li> {{$item}} </li>
        @endforeach
    </ul>
</body>
</html>
