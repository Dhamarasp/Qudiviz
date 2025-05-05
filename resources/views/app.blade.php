<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Qudiviz - @yield('title')</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="min-h-screen bg-gray-100">

  <!-- Navbar -->
  <nav class="bg-white shadow-md">
    @include('layouts.navbar')
  </nav>

  <!-- Content -->
  @yield('content')

  <!-- Footer -->
  <footer class="bg-gray-800 text-white py-8">
    @include('layouts.footer')
  </footer>
  
</body>

</html>