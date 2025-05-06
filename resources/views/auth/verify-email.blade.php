<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Security</title>
    
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen bg-[url('/public/images/background.svg')] bg-no-repeat bg-bottom bg-fixed">
    <header class="flex justify-between items-center p-6">
        <a href="#" class="flex items-center gap-2">
            <svg class="h-10 text-violet-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
            </svg>              
            <span class="text-xl font-black">Безопасность</span>          
        </a>
        <div class="flex gap-5">
            <a href="{{ route('login') }}" class="flex justify-center items-center rounded-md bg-gray-200 py-2 px-4 text-gray-900 font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
            hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 transition duration-150 ease-in-out">Выйти</a>
        </div>
    </header>
    <main class="flex flex-col justify-center p-6 pb-12">
        <div class="mx-auto max-w-md">          
            <svg class="h-12 mx-auto text-violet-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
            </svg>                                           
            <h2 class="mt-2 sm:mt-6 text-2xl sm:text-3xl font-bold text-gray-900">Подтвердите почту</h2>
        </div>
        <div class="bg-white/80 backdrop-blur-xl mt-6 sm:mt-10 p-6 sm:p-10 mx-auto rounded-xl shadow-xl max-w-md w-full">
            <form action="#" autocomplete="off" class="space-y-6" method="post">
                <div class="rounded-md bg-yellow-50 border border-yellow-500 p-4 flex gap-3">
                    <svg class="w-8 h-8 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                        <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.5-2.599 4.5H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003ZM12 8.25a.75.75 0 0 1 .75.75v3.75a.75.75 0 0 1-1.5 0V9a.75.75 0 0 1 .75-.75Zm0 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="text-sm font-medium text-yellow-800">Пожалуйста подтвердите свою почту. Мы только что отправили верифицированное письмо</h3>
                </div>
                <div>
                    <a href="#" class="flex justify-center items-center rounded-md bg-violet-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
                    hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:ring-offset-2 transition duration-150 ease-in-out">Отправить ссылку</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>