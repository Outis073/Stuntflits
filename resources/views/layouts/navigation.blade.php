<nav x-data="{ open: false }" class="border-b border-gray-100 bg-white dark:border-gray-700 dark:bg-gray-800">
    <!-- Primary Navigation Menu -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex-shrink-0">
                    <x-application-logo class="block h-9 w-auto fill-current text-gray-600 dark:text-gray-200" />
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link :href="route('discounts')" :active="request()->routeIs('discounts')">
                    {{ __('Discounts') }}
                </x-nav-link>
            </div>

            <!-- Auth Links -->
            <div class="flex items-center">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm dark:text-gray-400 dark:hover:text-white">Account</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm dark:text-gray-400 dark:hover:text-white">Inloggen</a>

                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:rounded-sm dark:text-gray-400 dark:hover:text-white">Registreren</a>

                @endauth
            </div>
        </div>
    </div>
</nav>
