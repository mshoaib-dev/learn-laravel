<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1 class="text-green-800"><strong>{{$job["title"]}}</strong></h1>
    <p>Pays {{$job["Salary"]}} per year and experience of {{$job["Experience"]}} years</p>
</x-layout>
