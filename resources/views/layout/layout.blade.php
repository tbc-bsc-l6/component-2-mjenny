<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product</title>
  @vite(['resources/sass/app.scss', 'resources/js/app/js'])
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="min-h-full">
    <nav class="bg-red-600">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-10">
        <div class="flex h-20 items-center justify-between">
          <div class="flex items-center">
            <div class="shrink-0">
              <img class="h-20 w-auto" src="{{ asset('images/nomnom_logo.png') }}" alt="image">
            </div>
            <div class="hidden md:block">
              <div class="ml-20 flex items-baseline space-x-8">

                <a href="{{ route('product') }}" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:text-white">Reviews</a>
                <a href="{{ route('profile') }}" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:text-white">Profile</a>
                <a href="{{ route('about') }}" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:text-white">About</a>
                

                <!-- Logout Button -->
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                  @csrf
                  <button type="submit" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:text-white">
                    Logout
                  </button>
                </form>
                <div class="ml-20 flex items-baseline space-x-4">
                  @if(Auth::check())
                  <span class="text-white">Hello, {{ Auth::user()->first_name }}</span>
                  @endif
                </div>
              </div>

            </div>

          </div>
    </nav>

  </div>




</body>

</html>