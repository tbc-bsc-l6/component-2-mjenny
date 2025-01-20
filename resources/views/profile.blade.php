<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NomNom Tales</title>
    @vite(['resources/sass/app.scss', 'resources/js/app/js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="min-h-full">
        <nav class="bg-red-400">
            <div class="mx-20 max-w-7xl px-4 sm:px-6 lg:px-10">
                <div class="flex h-20 items-center justify-between">
                    <div class="flex items-center">
                        <div class="shrink-0">
                            <img class="h-20 w-auto" src="{{ asset('images/nomnom_logo.png') }}" alt="image">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-20  flex items-baseline space-x-8">

                                <a href="{{ route('product') }}" class="rounded-md px-3 py-2 text-md font-medium text-white hover:text-white">Reviews</a>
                                <a href="{{ route('profile') }}" class="rounded-md px-3 py-2 text-md font-medium text-white hover:text-white">Profile</a>
                                <a href="{{ route('about') }}" class="rounded-md px-3 py-2 text-md font-medium text-white hover:text-white">About</a>


                                <!-- Logout Button -->
                                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="rounded-md px-3 py-2 text-md font-medium text-white hover:text-white">
                                        Logout
                                    </button>
                                </form>
                                <div class="ml-20 pl-80 flex items-baseline space-x-4">
                                    @if(Auth::check())
                                    <span class="text-white font-bold">Hello, {{ Auth::user()->first_name }}</span>
                                    @endif
                                </div>
                            </div>

                        </div>

                    </div>
        </nav>


<div class="m-5 p-10">
        <form>
            <div class="space-y-12">
                

                <div class="border-b border-gray-900/10 pb-12">
                    <h1 class="font-semibold text-gray-900">Your Personal Information</h1>
                    <!-- <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.</p> -->

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-10">
                        <div class="sm:col-span-3">
                            <label for="first-name" class="block text-sm/6 font-medium text-gray-900">First name</label>
                            <div class="mt-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="last-name" class="block text-sm/6 font-medium text-gray-900">Last name</label>
                            <div class="mt-2">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>


                        
                    </div>
                </div>
   
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
        </div>


</body>

</html>