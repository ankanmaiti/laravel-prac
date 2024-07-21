<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
                    <strong>{{ $job['title'] }}</strong> : pays {{ $job['salary'] }}/year
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
