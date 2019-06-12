@extends('layouts.app')

@section('page-inner')
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
                <!-- .has-badge -->
                <div class="has-badge has-badge-bottom">
                    <a href="#" class="user-avatar user-avatar-xl"><img src="/assets/images/dummy/img-5.jpg" alt=""></a>
                    <span class="tile tile-circle tile-xs" data-toggle="tooltip" title=""
                        data-original-title="Public"><i class="fas fa-globe"></i></span>
                </div><!-- /.has-badge -->
            </div><!-- /grid column -->
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
                <a class="nav-link active" href="page-team.html">Overview</a>
                <a class="nav-link" href="page-team.html">Map</a>
            </div><!-- /.nav -->
        </div><!-- /.nav-scroller -->
    </header><!-- /.page-title-bar -->
    <!-- .page-section -->
    <div class="page-section">
        <!-- .section-block -->
        <div class="section-block">
            <!-- .metric-row -->

        </div><!-- /.section-block -->
        <!-- .section-block -->
    </div><!-- /.page-section -->
</div>
@endsection
