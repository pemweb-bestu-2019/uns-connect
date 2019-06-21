@extends('layouts.app')

@section('page-inner')
<header class="page-navs shadow-sm pr-3">
    <!-- btn-account -->
    <a href="{{ route('organizations.show') }}" class="btn-account">
      <div class="user-avatar mr-2">
        <img src="/assets/images/avatars/team4.jpg" alt="">
      </div>
      <div class="account-summary">
        <h1 class="card-title"> Creative Division </h1>
        <h6 class="card-subtitle text-muted"> 53 days left · Last update 1h </h6>
      </div>
    </a> <!-- /btn-account -->
    <!-- right actions -->
    <div class="ml-auto">
      <!-- invite members -->
      <div class="dropdown d-inline-block">
        <button type="button" class="btn btn-light btn-icon" title="Invite members" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-plus"></i></button>
        <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-rich stop-propagation">
          <div class="dropdown-header"> Add members </div>
          <div class="form-group px-3 py-2 m-0">
            <input type="text" class="form-control" placeholder="e.g. @bent10" data-toggle="tribute" data-remote="assets/data/tribute.json" data-menu-container="#people-list" data-item-template="true" data-autofocus="true"> <small class="form-text text-muted">Search people by username or email address to invite them.</small>
          </div>
          <div id="people-list" class="tribute-inline stop-propagation"></div><a href="#" class="dropdown-footer">Invite member by link <i class="far fa-clone"></i></a>
        </div><!-- /.dropdown-menu -->
      </div><!-- /invite members -->
      <button type="button" class="btn btn-light btn-icon" data-toggle="sidebar"><i class="fa fa-angle-double-left"></i></button>
    </div><!-- /right actions -->
  </header>
<div class="page-inner">
    <!-- .page-title-bar -->
    <header class="page-title-bar">
        <!-- .d-flex -->
        <div class="d-flex justify-content-between align-items-center">
            <!-- .breadcrumb -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        <a href="{{ route('events.index') }}"><i
                                class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
                    </li>
                </ol>
            </nav><!-- /.breadcrumb -->
            <button type="button" class="btn btn-light btn-icon d-xl-none" data-toggle="sidebar"><i
                    class="fa fa-angle-double-left"></i></button>
        </div><!-- /.d-flex -->
        <!-- grid row -->
        <div class="row text-center text-sm-left">
            <!-- grid column -->
            <div class="col-sm-auto col-12 mb-2">
                <span class="tile tile-xl bg-pink">SP</span>
              </div>
            <!-- grid column -->
            <div class="col">
                <h1 class="page-title"> Creative Division </h1>
                <p class="text-muted"> We make stunning and cool responsive web and app design which suitable for any
                    project purpose for your business. </p>
            </div><!-- /grid column -->
        </div><!-- /grid row -->
        <!-- .nav-scroller -->
        <div class="nav-scroller border-bottom">
            <!-- .nav -->
            <div class="nav nav-tabs">
                <a class="nav-link" href="{{ route('events.show') }}">Overview</a>
                <a class="nav-link" href="page-team.html">Map</a>
                <a class="nav-link active" href="#">Registration</a>
            </div><!-- /.nav -->
        </div><!-- /.nav-scroller -->
    </header><!-- /.page-title-bar -->
    <!-- .page-section -->
    <div class="page-section">
        <!-- .section-block -->
        <div class="section-block">
            <!-- .metric-row -->
            <p><strong>Google I/O</strong> adalah konferensi pengembang perangkat lunak tahunan yang diselenggarakan oleh Google di San Francisco, California. Google I/O menyediakan sesi mendalam teknik tinggi, difokuskan untuk membangun situs web, mobile, dan aplikasi yang digunakan untuk perusahaan dan teknologi web terbuka seperti Android, Google Chrome, Chrome OS, Google API, Google Web Toolkit, App Engine, dan lain-lain.</p>
            <p>Google I/O dimulai pada tahun 2008. "I" dan "O" yang ada di Google I/O adalah input/output, dan "Innovation in the Open". Format dari acara tersebut mirip seperti dalam acara Google Developer Day</p>
            <p>Google mengumumkan beberapa produk, di antaranya:
                <ul>
                    <li>Android Wear</li>
                    <li>Android Auto</li>
                    <li>Android TV</li>
                    <li>Android One</li>
                    <li>Aplikasi mobile Google Slides untuk Android</li>
                </ul>
            </p>
            <p>Google Cardboard, sebuah kardus yang dilipat untuk dudukan telepon pintar yang apabila digabungkan dengan lensa, magnet, perekat yang biasa digunakan pada sepatu, karet gelang dan dipakai di wajah, memberikan pengalaman virtual reality kepada pengguna.</p>
        </div><!-- /.section-block -->
        <!-- .section-block -->
    </div><!-- /.page-section -->
</div>
@endsection
