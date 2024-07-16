<x-layout>
    <x-slot:heading>
        Edit a Job: {{$job->title}}
    </x-slot:heading>
    <form method="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('PATCH')
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-12">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus:within:ring-inset focus-withing:ring-indigo-600 sm:max-w-md">
                                <input
                                    type="text"
                                    name="title"
                                    id="title"
                                    value="{{$job->title}}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder: text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="Project Manager"
                                    required
                                >
                            </div>
                            @error('title')
                            <p class="text-red-500 text-xs font-semibold italic mt-1">{{  $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-12">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus:within:ring-inset focus-withing:ring-indigo-600 sm:max-w-md">
                                <input
                                    type="text"
                                    name="salary"
                                    id="salary"
                                    value="{{$job->salary}}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder: text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="100K USD"
                                    required
                                >
                            </div>
                            @error('salary')
                            <p class="text-red-500 text-xs font-semibold italic mt-1">{{  $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-12">
                        <label for="experience" class="block text-sm font-medium leading-6 text-gray-900">Experience</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus:within:ring-inset focus-withing:ring-indigo-600 sm:max-w-md">
                                <input
                                    type="text"
                                    name="experience"
                                    id="experience"
                                    value="{{$job->experience}}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder: text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    placeholder="5 years"
                                    required
                                >
                            </div>
                            @error('experience')
                            <p class="text-red-500 text-xs font-semibold italic mt-1">{{  $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-1 flex item-center justify-between gap-x-6">
            <div class="flex item-center">
                <button form="delete-form" class="text-sm font-bold leading-6 text-red-600">Delete</button>
            </div>
            <div class="flex item-center gap-x-6">
                <a href="/jobs/{{$job->id}}" type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
                <div>
                    <button type="submit" class="rounded-md bg-indigo-400 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 leading-6 focus-visit">Update</button>
                </div>
            </div>
        </div>

    </form>

    <form method="POST" action="/jobs/{{$job->id}}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
