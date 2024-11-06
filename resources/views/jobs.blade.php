<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <h1>Welcome on Jobs-listing Page.</h1>
    <br>
    <ul>
    @foreach($jobs as $job)
        <a href="jobs/{{$job['id']}} " class="text-blue-500 hover:underline">
            <li><strong>{{$job["id"]}}-{{$job["title"]}}: </strong> Pays {{$job["salary"]}} per year and experience of {{$job["experience"]}} years</li>
        </a>
    @endforeach
    </ul>
</x-layout>
