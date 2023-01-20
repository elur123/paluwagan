<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Paluwagan - @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap1.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/vendors/themefy_icon/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/font_awesome/css/all.min.css') }}" />


    <link rel="stylesheet" href="{{ asset('assets/vendors/scroll/scrollable.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/css/metisMenu.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style1.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/colors/default.css') }}" id="colorSkinCSS">
</head>

<body class="crm_body_bg">


    <section class="dashboard_part" style="height: 100vh">

        @yield('content')

    </section>


    <script src="{{ asset('assets/js/jquery1-3.4.1.min.js') }}"></script>

    <script src="{{ asset('assets/css/colors/default.css') }}"></script>

    <script src="{{ asset('assets/js/bootstrap1.min.js') }}"></script>

    <script src="{{ asset('assets/js/metisMenu.js') }}"></script>

    <script src="{{ asset('assets/vendors/scroll/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/scroll/scrollable-custom.js') }}"></script>

    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>
</html>
