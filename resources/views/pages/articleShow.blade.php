@extends('layouts.appUser')
@section('content')
    <section class="bg-white mt-5 dark:bg-gray-800">
        <div class="container px-6 py-8 mx-auto">
            <div class="items-center lg:flex">
                <div class="lg:w-5/12">
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{ $article->titre }}</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400">
                        {{ $article->text }}
                    </p>
                </div>

                <div class="mt-8 lg:mt-0 lg:w-1/2">
                    <div class="flex items-center justify-center lg:justify-end">
                        <div class="max-w-lg">
                            <h2 class="text-3xl font-bold text-gray-400 dark:text-gray-100">{{ $article->user->name }}</h2>
                            <img class="object-cover object-center w-full h-64 rounded-md shadow"
                                src="https://images.unsplash.com/photo-1484399172022-72a90b12e3c1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
