<!DOCTYPE html>
<html>
<head>

    @include('partials.head');
</head>

<body class="crm_body_bg">

    @include('partials.side');

    <section class="main_content dashboard_part large_header_bg">

        @include('partials.nav')

        @yield('content')

        @include('partials.footer')
    </section>

    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    @include('partials.scripts');
</body>
</html>
