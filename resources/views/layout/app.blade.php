<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="antialiased font-sans bg-white text-gray-900 min-h-screen">
        <header class="border-t-4 border-indigo-600 py-24">
            <div class="w-full max-w-3xl mx-auto px-6 flex items-center justify-between">
                <a href="{{ route('home') }}" class="flex items-center text-gray-300 hover:text-indigo-600 transition duration-300">
                    <svg class="w-8 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd" />
                    </svg>
                    <span class="font-bold">{{ config('app.name') }}</span>
                </a>

                @if (Request::is('/'))
                <a href="{{ route('all') }}" class="block bg-gray-300 hover:bg-indigo-600 text-gray-800 hover:text-indigo-100 py-1 px-4 rounded-full text-sm tracking-wide transition duration-300 flex items-center justify-between">
                    <span class="mr-2">See all our images</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 inline">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
                @else
                <a href="{{ route('home') }}" class="block bg-gray-300 hover:bg-indigo-600 text-gray-800 hover:text-indigo-100 py-1 px-4 rounded-full text-sm tracking-wide transition duration-300 flex items-center justify-between">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 inline">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>

                    <span class="ml-2">Return</span>
                </a>
                @endif
            </div>
        </header>

        <main class="w-full max-w-3xl mx-auto px-6">
            @yield('content')
        </main>

        <footer class="w-full max-w-3xl mx-auto px-6">
            <div class="py-12 text-gray-500 flex items-center justify-between">
                <div>
                    <a href="https://justijn.netlify.app" target="_blank" class="block w-6 text-gray-300 hover:text-indigo-600 transition duration-300">
                        <svg class="" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 300 300" fill="currentColor">
                            <path d="M150,5.1L4.6,203.7L150,294.9l145.4-91.2L150,5.1z M150,272.3L32.1,198.4l31.7-43.3l27.8,17.4l-13.8,18.8 l36.5,22.9v-72.7V86.2L150,37.4V272.3z M185.7,141.5l36.5,49.8l-36.5,22.9V141.5z"/>
                        </svg>
                    </a>
                </div>

                <div>
                    <span>Found a bug?</span>
                    <a href="https://github.com/justijndepover/imageholder.io" target="_blank" class="font-bold hover:text-indigo-600">Open issue</a>
                </div>
            </div>
        </footer>

        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>