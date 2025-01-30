<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-blue-600 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-2xl font-bold">My Laravel App</h1>
            <nav>
                <a href="{{ url('/') }}" class="text-white px-3 py-2 hover:bg-blue-500 rounded">Home</a>
                <a href="{{ route('properties.index') }}" class="text-white px-3 py-2 hover:bg-blue-500 rounded">Properties</a>
                <a href="{{ url('/report') }}" class="text-white px-3 py-2 hover:bg-blue-500 rounded">Report</a>
            </nav>
        </div>
    </header>
    <main class="container mx-auto py-10 px-4">
        <div class="text-center">
            <h2 class="text-4xl font-bold mb-4">Welcome to My Laravel App</h2>
            <p class="text-lg text-gray-700 mb-6">Manage your properties and view insightful reports!</p>
            <a href="{{ route('properties.index') }}" class="bg-blue-600 text-white px-6 py-3 rounded hover:bg-blue-700">
                Manage Properties
            </a>
        </div>
    </main>
    <footer class="bg-gray-800 text-gray-400 text-center py-4">
        <p>&copy; {{ date('Y') }} My Laravel App. All rights reserved.</p>
    </footer>
</body>
</html>
