<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1 class="text-blue-800"><strong>Employer: </strong>{{$job->employer->name}}</h1>
    <h1 class="text-green-800"><strong>Job Title: </strong>{{$job["title"]}}</h1>
    <br>
    <strong>Description: </strong>
    <p class="space ">Pays {{$job["salary"]}} per year and experience of {{$job["experience"]}} years</p>
{{--    &emsp; used to add 4 spaces --}}
</x-layout>
