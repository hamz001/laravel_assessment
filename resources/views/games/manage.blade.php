<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Manage Games
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
<div class="relative overflow-x-auto">

    @if ($message = Session::get('success'))
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">Game Removed Successfully!</span>
    </div>
    @endif

    @if ($message = Session::get('error'))
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
        <span class="font-medium">You can only remove the games you've added!</span>
    </div>
    @endif

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Slug
                </th>
                <th scope="col" class="px-6 py-3">
                    Created By
                </th>
                <th scope="col" class="px-6 py-3">
                    View
                </th>
                <th scope="col" class="px-6 py-3">
                    Remove
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$game->name}} {{$game->version}}
                </th>
                <td class="px-6 py-4">
                    {{$game->slug}}
                </td>
                <td class="px-6 py-4">
                    {{$game->uploaders->name}}
                </td>
                <td class="px-6 py-4">
                    <a href="/game/{{$game->slug}}"><button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-1.5 mr-1 mb-1 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">View</button></a>
                </td>
                <td class="px-6 py-4">
                    <form action="/game/{{$game->slug}}" method="post">
                        @csrf    
                        @method('DELETE')
                        <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 mr-1 mb-1 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Remove</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

            
        </div>
    </div>
</x-app-layout>
