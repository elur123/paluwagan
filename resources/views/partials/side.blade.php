<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="" href="{{ route('dashboard') }}" aria-expanded="false">

                <div class="icon_menu">
                    <img src="{{ asset('assets/img/menu-icon/dashboard.svg') }}" alt="">
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="">
            <a class="" href="{{ route('dashboard') }}" aria-expanded="false">

                <div class="icon_menu">
                    <img src="{{ asset('assets/img/menu-icon/dashboard.svg') }}" alt="">
                </div>
                <span>Paluwagan</span>
            </a>
        </li>
        <li class="">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/img/menu-icon/2.svg') }}" alt="">
                </div>
                <span>Borrow</span>
            </a>
            <ul>
                <li><a href="calender.html">List</a></li>
                <li><a href="editor.html">History</a></li>
            </ul>
        </li>
        <li class="">
            <a class="" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/img/menu-icon/2.svg') }}" alt="">
                </div>
                <span>Users</span>
            </a>
        </li>
    </ul>
</nav>