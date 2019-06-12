<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- End Required meta tags -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Begin SEO tag -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fav Icons -->
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/apple-touch-icon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}">
    <meta name="theme-color" content="#1ba0e2">

    <!-- Google Font -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">

    <!-- Plugin Styles -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fontawesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/flatpickr.min.css') }}">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.min.css') }}" data-skin="default">
    {{-- <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-dark.min.css') }}" data-skin="dark"> --}}
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/custom.css') }}"><!-- Disable unused skin immediately -->

    <style>
        .nav-link>.fa,
        .fas,
        .far,
        .fal,
        .fab {
            margin-right: 5px;
        }

        .app-header {
            border-top: 4px solid #1ba0e2;
        }

        .pace .pace-progress {
            background: #f6f7f9;
        }
    </style>
</head>

<body>
    <!-- .app -->
    <div class="app has-fullwidth">
        <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
        <!-- .app-header -->
        <header class="app-header app-header-light">
            <!-- .top-bar -->
            <div class="top-bar">
                <!-- .top-bar-brand -->
                <div class="top-bar-brand bg-transparent">
                    <a href="index.html"><svg width="135" height="32" viewBox="0 0 135 43" class="_1bmwm" fill="none"
                            stroke="currentColor" stroke-linecap="round" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Train_Booking" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Train_Booking-Form_Login-Success" transform="translate(-174.000000, -10.000000)">
                                    <g id="Logo-/-Normal-Text-Copy-2" transform="translate(174.000000, 10.000000)">
                                        <g id="Icon-Blue-Copy" transform="translate(106.348506, 0.000000)">
                                            <path
                                                d="M15.8750688,7.50608477 C21.1573073,4.14730475 27.7886168,3.50239999 27.7886168,3.50239999 C27.7886168,3.50239999 20.7528955,11.4997096 19.0326867,15.1945655 C18.5015045,16.8063672 19.6135162,18.1175255 19.6135162,18.1175255 C19.6135162,18.1175255 16.5318653,14.6660391 15.8750688,7.50608477 Z"
                                                id="Path-7" fill="#1BA0E2"></path>
                                            <path
                                                d="M18.162138,6.24397491 C17.3878953,6.61481372 16.6181339,7.03359719 15.8750688,7.50608477 C16.2091491,11.1480034 17.1706021,13.8304452 18.0347649,15.5872293 C18.4974096,16.4047306 18.9374198,17.0887931 19.2687154,17.5775849 C19.1008028,17.2517084 18.9278703,16.7972915 18.8946484,16.2674161 C18.4465048,14.5531906 18.0359014,11.5237307 18.162138,6.24397491 Z"
                                                id="Path-7-Copy" fill="#0D7FCC"></path>
                                            <path
                                                d="M11.1392242,10.6306432 C11.1392242,10.6306432 10.7916211,9.40930137 10.6718684,9.05703715 C10.3493019,8.10817672 10.0190832,7.14347468 10.0190831,5.49697918 C10.0190831,3.2392226 13.8646282,0.830360977 16.2083894,0.0738834971 C15.5726728,8.29080802 16.4960847,10.8058271 17.3467186,13.537055 C19.3596742,20.2576903 23.9571046,21.2294722 24.4111443,21.6850544 C23.2389565,21.4317473 23.9079977,21.9785645 23.9079977,21.9785645 C23.9079977,21.9785645 22.0366239,20.676552 18.2686172,19.6106221 C14.5006105,18.5446922 11.5607948,18.381561 9.76233612,17.3600837 C8.37731138,16.3196574 8.33271646,15.4721062 7.67451502,14.9032056 C5.51226604,13.0343176 0.0684652899,12.2483736 0.0684652899,12.2483736 L4.75199664,13.0114999 C4.75199664,13.0114999 5.39587343,13.0114997 6.15578398,12.7385777 C6.31936247,12.7171833 6.84077993,12.1226001 7.97022445,12.498467 C8.43508849,12.6515676 8.30440909,12.8180273 9.63493268,13.1922403 C11.3211407,13.6664904 11.1392242,10.6306432 11.1392242,10.6306432 Z"
                                                id="Path-6" fill="#1BA0E2"></path>
                                        </g>
                                        <path
                                            d="M1.87385717,24.8120388 C1.87385717,29.6167116 5.53639618,30.1853119 7.38186157,30.1853119 C7.94969708,30.1853119 8.34718193,30.1284519 8.34718193,30.1284519 L8.34718193,27.6834705 C8.34718193,27.6834705 8.09165595,27.7403305 7.6941711,27.7403305 C6.64367541,27.7403305 4.62785937,27.3707403 4.62785937,24.4993086 L4.62785937,18.1025548 L8.09165595,18.1025548 L8.09165595,15.8850135 L4.62785937,15.8850135 L4.62785937,11.734231 L1.95903249,11.734231 L1.95903249,15.8850135 L0,15.8850135 L0,18.1025548 L1.87385717,18.1025548 L1.87385717,24.8120388 Z M10.8843731,30.0715919 L13.6383753,30.0715919 L13.6383753,24.1865784 C13.6383753,23.3052479 13.7235506,22.4239173 13.9790766,21.5994469 C14.6320874,19.4671956 16.2504186,18.2162749 18.0107087,18.2162749 C18.4365853,18.2162749 18.8056784,18.3015649 18.8056784,18.3015649 L18.8056784,15.5722833 C18.8056784,15.5722833 18.4649771,15.5154233 18.095884,15.5154233 C15.8813255,15.5154233 14.2062108,17.1643642 13.5532,19.2681855 L13.4964164,19.2681855 C13.4964164,19.2681855 13.5532,18.7848752 13.5532,18.1878448 L13.5532,15.6860034 L10.8843731,15.6860034 L10.8843731,30.0715919 Z M19.7300691,26.0345295 C19.7300691,28.9059612 22.14337,30.4127521 24.6134544,30.4127521 C28.0488592,30.4127521 29.212922,27.5697504 29.212922,27.5697504 L29.2697056,27.5697504 C29.2697056,27.5697504 29.212922,28.0530607 29.212922,28.7069511 L29.212922,30.0715919 L31.7681818,30.0715919 L31.7681818,20.9739865 C31.7681818,17.3349443 29.723974,15.3448432 26.0898267,15.3448432 C22.7963808,15.3448432 20.7237812,17.0506442 20.7237812,17.0506442 L21.8594522,19.0691754 C21.8594522,19.0691754 23.6481341,17.6761045 25.8626925,17.6761045 C27.6797662,17.6761045 29.0141796,18.472145 29.0141796,20.8318364 L29.0141796,21.0877066 L28.3895605,21.0877066 C25.9762596,21.0877066 19.7300691,21.2867167 19.7300691,26.0345295 L19.7300691,26.0345295 Z M22.5124631,25.8923794 C22.5124631,23.3052479 26.2601774,23.1630978 28.332777,23.1630978 L29.0425714,23.1630978 L29.0425714,23.6179781 C29.0425714,25.7502293 27.5378073,28.1952108 25.2096817,28.1952108 C23.4209999,28.1952108 22.5124631,27.0580101 22.5124631,25.8923794 L22.5124631,25.8923794 Z M38.7344899,30.0715919 L41.9143687,30.0715919 L47.2236307,15.6860034 L44.3276696,15.6860034 L40.8354813,25.4090691 C40.5515635,26.2051096 40.3528211,27.3707403 40.3244293,27.3707403 L40.2676458,27.3707403 C40.239254,27.3707403 40.0689034,26.2051096 39.7849856,25.4090691 L36.2927972,15.6860034 L33.3684444,15.6860034 L38.7344899,30.0715919 Z M47.949279,22.8787976 C47.949279,27.1433001 51.0439825,30.4127521 55.5582748,30.4127521 C58.9936796,30.4127521 61.1230627,28.3657909 61.1230627,28.3657909 L59.9873917,26.3472597 C59.9873917,26.3472597 58.1987099,28.0246307 55.7286254,28.0246307 C53.1733656,28.0246307 50.9304154,26.4325497 50.7884565,23.2768179 L61.2650216,23.2768179 C61.2650216,23.2768179 61.3501969,22.4523474 61.3501969,22.0827571 C61.3501969,18.3584249 59.192422,15.3448432 55.1323981,15.3448432 C51.0439825,15.3448432 47.949279,18.3015649 47.949279,22.8787976 L47.949279,22.8787976 Z M50.8736318,21.2014266 C51.2711167,18.8417352 52.9746232,17.5339545 55.0756146,17.5339545 C56.92108,17.5339545 58.4542358,18.7280152 58.5394112,21.2014266 L50.8736318,21.2014266 Z M63.8929188,26.1482496 C63.8929188,29.7588617 66.1926526,30.1853119 67.7542002,30.1853119 C68.2368604,30.1853119 68.662737,30.1284519 68.662737,30.1284519 L68.662737,27.6834705 C68.662737,27.6834705 68.4356028,27.7119005 68.1800769,27.7119005 C67.3283236,27.7119005 66.646921,27.3991703 66.646921,25.6649393 L66.646921,10 L63.8929188,10 L63.8929188,26.1482496 Z M69.8994372,22.8503676 C69.8994372,27.2285902 73.3632338,30.4127521 77.6503919,30.4127521 C81.93755,30.4127521 85.4013465,27.2285902 85.4013465,22.8503676 C85.4013465,18.500575 81.93755,15.3448432 77.6503919,15.3448432 C73.3632338,15.3448432 69.8994372,18.500575 69.8994372,22.8503676 L69.8994372,22.8503676 Z M72.710223,22.8503676 C72.710223,19.8652158 74.9531732,17.7329646 77.6503919,17.7329646 C80.3760023,17.7329646 82.5905608,19.8652158 82.5905608,22.8503676 C82.5905608,25.8639494 80.3760023,28.0246307 77.6503919,28.0246307 C74.9531732,28.0246307 72.710223,25.8639494 72.710223,22.8503676 L72.710223,22.8503676 Z M88.1088884,30.0715919 L90.8628906,30.0715919 L90.8628906,23.3052479 L92.9354902,23.3052479 L97.25104,30.0715919 L100.459311,30.0715919 L95.1500486,22.0827571 L95.1500486,22.0258971 L99.9198669,15.6860034 L96.7967716,15.6860034 L92.8787066,20.9739865 L90.8628906,20.9739865 L90.8628906,10 L88.1088884,10 L88.1088884,30.0715919 Z M101.241742,26.0345295 C101.241742,28.9059612 103.655043,30.4127521 106.125128,30.4127521 C109.560533,30.4127521 110.724595,27.5697504 110.724595,27.5697504 L110.781379,27.5697504 C110.781379,27.5697504 110.724595,28.0530607 110.724595,28.7069511 L110.724595,30.0715919 L113.279855,30.0715919 L113.279855,20.9739865 C113.279855,17.3349443 111.235647,15.3448432 107.6015,15.3448432 C104.308054,15.3448432 102.235455,17.0506442 102.235455,17.0506442 L103.371126,19.0691754 C103.371126,19.0691754 105.159807,17.6761045 107.374366,17.6761045 C109.191439,17.6761045 110.525853,18.472145 110.525853,20.8318364 L110.525853,21.0877066 L109.901234,21.0877066 C107.487933,21.0877066 101.241742,21.2867167 101.241742,26.0345295 L101.241742,26.0345295 Z M104.024136,25.8923794 C104.024136,23.3052479 107.771851,23.1630978 109.84445,23.1630978 L110.554245,23.1630978 L110.554245,23.6179781 C110.554245,25.7502293 109.049481,28.1952108 106.721355,28.1952108 C104.932673,28.1952108 104.024136,27.0580101 104.024136,25.8923794 L104.024136,25.8923794 Z"
                                            id="traveloka" fill="#434343"></path>
                                    </g>
                                </g>
                            </g>
                        </svg></a>
                </div><!-- /.top-bar-brand -->
                <!-- .top-bar-list -->
                @auth
                <div class="top-bar-list">
                    <!-- .top-bar-item -->
                    <div class="top-bar-item top-bar-item-right px-0">
                        <!-- .nav -->
                        <ul class="header-nav nav">
                            <!-- .nav-item -->
                            <li class="nav-item dropdown header-nav-dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="oi oi-grid-three-up"></span></a>
                                <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                                <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                    <!-- .dropdown-sheets -->
                                    <div class="dropdown-sheets">
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-indigo"><i
                                                        class="oi oi-people"></i></span> <span
                                                    class="tile-peek">Teams</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-teal"><i
                                                        class="oi oi-fork"></i></span> <span
                                                    class="tile-peek">Projects</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-pink"><i
                                                        class="fa fa-tasks"></i></span> <span
                                                    class="tile-peek">Tasks</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-yellow"><i
                                                        class="oi oi-fire"></i></span> <span
                                                    class="tile-peek">Feeds</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                        <!-- .dropdown-sheet-item -->
                                        <div class="dropdown-sheet-item">
                                            <a href="#" class="tile-wrapper"><span class="tile tile-lg bg-cyan"><i
                                                        class="oi oi-document"></i></span> <span
                                                    class="tile-peek">Files</span></a>
                                        </div><!-- /.dropdown-sheet-item -->
                                    </div><!-- .dropdown-sheets -->
                                </div><!-- .dropdown-menu -->
                            </li><!-- /.nav-item -->
                        </ul><!-- /.nav -->
                        <!-- .btn-account -->
                        <div class="dropdown d-none d-sm-flex">
                            <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><span class="user-avatar user-avatar-md"><img
                                        src="assets/images/avatars/profile.jpg" alt=""></span> <span
                                    class="account-summary pr-md-4 d-none d-md-block"><span class="account-name">Galih
                                        Akbar Moerbayaksa</span> <span class="account-description">Marketing
                                        Manager</span></span></button>
                            <div class="dropdown-arrow dropdown-arrow-left"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu">
                                <h6 class="dropdown-header d-none d-sm-block d-md-none"> Galih Akbar </h6><a
                                    class="dropdown-item" href="user-profile.html"><span
                                        class="dropdown-icon oi oi-person"></span> Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><span
                                        class="dropdown-icon oi oi-account-logout"></span>
                                    {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a
                                    class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item"
                                    href="#">Keyboard Shortcuts</a>
                            </div><!-- /.dropdown-menu -->
                        </div><!-- /.btn-account -->
                    </div><!-- /.top-bar-item -->
                </div><!-- /.top-bar-list -->
                @endauth
            </div><!-- /.top-bar -->
        </header><!-- /.app-header -->
        <!-- .app-main -->
        <main class="app-main">
            <!-- .wrapper -->
            <div class="wrapper">
                <!-- .page -->
                <div class="page">
                    <!-- .page-navs -->
                    <nav class="page-navs">
                        <!-- .nav-scroller -->
                        <div class="nav-scroller">
                            <!-- .nav -->
                            <div class="nav nav-tabs">
                                <a class="nav-link {{ nav_set_active('events.index') }}"
                                    href="{{ route('events.index') }}"><i class="far fa-calendar"></i> Event Search</a>
                                <a class="nav-link {{ nav_set_active('organizations.index') }}"
                                    href="{{ route('organizations.index') }}"><i class="far fa-building"></i>
                                    Organizations <span class="badge">16</span></a> <a class="nav-link {{ nav_set_active('calender.index') }}" href="{{ route('calender.index') }}"><i
                                        class="far fa-calendar"></i> Events Calender</a>
                                @guest
                                <a class="nav-link {{ nav_set_active(['login', 'register', 'password.request']) }}"
                                    href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login / Register </a>
                                @endguest
                            </div><!-- /.nav -->
                        </div><!-- /.nav-scroller -->
                    </nav><!-- /.page-navs -->
                    <!-- .page-inner -->
                    @yield('page-inner')
                </div><!-- /.page -->
            </div><!-- /.wrapper -->
        </main><!-- /.app-main -->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="{{ asset('assets/vendor/pace/pace.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/stacked-menu/stacked-menu.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="{{ asset('assets/javascript/theme.min.js') }}"></script> <!-- END THEME JS -->
</body>

</html>
