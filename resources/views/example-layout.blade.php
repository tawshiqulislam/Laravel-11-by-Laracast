<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <!-- Header Content -->
        @include('partials.header')
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer Content -->
        @include('partials.footer')
    </footer>
</body>
</html>
