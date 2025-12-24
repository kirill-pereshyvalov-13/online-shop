<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой магазин</title>
</head>
<body>
    <h1>Добро пожаловать в мой магазин1!</h1>
    <p>Это моя первая страница на Laravel!</p>
<ul>
    @foreach($items as $item)
        <li>{{ $item->name }} — {{ $item->price }} руб.</li>
    @endforeach
</ul>
</body>
</html>