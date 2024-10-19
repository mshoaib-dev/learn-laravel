<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1 class="text-green-800"><strong>{{$job["title"]}}</strong></h1>
    <p>Pays <strong>{{$job["salary"]}}</strong> per year and experience of <strong>{{$job["experience"]}}</strong> year(s)</p>
</x-layout>
