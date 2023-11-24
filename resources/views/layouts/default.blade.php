<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <title>Printy: @yield('title')</title>
</head>
<body>
    <div id="app">

        @include('inc.header')

        <main class="main">

            @yield('content')

        </main>

        @include('inc.footer')

    </div>

    <script src="/js/app.js"></script>
</body>
</html>
