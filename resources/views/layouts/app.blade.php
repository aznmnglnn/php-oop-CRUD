<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>To-do List</title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css?family=atkinson-hyperlegible:400" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
  body {
    font-family: 'Atkinson Hyperlegible', sans-serif;
  }
  </style>
</head>

<body class="antialiased">
  @yield('content')
</body>

</html>
