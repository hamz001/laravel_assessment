<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>

    </head>
    <body class="antialiased">
        
<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="index.php" class="flex items-center">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVut8oVVnESNvtnHeCKPMV0CXcJvZNLTcV7g&usqp=CAU" class="h-8 mr-3" alt="Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Gaming Zone</span>
  </a>
  <div class="flex md:order-2">
      <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
     
     
      @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else

                    <a href="{{ route('login') }}"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button></a>
                        @endif
                    @endauth
                </div>
            @endif
      <li>
      </li>
    </ul>
  </div>
  </div>
</nav>

        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            
            
            
            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mb-12">
                    <article>

                        <form action="/search" method="get">
                            <div class="max-w-xl">
                                <div class="flex space-x-4">
                                    <div class="flex rounded-md overflow-hidden w-full">
                                    <input name="search" type="text" class="w-full rounded-md rounded-r-none" placeholder="Search a game..."/>
                                    <button type="submit" class="bg-indigo-600 text-white px-6 text-lg font-semibold py-4 rounded-r-md">Go</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                        <section class="mt-6 grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-x-6 gap-y-8">
                            @foreach($games as $game)
                            <article class="relative w-full h-64 bg-cover bg-center group rounded-lg overflow-hidden shadow-lg hover:shadow-2xl  transition duration-300 ease-in-out"
                                style="background-image: url('{{$game->featured_image}}');">
                                <div class="absolute inset-0 bg-black bg-opacity-50 group-hover:opacity-75 transition duration-300 ease-in-out"></div>
                                <div class="relative w-full h-full px-4 sm:px-6 lg:px-4 flex justify-center items-center">
                                    <h3 class="text-center">
                                        <a class="text-white text-2xl font-bold text-center" href="/game/{{$game->slug}}">
                                            <span class="absolute inset-0"></span>
                                            {{$game->name}} {{$game->version}}
                                        </a>
                                    </h3>
                                </div>
                            </article>
                            @endforeach
                        </section>
                    </article>
                </section>
            </div>
        </div>
    </body>
</html>
