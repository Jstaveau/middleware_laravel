<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>

        <nav class="bg-white shadow dark:bg-gray-800 flex items-center">
            @if (Auth::user())
                <form class="ml-5 absolute" action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="bg-red-600 rounded text-white p-3">log out</button>
                </form>
            @endif
            <div
                class="container flex items-center justify-center p-6 mx-auto text-gray-600 capitalize dark:text-gray-300">

                <a href="/"
                    class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Accueil</a>

                <a href="/article"
                    class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Articles</a>
                @if (Auth::user() && Auth::user()->role->role != 'member')
                    <a href="/article/create"
                        class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Écrire
                        un article</a>
                    @if (Auth::user()->role->role == 'admin')
                        <a href="/dashboard" class="border-b-2 border-transparent hover:text-gray-800 transition-colors duration-200 transform dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">Dashboard</a>
                    @endif
                @endif


            </div>
        </nav>
    </header>

    <main class="container mx-auto">
        @yield('content')
    </main>
</body>

</html>
