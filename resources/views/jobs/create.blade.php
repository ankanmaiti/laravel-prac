<x-layout>
    <x-slot:header>
        <x-heading>Create Job</x-heading>
    </x-slot:header>

    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <!-- Job Title -->
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" placeholder="Your job title" required :value="old('title')"/>
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <!-- Job Salary -->
                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" placeholder="$50000" required :value="old('salary')"/>
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-link href="/jobs" varient="ghost" class="text-gray-900">Cancel</x-link>
            <x-form-button>Save</x-form-button>
        </div>
    </form>

</x-layout>
