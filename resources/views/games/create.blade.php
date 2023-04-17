<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create New Game
        </h2>
    </x-slot>
    
    <div class="relative overflow-x-auto">
        @if ($message = Session::get('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Game created successfully</span>
        </div>
        @endif
    </div>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <form action="/game" method="post">
                    @csrf
                <div class="space-y-12">
                    <div class="border-b border-gray-900/10 pb-12">
                        
                    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="gamename" class="block text-sm font-medium leading-6 text-gray-900">Game Name</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="name" id="gamename" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Call of Duty" value="{{old('name')}}">
                                </div>
                                @error('name')
                                <div class="mt-1 p-4 mb-4 text-sm text-red-500 rounded-sm">
                                    <span class="font-medium">{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="gameextraname" class="block text-sm font-medium leading-6 text-gray-900">Game Extra Name</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="extra_title" id="gameextraname" autocomplete="gameextraname" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Call of Duty Ghosts" value="{{old('extra_title')}}">
                                </div>
                                @error('extra_title')
                                <div class="mt-1 p-4 mb-4 text-sm text-red-500 rounded-sm">
                                    <span class="font-medium">{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="release_date" class="block text-sm font-medium leading-6 text-gray-900">Release Date</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="date" name="release_date" id="release_date" autocomplete="release_date" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" value="{{old('release_date')}}">
                                </div>
                                @error('release_date')
                                <div class="mt-1 p-4 mb-4 text-sm text-red-500 rounded-sm">
                                    <span class="font-medium">{{$message}}</span>
                                </div>
                                @enderror
                                <p class="mt-3 text-sm leading-6 text-gray-600">Select release date of the game.</p>
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="version" class="block text-sm font-medium leading-6 text-gray-900">Game Version</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="version" id="version" autocomplete="version" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Deluxe Version" value="{{old('version')}}">
                                </div>
                                @error('version')
                                <div class="mt-1 p-4 mb-4 text-sm text-red-500 rounded-sm">
                                    <span class="font-medium">{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">Slug</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">Website.com/</span>
                                <input type="text" name="slug" id="slug" autocomplete="slug" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="call-of-duty" value="{{old('slug')}}">
                                </div>
                                @error('slug')
                                <div class="mt-1 p-4 mb-4 text-sm text-red-500 rounded-sm">
                                    <span class="font-medium">{{$message}}</span>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                <div class="mt-2">
                                    <textarea id="about" name="description" rows="1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{old('description')}}"></textarea>
                                </div>
                                @error('description')
                                <div class="mt-1 p-4 mb-4 text-sm text-red-500 rounded-sm">
                                    <span class="font-medium">{{$message}}</span>
                                </div>
                                @enderror
                            <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about the game.</p>
                        </div>

                        <div class="col-span-full">
                            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Article</label>
                                <div class="mt-2">
                                    <textarea id="about" name="article" rows="10" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{old('article')}}"></textarea>
                                </div>
                                @error('article')
                                <div class="mt-1 p-4 mb-4 text-sm text-red-500 rounded-sm">
                                    <span class="font-medium">{{$message}}</span>
                                </div>
                                @enderror
                            <p class="mt-3 text-sm leading-6 text-gray-600">Write the complete article for the game.</p>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="Image" class="block text-sm font-medium leading-6 text-gray-900">Image</label>
                            <div class="mt-2">
                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input type="text" name="featured_image" id="Image" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="https://website.com/image.png/" value="{{old('featured_image')}}">
                                </div>
                                @error('featured_image')
                                <div class="mt-1 p-4 mb-4 text-sm text-red-500 rounded-sm">
                                    <span class="font-medium">{{$message}}</span>
                                </div>
                                @enderror
                                <p class="mt-3 text-sm leading-6 text-gray-600">Enter complete URL for Image.</p>
                            </div>
                        </div>
                    </div>
                    </div>


                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>


                </form>
        
                </div>
            </div>
            
            </div>
    </div>
</x-app-layout>
