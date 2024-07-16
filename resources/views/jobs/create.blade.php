<x-layout>
    <x-slot:heading>
        Create a Job
    </x-slot:heading>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Fill out this form for your incredible job.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-12">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus:within:ring-inset focus-withing:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="title" id="title" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder: text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Project Manager">
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-12">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus:within:ring-inset focus-withing:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="salary" id="salary" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder: text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="100K USD">
                            </div>
                        </div>
                    </div>

                    <div class="sm:col-span-12">
                        <label for="experience" class="block text-sm font-medium leading-6 text-gray-900">Experience</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus:within:ring-inset focus-withing:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="experience" id="experience" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder: text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="5 years">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex item-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-400 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 leading-6 focus-visit">Submit</button>
        </div>
    </form>
</x-layout>
