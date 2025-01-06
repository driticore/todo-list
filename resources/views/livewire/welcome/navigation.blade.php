<nav class="flex flex-1 justify-between items-center">
    <a href="#" class="flex gap-2 items-center">
        <img class="block h-20 w-auto" src="{{asset('logo.png')}}" alt="Todo Mindset Logo">
        <h1 class="text-xl font-semibold">Todo Mindset</h1>
    </a>
    
    @auth
        <a href="{{url('/dashboard')}}" class="hover:border-b-2 transition-all ease-linear .5s hover:border-black dark:hover:border-white hover:pb-2">Dashboard</a>
    @else
        <div class="flex gap-7  text-xs font-semibold items-center tracking-widest uppercase">
            <a href="{{url('/login')}}" class="hover:border-b-2 transition-all ease-linear .5s hover:border-black dark:hover:border-white hover:pb-2">Login</a>
            <a href="{{url('/register')}}" class="py-3 px-5 transition-all ease-linear .5s dark:text-black text-white dark:bg-white bg-black hover:bg-gray-800 hover:text-white rounded-md">Register</a>
        </div>
    @endauth
</nav>