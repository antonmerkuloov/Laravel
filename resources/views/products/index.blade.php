<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Товары</title>
</head>
<body>
    <header>
        <h1>Каталог Товаров</h1>
    </header>
    <main>
        <a href="{{ route('products.create') }}">Создание товарв</a>
        <div class="container">
            @foreach ($products as $product)
                <div class="card">
                    <h2><a href="{{route('products.show', $product-> id) }}">{{ $product-> name }}</a></h2>
                    <p><b>{{ $product -> description }}</b></p>
                    <p><i>{{ $product -> price }}</i></p>
                    <form action="{{ route('products.destroy', $product-> id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Удалить">
                    </form>
                    <a href="{{ route('product.edit', $product->id) }}">Изменить</a>
                    <hr>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>