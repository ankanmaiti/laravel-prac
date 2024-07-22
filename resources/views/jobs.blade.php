<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>

    <ul class="space-y-1">
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

    <div class="my-4">
        {{ $jobs->links() }}
    </div>
</x-layout>
