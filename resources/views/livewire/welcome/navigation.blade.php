<header>
    <nav class="p-6">

    <ul>
        <li class="text-center md:text-left text-white font-bold text-2xl">ScopeWise</Li>
    </ul>

    <div class="md:fixed md:top-0 md:right-0 p-6 md:text-end z-10 sm:text-center text-center">
        @auth
            <a href="{{ url('/dashboard') }}" class="font-semibold text-white hover:main-green focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="font-semibold text-white hover:main-green focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ms-4 font-semibold text-white hover:main-green focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a>
            @endif
        @endauth

    </div>
    </nav>
</header>
