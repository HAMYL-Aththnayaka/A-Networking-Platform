<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yazz Network</title>
     @vite('resources/css/app.css')
</head>
<body class="text-center px-8 py-12">
    <h1>Welcome to Yazz Network</h1>
    <p>Click The Button Below to Get Started</p>
    <a href="/names" class="btn mt-4 inline-block">
        Get Started
    </a>
</body>
</html>
