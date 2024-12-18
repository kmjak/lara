<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @empty($val1)
        <h1>Val1 Is Empty</h1>
    @else
        <h1>Val1 Is Not Empty</h1>
    @endempty

    @isset($val2)
        <h3>Val2 Is Set</h3>
    @else
        <h3>Val2 Is Not Set</h3>
    @endisset
    <form method="POST">
        @csrf
        <label for="val1">val1</label>
        <input type="text" name="val1" id="val1">
        <label for="val2">val2</label>
        <input type="text" name="val2" id="val2">
        <label for="msg">msg</label>
        <input type="text" name="msg" id="msg">
        <button type="submit">Submit</button>
    </form>
    @for($i=1; $i<=7;$i++)
        @if($i% 2 == 0)
            @continue
        @endif
        @if($i == 5)
            @break
        @endif
        <h3>{{$i}}> {{ $msg }}</h1>        
    @endfor
    @foreach($item as $x)
        <p>{{$loop->index}}> {{$x}}</p>
    @endforeach
</body>
</html>