<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1 class="text-green-800"><strong>{{$job["title"]}}</strong></h1>
    <p>Pays {{$job["salary"]}} per year and experience of {{$job["experience"]}} years</p>
</x-layout>
