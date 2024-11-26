<!DOCTYPE html>
<html>

<head>
    <title>Laravel 11 Task List App</title>
    <script src="https://cdn.tailwindcss.com"></script>

    @yield('styles')
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
    <h1 class="text-2xl mb-4">@yield('title')</h1>
    <div>
        @if (session()->has('success'))
            <div class="mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700">{{ session('success') }}</div>
        @endif
        @yield('content')
    </div>
</body>

</html>
