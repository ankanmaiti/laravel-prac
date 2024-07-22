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

                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900 ">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="title" id="title" value="{{ $job->title }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Your job title" required>
                            </div>
                            @error('title')
                                <p class="mt-1 text-end text-red-500 text-sm font-semibold">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>


                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900 ">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="salary" id="salary" value="{{ $job->salary }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="$50000" required>
                            </div>
                            @error('salary')
                                <p class="mt-1 text-end text-red-500 text-sm font-semibold">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-6 flex justify-between items-center">
            <button form="delete-job" class="font-semibold leading-6 text-red-600">Delete</button>
            <div class="flex items-center justify-end gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </div>
    </form>

    <form action="/jobs/{{$job->id}}" method="post" id="delete-job" class="hidden">
        @csrf
        @method('delete')
    </form>

</x-layout>
