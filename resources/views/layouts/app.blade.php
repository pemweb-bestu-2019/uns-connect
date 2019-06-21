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

    @stack('styles')

    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme.min.css') }}" data-skin="default">
    {{-- <link rel="stylesheet" href="{{ asset('assets/stylesheets/theme-dark.min.css') }}" data-skin="dark"> --}}
    <link rel="stylesheet" href="{{ asset('assets/stylesheets/custom.css') }}"><!-- Disable unused skin immediately -->

    <style>
        .nav-link > .fa,
        .nav-link > .fas,
        .nav-link > .far,
        .nav-link > .fal,
        .nav-link > .fab {
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
                        @if (Auth::user()->isAdmin())
                        <ul class="header-nav nav">
                            <!-- .nav-item -->
                            <li class="nav-item dropdown header-nav-dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false"><span class="fas fa-user-shield"></span></a>
                                <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                                <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                                    <!-- .dropdown-sheets -->
                                    <div class="dropdown-sheets">
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
                        @endif
                        <!-- .btn-account -->
                        <div class="dropdown d-none d-sm-flex">
                            <button class="btn-account" type="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false"><span class="user-avatar user-avatar-md"><img
                                        src="data:image/jpeg;base64,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" alt=""></span> <span
                                class="account-summary pr-md-4 d-none d-md-block"><span class="account-name">{{ Auth::user()->member->name ?? 'Anonim' }}</span> <span class="account-description">Personal Member</span></span></button>
                            <div class="dropdown-arrow dropdown-arrow-left"></div><!-- .dropdown-menu -->
                            <div class="dropdown-menu">
                                <h6 class="dropdown-header d-none d-sm-block d-md-none"> {{ Auth::user()->member->name ?? 'Anonim' }} </h6><a
                                    class="dropdown-item" href="/me"><span
                                        class="dropdown-icon oi oi-person"></span> Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><span
                                        class="dropdown-icon oi oi-account-logout"></span>
                                    {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
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
                                <a class="nav-link {{ nav_set_active(['events.index', 'events.show']) }}"
                                    href="{{ route('events.index') }}"><i class="far fa-calendar"></i> Event Search</a>
                                <a class="nav-link {{ nav_set_active(['organizations.index', 'organizations.show']) }}"
                                    href="{{ route('organizations.index') }}"><i class="far fa-building"></i>
                                    Organizations <span class="badge">16</span></a>
                                <a
                                    class="nav-link {{ nav_set_active('calender.index') }}"
                                    href="{{ route('calender.index') }}"><i class="far fa-calendar-alt"></i> Events
                                    Calender</a>
                                @guest
                                <a class="nav-link {{ nav_set_active(['login', 'register', 'password.request']) }}"
                                    href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Login / Register </a>
                                @else
                                <a
                                    class="nav-link {{ nav_set_active(['manage.index', 'manage.create']) }}"
                                    href="{{ route('manage.index') }}"><i class="fas fa-user-astronaut"></i> You Organizations </a>
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
    <script src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script>
    @stack('scripts')
    <!-- BEGIN THEME JS -->
    <script src="{{ asset('assets/javascript/theme.min.js') }}"></script> <!-- END THEME JS -->
</body>

</html>
