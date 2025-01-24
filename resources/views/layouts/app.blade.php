<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        nav {
            background-color: #007bff;
            padding: 10px;
            color: white;
        }
        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .container {
            padding: 20px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ route('properties.index') }}">Properties</a>
        <a href="{{ url('/report') }}">Report</a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
