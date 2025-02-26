<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>

    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen bg-[url('/public/images/background.svg')] bg-no-repeat bg-bottom bg-fixed">
    <header class="flex justify-between items-center p-6">
        <a href="#" class="flex gap-2">
            <span class="text-xl font-black">Tunica Hub - Changelog</span>
        </a>
        <div class="flex gap-5">
            <a href="{{ route('login') }}" class="flex justify-center items-center rounded-md bg-gray-200 py-2 px-4 text-gray-900 font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
            hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 transition duration-150 ease-in-out">Войти</a>
            <a href="{{ route('register') }}" class="rounded-md bg-violet-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
            hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:ring-offset-2 transition duration-150 ease-in-out">Зарегистрироваться</a>
        </div>
    </header>
    <main class="flex flex-col justify-center p-6 pb-12">
        <div class="bg-white/80 backdrop-blur-xl mt-6 sm:mt-10 p-6 sm:p-10 mx-auto rounded-xl shadow-xl w-full flex flex-col items-center">
            <span>Что нового</span>
            <div class="flex flex-col gap-4">
                @foreach ($news as $post)
                    <div class="mt-10 shadow-lg p-3 rounded-md">
                        <a href="#" class="text-violet-600">{{ $post->title }}</a>
                        <p class="text-gray-600">{{ $post->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>
</html>