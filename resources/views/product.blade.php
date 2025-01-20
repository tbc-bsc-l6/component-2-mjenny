
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
<h1>you are logged in</h1>
<form action="{{ route('logout') }}" method="POST" style="display: inline;">
    @csrf
    <button type="submit" class="btn btn-danger">Logout</button>
</form>
</body>
</html>