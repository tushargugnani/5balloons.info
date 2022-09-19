<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon-16x16.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website" />
    @include('feed::links')

    @yield('headtags')

    <title>@yield('title')</title>

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/prism-5balloons.css') }}">
    <script src="{{ asset('js/prism-5balloons.js') }}"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <style>
        [x-cloak] {
            display: none !important;
        }

        pre[class*=language-] {
            border-radius: 10px;
            margin: 15px 0px;
            background-color: #383838;
            font-size: 15px;
        }

        .copy-to-clipboard-button {
            position: absolute;
            top: 0.65rem;
            right: 0.65rem;
            z-index: 10;
            display: block;
            padding: 0.25rem 0.5rem !important;
            font-size: .65em !important;
            color: #0d6efd !important;
            background-color: #fff !important;
            border: 1px solid !important;
            border-radius: 0.25rem !important;
        }
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Roboto+Slab:wght@400;500;600&display=swap"
        rel="stylesheet">
</head>

<body class="bg-amber-50 h-full">

    @include('partials.nav')

    <div class="container max-w-screen-lg mx-auto px-5 md:px-10 mt-8 min-h-screen relative">
        <div class="my-3">
            @yield('content')
        </div>
    </div>

    @include('partials.footer')
</body>

</html>
