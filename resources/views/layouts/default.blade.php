@php
$nav_links = [
    [
        "text"=> "Home",
        "route_name"=> "home.index"
    ],
    [
        "text"=> "Prodotti",
        "route_name"=> "products.index"
    ],
    [
        "text"=> "News",
        "route_name"=> "news.index"
    ]
];
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrizione del mio sito">
    <title>@yield('page_title')</title>

    @yield("extra_scripts")

    @include("partials.header_scripts")
</head>

<body>
    @include("partials.the_header", compact("nav_links"))

    <main class="main">
        @yield('content')
    </main>

    @include("partials.the_footer", compact("nav_links"))
</body>

</html>