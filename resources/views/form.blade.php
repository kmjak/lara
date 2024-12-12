<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Form</title>
</head>
<body class="bg-gray-800 flex justify-center items-center h-screen">

    <form method="POST" class="w-full max-w-lg p-8 bg-gray-900 rounded-lg shadow-lg flex flex-col items-center space-y-6">
        @csrf

        <div class="w-full">
            <label for="page" class="text-xl text-white mb-2 block">どのページから始めますか？</label>
            <select name="page" id="page" class="w-full bg-yellow-300 text-xl text-black p-3 rounded-lg">
                <option value="top">● トップ</option>
                <option value="movie">● 映画出演</option>
                <option value="drama">● ドラマ出演</option>
                <option value="stage">● 舞台出演</option>
                <option value="photobook">● 写真集</option>
                <option value="book">● 出版本</option>
                <option value="admin">● 管理者</option>
            </select>
        </div>

        <div class="w-full flex space-x-4">
            <button type="submit" name="direction" value="left" class="flex-1 bg-blue-500 text-white py-4 rounded-lg text-xl shadow-lg hover:bg-blue-600 transition duration-300">left</button>
            <button type="submit" name="direction" value="right" class="flex-1 bg-red-500 text-white py-4 rounded-lg text-xl shadow-lg hover:bg-red-600 transition duration-300">right</button>
        </div>
    </form>

</body>
</html>
