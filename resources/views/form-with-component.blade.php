<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <button type="submit">Submit</button>
    </form>
    <x-FormWithComponent :name="$name"/>
</body>
</html>