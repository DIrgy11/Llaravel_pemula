<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Laravel Pemula</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen font-sans">

    @include('partials.header')

    <main class="flex-grow container mx-auto px-4 py-8">
        @yield('content')
    </main>

    @include('partials.footer')

</body>
</html>