<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @vite(['resources/sass/app.scss', 'resources/js/app/js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <div class="flex min-h-screen items-center justify-center px-6 py-20">
        <div class="w-full max-w-md space-y-8">
            <div class="text-center">
                <img class="mx-auto h-25 w-30" src="{{ asset('images/nomnom_logo.png') }}" alt="Logo">
                <h2 class="mt-4 text-3xl font-bold tracking-tight text-gray-900">Create Your Account</h2>

            </div>
            @if ($errors->any())
      <div class="mb-4 text-red-600">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
            <form class="mt-8 space-y-6" action="{{ route('register.store') }}" method="POST">
                @csrf
                <div class="space-y-4">

                    <div>
                        <label for="first_name" class="block text-sm/6 font-medium text-gray-900">First Name</label>
                        <div class="mt-2">
                            <input type="text" name="first_name" id="first_name" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="First Name">
                        </div>
                    </div>

                    <!-- Last Name -->
                    <div class="mt-4">
                        <label for="last_name" class="block text-sm/6 font-medium text-gray-900">Last Name</label>
                        <div class="mt-2">
                            <input type="text" name="last_name" id="last_name" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="Last Name">
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>

                        </div>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-red-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Register
                        </button>
                        <p class="mt-2 text-sm text-gray-600">
                            Already have an account?
                            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">Sign in</a>
                        </p>
                    </div>
            </form>
        </div>
    </div>
</body>

</html>