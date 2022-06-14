@props([
    'category' => null,
    'categories' => null
])

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.2/dist/alpine.min.js" defer></script>
    <title>UBT blog</title>
</head>
<body class="m-8 bg-gray-100">
<div id="page" class="site-page">
    <x-header :categories="$categories" :category="$category" />
    <div id="content" class="site-content">
        {{ $slot }}
    </div>
</div>
</body>
</html>
