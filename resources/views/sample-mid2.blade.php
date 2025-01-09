<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Middleware</title>
</head>
<body>
    <form method="POST">
        @csrf
        <input type="text" name="name" placeholder="name" class="border-2 border-black px-2 py-1">
        <input type="number" name="age" placeholder="age" class="border-2 border-black px-2 py-1">
        <input type="email" name="email" placeholder="email" class="border-2 border-black px-2 py-1">
        <button type="submit" class="px-4 py-2 bg-red-500">送信</button>
    </form>
</body>
</html>