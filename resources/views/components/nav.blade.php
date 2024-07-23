<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                        alt="Your Company">
                </div>
                <div class="">
                    <div class="ml-10 flex items-baseline space-x-4">
                        {{ $slot }}
                    </div>
                </div>
            </div>
            <div class="">
                <div class="ml-4 flex items-center md:ml-6">
                    @guest
                        <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
                        <x-nav-link href="/register" :active="request()->is('register')">Register</x-nav-link>
                    @endguest

                    @auth
                        <form action="/logout" method="post">
                            @csrf
                            <x-form-button varient="ghost" class="text-gray-300">Logout</x-form-button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</nav>
