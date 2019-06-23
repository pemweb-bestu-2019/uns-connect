@extends('layouts.app')

@section('page-inner')
<header class="page-navs shadow-sm pr-3">
    <!-- btn-account -->
    <a href="{{ route('organizations.show', $event->organization->id_organization) }}" class="btn-account">
        <div class="mr-2">
            <div class="tile tile-circle tile-md bg-blue"> {{ substr($event->organization->name, 0, 1) }}
            </div>
        </div>
        <div class="account-summary">
            <h1 class="card-title"> {{ $event->organization->name }} </h1>
            <h6 class="card-subtitle text-muted"> <strong>{{ $event->organization->name_short }}</strong> · Last update
                {{ $event->organization->updated_at->diffForHumans() }} </h6>
        </div>
    </a> <!-- /btn-account -->
    <!-- right actions -->
    <div class="ml-auto">
        <!-- invite members -->
        <div class="dropdown d-inline-block">
            <button type="button" class="btn btn-light btn-icon" title="Invite members" data-toggle="dropdown"
                data-display="static" aria-haspopup="true" aria-expanded="false"><i
                    class="fas fa-user-plus"></i></button>
            <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-rich stop-propagation">
                <div class="dropdown-header"> Add members </div>
                <div class="form-group px-3 py-2 m-0">
                    <input type="text" class="form-control" placeholder="e.g. @bent10" data-toggle="tribute"
                        data-remote="assets/data/tribute.json" data-menu-container="#people-list"
                        data-item-template="true" data-autofocus="true"> <small class="form-text text-muted">Search
                        people by username or email address to invite them.</small>
                </div>
                <div id="people-list" class="tribute-inline stop-propagation"></div><a href="#"
                    class="dropdown-footer">Invite member by link <i class="far fa-clone"></i></a>
            </div><!-- /.dropdown-menu -->
        </div><!-- /invite members -->
        <button type="button" class="btn btn-light btn-icon" data-toggle="sidebar"><i
                class="fa fa-angle-double-left"></i></button>
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
                <span class="tile tile-xl bg-blue">{{ substr($event->name, 0, 2) }}</span>
            </div>
            <!-- grid column -->
            <div class="col">
                <h1 class="page-title"> {{ $event->name }} </h1>
                <ul class="list-icons mb-3">
                    <li>
                        <span class="list-icon"><span class="fa fa-map-marker text-muted"></span></span> {{ $event->organization->address }}
                    </li>
                </ul>
            </div><!-- /grid column -->
        </div><!-- /grid row -->
        <!-- .nav-scroller -->
        <div class="nav-scroller border-bottom">
            <!-- .nav -->
            <div class="nav nav-tabs">
                <a class="nav-link" href="#">Overview</a>
                <a class="nav-link" href="page-team.html">Map</a>
                <a class="nav-link active" href="{{ route('events.registration', $event->slug) }}">Registration</a>
            </div><!-- /.nav -->
        </div><!-- /.nav-scroller -->
    </header><!-- /.page-title-bar -->
    <!-- .page-section -->
    <div class="page-section">
        <!-- .section-block -->
        <div class="section-block">
            <!-- .metric-row -->
            {!! nl2br(e($event->description)) !!}
        </div><!-- /.section-block -->
        <!-- .section-block -->
    </div><!-- /.page-section -->
</div>
@endsection
