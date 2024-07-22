<x-layout>
    <x-slot:header>
        <div class="flex justify-between items-center">
            <x-heading>Jobs</x-heading>
            <x-button href="/jobs/create">+</x-button>
        </div>
    </x-slot:header>


    <ul class="space-y-1 my-4">
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}"
                    class="block group px-6 py-4 bg-white rounded shadow hover:bg-blue-500 hover:text-white ">
                    <p class="text-sm text-blue-500 group-hover:text-blue-200">{{ $job->employer->name }}</p>
                    <strong>{{ $job['title'] }}</strong> : pays {{ $job['salary'] }}/year
                </a>
            </li>
        @endforeach
    </ul>

    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
