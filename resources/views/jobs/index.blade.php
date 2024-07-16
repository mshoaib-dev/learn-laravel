<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <h1>Welcome on Jobs-listing Page.</h1><br>
    <a href="jobs/create" class="text-blue-800 hover:underline font-bold border border-gray-800"> Create your interesting Job </a>
    <br><br>
    <div class = space-y-4>
    @foreach($jobs as $job)
        <a href="/jobs/{{$job['id']}} " class="block px-4 py-4 border border-gray-300 rounded-lg">
            <div class="font-bold text-blue-800 text-sm">{{$job->employer->name}}</div>
            <div>
                <strong>{{$job["title"]}}: </strong> Pays {{$job["salary"]}} per year and experience of {{$job["experience"]}} years
            </div>
        </a>
    @endforeach
    </div>
{{--adding links to pagination--}}
    <div>
        {{$jobs->links()}}
    </div>
</x-layout>
