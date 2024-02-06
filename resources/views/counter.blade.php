<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter</title>
</head>
<body>
    <h1>Counter Value: {{ $counter->value }}</h1>

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <a href="/increment">Increment</a>
    <a href="/decrement">Decrement</a>
</body>
</html>
