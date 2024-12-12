<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body class="bg-gray-100">
    <main class="flex w-full text-white">
        <section class="w-1/6 min-h-screen bg-gray-200 px-6 py-20 overflow-auto">
            <ul class="text-blue-600 font-bold flex flex-col gap-5">
                @foreach ($goto as $item)
                <li class="flex gap-2 items-center">
                    <div class="rounded-full {{ $item["color"] }} w-3 h-3"></div>
                    <form method="POST">
                        @csrf
                        <input type="hidden" name="direction" value="left">
                        <input type="hidden" name="page" value="{{ $item['val'] }}">
                        <button type="submit" class="underline bg-transparent border-none cursor-pointer">{{ $item['dis_name'] }}</button>
                    </form>
                </li>
                @endforeach
            </ul>
        </section>

        <section class="w-5/6 min-h-screen bg-gray-500 px-6 py-3">
            @yield('content')
        </section>
    </main>
</body>
</html>