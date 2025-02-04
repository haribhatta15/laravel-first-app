<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-500 text-white flex flex-col min-h-screen bg-cover bg-center">
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">PROPERTY MANAGEMENT</h1>
            <ul class="flex space-x-4">
                <li><a href="/" class="hover:underline">Home</a></li>
                <li><a href="/properties" class="hover:underline">Properties</a></li>
                <li><a href="/report" class="hover:underline">Report</a></li>
            </ul>
        </div>
    </nav>
    <main class="flex-grow flex items-center justify-center">
        <section class="text-center p-8 bg-blue-500 bg-opacity-80 rounded-lg">
            <h2 class="text-4xl font-bold mb-4">Find Your Perfect Property</h2>
            <p class="text-lg">Browse our collection of Commercial and Residential properties.</p>
            <a href="/properties" class="mt-4 inline-block bg-white text-blue-600 px-6 py-2 rounded-lg font-semibold" onmouseover="this.classList.add('shadow-xl')" onmouseout="this.classList.remove('shadow-2xl')">
                View Properties
            </a>
        </section>
    </main>

    <footer class="bg-blue-600 text-white text-center p-4 mt-auto">
        <p>&copy; 2025 Property App. All Rights Reserved.</p>
    </footer>
</body>
</html>
