<!DOCTYPE html>
<html lang="en">

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
              <div class="ml-10 flex items-baseline space-x-4">

                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:text-white">Reviews</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:text-white">Profile</a>
                <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:text-white">About</a>
                <!-- <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:text-white">Logout</a> -->
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                  @csrf
                  <button type="submit" class="rounded-md px-3 py-2 text-sm font-medium text-white hover:text-white">
                    Logout
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
  </div>
  </nav>

  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
    </div>
  </main>
  </div>


</body>

</html>