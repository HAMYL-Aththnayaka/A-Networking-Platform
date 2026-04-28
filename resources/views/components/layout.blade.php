<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yazz Network</title>
    @vite('resources/css/app.css')
</head>
<body>

    <header>
    <nav>
        <h1>Yasas Network</h1>
        <a href="{{route("Yzz.index")}}">All</a>
        <a href="{{route("Yzz.create")}}">create new</a>
    </nav>
    </header>
    <main class="container">
    {{ $slot }}

    </main>
</body>
</html>
