<x-layout>
    <x-slot:header>
        <x-heading>Login Here</x-heading>
    </x-slot:header>

    <form method="POST" action="/login">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <!-- User Email -->
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" placeholder="ankan@demo.com" :value="old('email')" required/>
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <!-- Password -->
                    <x-form-field>
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" required/>
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-link href="/" varient="ghost" class="text-gray-900">Cancel</x-link>
            <x-form-button>Login</x-form-button>
        </div>
    </form>

</x-layout>
