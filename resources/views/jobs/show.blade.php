<x-layout>
    <x-slot:header>
        <div class="flex justify-between">
            <x-heading>{{ $job->title }}</x-heading>
            <x-link varient="button" href="/jobs/{{$job->id}}/edit">Edit Job</x-link>
        </div>
    </x-slot:header>
    <p>the only amount i get at end of the year is ${{ $job->salary }}</p>

</x-layout>
