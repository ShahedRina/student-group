<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($data as $d)

    @if(sizeof($d) != 2)
    <p>{{$d[0]}}, بدون شريك</p>

    @else
    <p>{{$d[0]}},{{$d[1]}}</p>

    @endif

    @endforeach
</body>
</html>