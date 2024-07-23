<x-layout>
    <x-slot:header>
        <x-heading>Edit Job</x-heading>
    </x-slot:header>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <!-- Job Title -->
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" required :value="old('title') ?? $job->title" />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <!-- Job Salary -->
                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" required :value="old('salary') ?? $job->salary" />
                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>

                </div>
            </div>

            <div class="mt-6 flex justify-between items-center">
                <x-form-button varient="ghost" form="delete-job" class="text-red-500">Delete</x-form-button>
                <div class="flex items-center gap-4">
                    <x-link varient="ghost" href="/jobs/{{ $job->id }}" class="text-gray-900">Cancel</x-link>
                    <x-form-button>Update</x-form-button>
                </div>
            </div>
    </form>

    <form action="/jobs/{{ $job->id }}" method="post" id="delete-job" class="hidden">
        @csrf
        @method('delete')
    </form>

</x-layout>
