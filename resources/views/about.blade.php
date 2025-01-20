<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    </div>
    <div class="relative isolate overflow-hidden bg-red-50 py-24 sm:py-32 min-h-screen ">

        <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu" aria-hidden="true">
            <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-4xl lg:mx-0">
                <h2 class="text-5xl font-semibold tracking-tight text-black-800 sm:text-7xl">Who are we</h2>
                <p class="mt-8 text-pretty text-lg font-medium text-gray-700 sm:text-xl/8">We are NomNom Tales, a platform dedicated to helping food lovers discover the best local dining experiences. Our goal is to provide a space where users can easily browse food places, read reviews, and share their own experiences with the community.</p>
            </div>
            <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">

                <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-700">Areas covered</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-black">10+</dd>
                    </div>

                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-700">Time wasted</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-black">0</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                        <dt class="text-base/7 text-gray-700">Happiness Spread</dt>
                        <dd class="text-4xl font-semibold tracking-tight text-black">Unlimited</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

</body>

</html>