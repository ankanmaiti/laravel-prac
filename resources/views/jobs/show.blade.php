<x-layout>
    <x-slot:header>
        <div class="flex justify-between">
            <x-heading>{{ $job->title }}</x-heading>
            <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
        </div>
    </x-slot:header>
    <p>the only amount i get at end of the year is ${{ $job->salary }}</p>

</x-layout>
