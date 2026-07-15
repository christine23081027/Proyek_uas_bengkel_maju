<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #121212; color: white; }
        .card { background-color: #1E1E1E; border: 1px solid #333; border-radius: 1rem; padding: 1.5rem; }
    </style>
</head>
<body class="p-8">
    <div class="max-w-5xl mx-auto">
        @yield('content')
    </div>
</body>
</html>