@php
    $n = 5;
    $fruits = ['apple', 'banana'];
@endphp
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    @if($n > 4)
        @switch($n)
            @case(5)
                {{ $fruits[0] }}
                @break
            @case(6)
                {{ $fruits[1] }}
                @break
            @default
                <p>7以上</p>
        @endswitch
    @else
        <p>4以下</p>
    @endif
</body>
</html>