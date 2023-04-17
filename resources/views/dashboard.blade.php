<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mb-12">
                <article>
                    <section class="mt-6 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-x-6 gap-y-8">
                        <article class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                            style="background-image: url('');">
                            <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out"></div>
                            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                                <h3 class="text-center">
                                    <a class="text-white text-2xl font-bold text-center" href="/game/create">
                                        ➕ Add New Game
                                        <span class="absolute inset-0"></span>
                                    </a>
                                </h3>
                            </div>
                        </article>
                        <article class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                            style="background-image: url('');">
                            <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out"></div>
                            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                                <h3 class="text-center">
                                    <a class="text-white text-2xl font-bold text-center" href="/game/manage">
                                        ⚙️ Manage Games
                                        <span class="absolute inset-0"></span>
                                    </a>
                                </h3>
                            </div>
                        </article>
                        <article class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                            style="background-image: url('');">
                            <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out"></div>
                            <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                                <h3 class="text-center">

                                <form class="text-white text-2xl font-bold text-center" method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit">🚪 Logout
                                </form>
                                    <span class="absolute inset-0"></span>
                                </h3>
                            </div>
                        </article>
                    </section>
                </article>
            </section>

            
        </div>
    </div>
</x-app-layout>
