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
    <meta name='ir-site-verification-token' value='1892223819'>
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
        <script src="{{ asset('vendor/smart-ads/js/smart-banner.js') }}"></script>

<!-- Fathom - beautiful, simple website analytics -->
<script src="https://cdn.usefathom.com/script.js" data-site="YJAMKRFF" defer></script>
<!-- / Fathom -->
</head>

<body class="bg-amber-50 h-full">

    @include('partials.nav')

    <div class="container max-w-screen-lg mx-auto px-5 md:px-10 mt-8 min-h-screen relative">
        <div class="my-3">
            @yield('content')
        </div>
    </div>

    @include('partials.footer')
    <script>
  (function(){
    if(typeof _bsa !== 'undefined' && _bsa) {
      _bsa.init('flexbar', 'CEAIP5QJ', 'placement:5balloonsinfo');
    }
  })();
</script>
<div x-data="{
        showWidget : '',
        shouldShowWidget(){
            if (localStorage.getItem('hideDivUntil') > Date.now()) {
                this.showWidget = false;
            }else{
                this.showWidget = true;
            }
        },
        closeWidget(){
            this.showWidget = false;
            const now = Date.now();
            const oneHourFromNow = now + (60 * 60 * 1000);
            localStorage.setItem('hideDivUntil', oneHourFromNow);
        }
    }" x-transition:leave.duration.400ms>
    <div x-init="shouldShowWidget" id="flamelab-convo-widget" x-show="showWidget">
                 <img src="https://flamelab.io/img/avatar-sm.png" alt="Avatar Image">
                 <div class="flamelab-cw-msg-box">
                     <span>Hey! Are you looking for reusable livewire components?</span>
                     <div class="flamelab-cw-buttons">
                         <a @click="closeWidget" href="https://livewiredemos.com/?ref=5balloons.info" target="_blank" class="flamelab-cw-button flamelab-cw-button-yes">Yes!</a>
                         <div @click="closeWidget" class="flamelab-cw-button flamelab-cw-button-no">No thanks</div>
                     </div>
                 </div>
             </div>
             <style>
                 #flamelab-convo-widget {
                     position: fixed;
                     bottom: 150px;
                     left: -40px;
                     animation-name: flamelab-convo-widget_enter;
                     animation-duration: 1.5s;
                     display: flex;
                     justify-content: flex-start;
                     align-items: center;
                     z-index: 1000;
                     color: black;
                 }
                 #flamelab-convo-widget img {
                     animation-name: flamelab-convo-widget_rotate;
                     animation-duration: 1.5s;
                     transform: rotate(20deg);
                 }
                 .flamelab-cw-msg-box {
                     background: white;
                     width: 280px;
                     border-radius: 20px;
                     box-shadow: 0 0 20px rgba(0, 0, 0, .25);
                     border: 1px solid rgba(0, 0, 0, 0.1);
                     padding: 20px;
                     animation-name: flamelab-convo-widget_msg-appear;
                     animation-duration: 2s;
                     font-size: 15px;
                     line-height: 23px;
                 }
                 .flamelab-cw-buttons {
                     display: flex;
                     justify-content: flex-start;
                     align-items: center;
                     margin: 0 -4px;
                     margin-top: 8px;
                     font-weight: 600;
                 }
                 .flamelab-cw-button {
                     cursor: pointer;
                     padding: 4px;
                     margin-right: 12px;
                     display: block;
                     text-decoration: none;
                 }
                 .flamelab-cw-button-yes {
                     color: #FF1B96;
                     font-weight: 700;
                 }
                 @keyframes flamelab-convo-widget_enter {
                     from { left: -200px; }
                     to { left: -40px; }
                 }
                 @keyframes flamelab-convo-widget_rotate {
                     from { transform: rotate(0deg); }
                     to { transform: rotate(20deg); }
                 }
                 @keyframes flamelab-convo-widget_msg-appear {
                     from { opacity: 0; }
                     to { opacity: 1; }
                 }
             </style>
</div>
</body>

</html>
