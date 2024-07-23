<x-layout>
    <x-slot:header>
        <div class="flex justify-between items-center">
            <x-heading>Jobs</x-heading>
            <x-link varient="button" href="/jobs/create">+</x-link>
        </div>
    </x-slot:header>


    <ul class="space-y-1 my-4">
        @foreach ($jobs as $job)
            <li>
                <x-link href="/jobs/{{ $job['id'] }}" varient="card" class="group hover:bg-blue-500 hover:text-white ">
                    <p class="text-sm text-blue-500 group-hover:text-blue-200">{{ $job->employer->name }}</p>
                    <strong>{{ $job['title'] }}</strong> : pays {{ $job['salary'] }}/year
                </x-link>
            </li>
        @endforeach
    </ul>

    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
