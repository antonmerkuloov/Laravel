<!DOCTYPE html>
<html lang="ru">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Home') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="menu">
        <img src="{{ Vite::asset('resources/image/images_2.jpg') }}" class="logo">
        <li class="menu">
            <ul class="menu_ul"><a href="#">Главная</a></ul>
            <ul class="menu_ul"><a href="#">Массивы</a></ul>
        </li>
        </div>
    </header>
    <main>
        <img src="{{ Vite::asset('resources/image/images_1.jpg') }}" class="main_img">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum sint doloremque officiis, delectus veniam earum architecto labore accusamus maiores voluptatem. Alias, rerum. Nesciunt consectetur saepe in hic, suscipit aut cum.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus cumque assumenda dolorem quis minima illum dignissimos ipsum consectetur, architecto quaerat. Dolore vel nisi veritatis illo debitis libero repellendus recusandae dolorem.
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. At debitis sint voluptatum? Voluptatum consectetur explicabo placeat facilis, distinctio, tempora necessitatibus ipsum cupiditate, laboriosam magnam quis reiciendis quidem exercitationem deserunt perferendis.
            </p>
    </main>
    <footer>
        <li>
            <ul>©Меркулов Антон Александрович 2025г.</ul>
        </li>
        <li>
            <ul><a href="#">Главная</a></ul>
            <ul><a href="#">Массивы</a></ul>
        </li>

    </footer>
</body>
</html>