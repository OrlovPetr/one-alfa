<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--  ROBOTS  --}}
    <meta name="robots" content="{{ $pages->page_robots }}">

    {{--  HTML Meta  --}}
    <title>{{ $pages->page_title }}</title>
    <meta name="description" content="{{ $pages->page_desc }}">
    <meta name="keywords" content="{{ $pages->page_keywords }}">
    <meta name="url" content="{{ Request::url() }}">
    <meta name="language" content="RU">
    <meta name="og:title" content="{{ $pages->page_title }}"/>
    <meta name="og:description" content="{{ $pages->page_desc }}"/>
    <meta name="og:url" content="{{ Request::url() }}"/>
    <meta name="og:image" content="{{ asset('/img/header/main_logo_black_big.png') }}"/>
    <meta name="og:site_name" content="one-alfa.com"/>
    <meta name="og:email" content="one-alfa@bk.ru"/>
    <meta name="og:phone_number" content="+79892827737"/>
    <meta name="og:locality" content="Krasnodar"/>
    <meta name="og:country-name" content="Russia"/>
    <meta name="og:locale" content="ru_RU"/>
    <meta name="og:type" content="website"/>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,500,600,700|Play:400,700&display=swap&subset=cyrillic" rel="stylesheet">

    <link rel="icon" href="{{ asset('/favicon.png') }}" type="image/png">
    <link rel="canonical" href="{{ Request::url() }}"/>

    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/colors.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('/css') . '/' . $pages->page_style }}">

    <script src="{{ asset('/js/loader.js') }}"></script>
</head>
<body>
