<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yazz Network</title>
    @vite('resources/css/app.css')
</head>
<body>
    @if(session('success'))
        <div class="px-4 py-2 bg-green-100">
            <p class="text-green-700">
            {{ session('success') }}
            </p>
        </div>
    @endif
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
