<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    @yield('noindex', '')
    @yield('description', '')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/oldceeleldhonbafppcapldpdifcinji">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/glide/glide.core.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/glide/glide.theme.css') }}">
    <link href="{{ asset('vendors/dropkick/dropkick.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/tooltipster/tooltipster.bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/tooltipster/tooltipster-sideTip-shadow.min.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/fonts.css') }}" rel="stylesheet">
    <link href="{{ asset('js/lightbox2/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui/jquery-ui.structure.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui/jquery-ui.theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vex.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vex-theme-default.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}?20180429v2" rel="stylesheet">
    <link href="{{ asset('css/media.css') }}?20180419" rel="stylesheet">
    <link href="{{ asset('css/tooltip.css') }}?20180419" rel="stylesheet">

    <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
    <script>
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
    </script>

    <!-- Start Cookie Plugin -->
    <script type="text/javascript">
        window.cookieconsent_options = {
            message: 'Diese Website nutzt Cookies, um bestmögliche Funktionalität bieten zu können und für Werbung.',
            dismiss: 'Ok',
            learnMore: 'Mehr Infos / Datenschutzerklärung',
            link: 'https://languagetool.org/legal/privacy',
            theme: 'dark-bottom'
        };
    </script>
    <script type="text/javascript" src="/js/cookie-script.js"></script>
    <!-- Ende Cookie Plugin -->
    
</head>
<body>
    @yield('after_body')
    <div id="app">
        <section class="section section-main">
            @include('shared.nav')
            @yield('before_content')
        </section>
        <div id="content">
            @yield('content')
        </div>
        @yield('after_content')
    </div>
    @include('shared.footer')
    @yield('close_body')
</body>
</html>
