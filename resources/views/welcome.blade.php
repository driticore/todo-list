<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo Mindset</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="bg-gradient-to-l from-red-500  to-violet-500 dark:bg-black text-black dark:text-white min-h-screen">
            <header class="mx-10 py-5">
                @livewire('welcome.navigation')
            </header>

            
            <main>
                <x-max-width-wrapper>
                    <div class="text-start items-start py-32 flex flex-col gap-2">
                        <h1 class="text-5xl font-semibold"><span class="text-white">Just</span> <span class="text-green-400">Stay</span> <span class="text-red-500">Consistent</span> With Your Life</h1>
                        <p class="text-xl">Lets start by adding your first task and see where it goes from there.</p>
                        <div class="mt-8">
                            <x-primary-button class="py-3 px-5 text-xs" onclick="window.location.href='{{url('/dashboard')}}'">Add Your Tasks</x-primary-button>
                        </div>
                    </div>
                </x-max-width-wrapper>
            </main>

            <!---
            <footer class="w-full text-center">
                <span>Todo Mindset @2025</span>
            </footer>
            --->
        </div>
    </body>
</html>
