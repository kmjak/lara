<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>action</title>
</head>
<body class="h-screen">
    <h1 class="text-3xl text-center">電卓</h1>
    <h2 class="text-2xl text-center">
        計算結果:
        @isset($res)
            {{$res}}
        @endisset
    </h2>
    <p class="text-xl text-center">計算式: {{$calc}}</p>
    <form method="POST" class="text-white flex flex-col justify-center items-center w-scren mt-12">
        @csrf
        <section class="w-48 h-12 mx-auto">
            <div class="w-full h-full flex justify-center">
                <button type="submit" name="action" value="1" class="w-1/3 hover:opacity-60 transition bg-gray-800">1</button>
                <button type="submit" name="action" value="2" class="w-1/3 hover:opacity-60 transition bg-gray-600">2</button>
                <button type="submit" name="action" value="3" class="w-1/3 hover:opacity-60 transition bg-gray-800">3</button>
                <button type="submit" name="action" value="/" class="w-1/3 hover:opacity-60 transition bg-gray-600">/</button>
            </div>
        </section>
        <section class="w-48 h-12 mx-auto">
            <div class="w-full h-full flex justify-center">
                <button type="submit" name="action" value="4" class="w-1/3 hover:opacity-60 transition bg-gray-600">4</button>
                <button type="submit" name="action" value="5" class="w-1/3 hover:opacity-60 transition bg-gray-800">5</button>
                <button type="submit" name="action" value="6" class="w-1/3 hover:opacity-60 transition bg-gray-600">6</button>
                <button type="submit" name="action" value="*" class="w-1/3 hover:opacity-60 transition bg-gray-800">*</button>
            </div>
        </section>
        <section class="w-48 h-12 mx-auto">
            <div class="w-full h-full flex justify-center">
                <button type="submit" name="action" value="7" class="w-1/3 hover:opacity-60 transition bg-gray-800">7</button>
                <button type="submit" name="action" value="8" class="w-1/3 hover:opacity-60 transition bg-gray-600">8</button>
                <button type="submit" name="action" value="9" class="w-1/3 hover:opacity-60 transition bg-gray-800">9</button>
                <button type="submit" name="action" value="-" class="w-1/3 hover:opacity-60 transition bg-gray-600">-</button>
                </div>
        </section>
        <section class="w-48 h-12 mx-auto">
            <div class="w-full h-full flex justify-center">
                <button type="submit" name="action" value="%" class="w-1/3 hover:opacity-60 transition bg-gray-600">%</button>
                <button type="submit" name="action" value="0" class="w-1/3 hover:opacity-60 transition bg-gray-800">0</button>
                <button type="submit" name="calc" value="=" class="w-1/3 hover:opacity-60 transition bg-gray-600">=</button>
                <button type="submit" name="action" value="+" class="w-1/3 hover:opacity-60 transition bg-gray-800">+</button>
            </div>
        </section>
    </form>
</body>
</html>