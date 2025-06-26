<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/education">Education</a></li>
        <li><a href="/skills">Skills</a></li>
        <li><a href="/contact">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    <p>&copy; 2025 Zinnat Tani</p>
  </footer>

  <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
