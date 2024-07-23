<x-layout>
    <x-slot:header>
        <x-heading>Register Here</x-heading>
    </x-slot:header>

    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <!-- User Name -->
                    <x-form-field>
                        <x-form-label for="name">Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="name" placeholder="Ankan Maiti" required :value="old('name')"/>
                            <x-form-error name="name" />
                        </div>
                    </x-form-field>

                    <!-- User Email -->
                    <x-form-field>
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" placeholder="ankan@demo.com" required :value="old('email')"/>
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

                    <!-- Confirm Password -->
                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password_confirmation" required/>
                            <x-form-error name="password_confirmation" />
                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-link href="/" varient="ghost" class="text-gray-900">Cancel</x-link>
            <x-form-button>Register</x-form-button>
        </div>
    </form>

</x-layout>
