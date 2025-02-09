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
            hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 transition duration-150 ease-in-out">Войти</a>
            <a href="{{ route('register') }}" class="rounded-md bg-violet-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
            hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:ring-offset-2 transition duration-150 ease-in-out">Зарегистрироваться</a>
        </div>
    </header>
    <main class="flex flex-col justify-center p-6 pb-12">
        <div class="mx-auto max-w-md">        
            <svg class="h-12 mx-auto text-violet-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
            </svg>                                
            <h2 class="mt-2 sm:mt-6 text-2xl sm:text-3xl font-bold text-gray-900">Забыли свой пароль?</h2>
        </div>
        <div class="bg-white/80 backdrop-blur-xl mt-6 sm:mt-10 p-6 sm:p-10 mx-auto rounded-xl shadow-xl max-w-md w-full">
            <div class="rounded-md bg-green-50 border border-green-500 p-4 flex gap-3 mb-6">
                <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm13.36-1.814a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z" clip-rule="evenodd" />
                </svg>                  
                <h3 class="text-sm font-medium text-green-800">Ссылка успешно отправлена</h3>
            </div>
            <form action="#" autocomplete="off" class="space-y-6" method="post">
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Электронная почта</label>
                    <div class="relative rounded-md shadow-sm mt-1">
                        <div class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>                                                           
                        </div>
                        <input type="email" id="email" name="email" class="pl-10 pr-10 text-gray-900 border-gray-300 rounded-md focus:border-violet-500
                        focus:ring-gray-500 text-sm w-full" placeholder="Ваша почта">
                    </div>
                </div>
                <div>
                    <a href="#" class="flex justify-center items-center rounded-md bg-violet-600 py-2 px-4 text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
                    hover:bg-violet-700 focus:outline-none focus:ring-2 focus:ring-violet-500 focus:ring-offset-2 transition duration-150 ease-in-out">Отправить ссылку для сброса</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>