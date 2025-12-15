<nav x-data="{ open: false }" class="navbar-mu">

<!-- Primary Navigation Menu -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-6">
<div class="flex justify-between h-16">
<div class="flex">

    <!-- Navigation Links -->
    <div class="hidden space-x-8 sm:-my-px sm:ms-50 sm:flex">

     <div class="shrink-0 flex items-center">
            <a href="{{ route('home') }}">
                <img src="{{ asset('img/580b57fcd9996e24bc43c4e7.png') }}" class="logo-mu" alt="Logo MU">
            </a>
        </div>

        @auth
        <x-nav-link style="color:white;" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
        @endauth

        <x-nav-link style="color:white;" :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-nav-link>

        <x-nav-link style="color:white;" :href="route('about')" :active="request()->routeIs('about')">
            {{ __('About') }}
        </x-nav-link>

        <x-nav-link style="color:white;" :href="route('contact')" :active="request()->routeIs('contact')">
            {{ __('Contact') }}
        </x-nav-link>

        <x-nav-link style="color:white;" :href="route('posts.index')" :active="request()->routeIs('posts.*')">
            {{ __('Blog') }}
        </x-nav-link>

        @auth
        <x-nav-link style="color:white;" :href="route('mahasiswas.index')" :active="request()->routeIs('mahasiswas.*')">
            {{ __('Daftar Mahasiswa') }}
        </x-nav-link>
        @endauth

    </div>
</div>

<!-- Settings Dropdown -->
<div class="hidden sm:flex sm:items-center sm:ms-6">
    @auth
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 text-red-200 bg-transparent">
                <div>{{ Auth::user()->name }}</div>
                <div class="ms-1">
                    <svg class="fill-current h-4 w-4 text-red-300">
                        <path ... />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-dropdown-link>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
    @endauth
</div>

<!-- Mobile Menu Button -->
<div class="-me-2 flex items-center sm:hidden">
    <button @click="open = ! open" class="text-red-200">
        <svg class="h-6 w-6" fill="none">
            <path ... />
        </svg>
    </button>
</div>

</div>
</div>

<!-- Responsive Navigation Menu -->
<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden mobile-bg">

    <div class="pt-2 pb-3 space-y-1">

        @auth
        <x-responsive-nav-link style="color:white;" :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-responsive-nav-link>
        @endauth

        <x-responsive-nav-link style="color:white;" :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-responsive-nav-link>

        <x-responsive-nav-link style="color:white;" :href="route('about')" :active="request()->routeIs('about')">
            {{ __('About') }}
        </x-responsive-nav-link>

        <x-responsive-nav-link style="color:white;" :href="route('contact')" :active="request()->routeIs('contact')">
            {{ __('Contact') }}
        </x-responsive-nav-link>

        <x-responsive-nav-link style="color:white;" :href="route('posts.index')" :active="request()->routeIs('posts.*')">
            {{ __('Blog') }}
        </x-responsive-nav-link>

        @auth
        <x-responsive-nav-link style="color:white;" :href="route('mahasiswas.index')" :active="request()->routeIs('mahasiswas.*')">
            {{ __('Daftar Mahasiswa') }}
        </x-responsive-nav-link>
        @endauth

    </div>

</div>

</nav>
