<header class="page-title-bar">
    <!-- .d-flex -->
    <div class="d-flex justify-content-between align-items-center">
        <!-- .breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">
                    <a href="{{ route('events.index') }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
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
                    <span class="list-icon"><span class="fa fa-map-marker text-muted"></span></span>
                    {{ $event->organization->address }}
                </li>
            </ul>
        </div><!-- /grid column -->
    </div><!-- /grid row -->
    <!-- .nav-scroller -->
    <div class="nav-scroller border-bottom">
        <!-- .nav -->
        <div class="nav nav-tabs">
            <a class="nav-link {{ nav_set_active('events.show') }}" href="{{ route('events.show', $event->slug) }}">Overview</a>
            <a class="nav-link {{ nav_set_active('events.map') }}" href="{{ route('events.map', $event->slug) }}">Map</a>
            <a class="nav-link {{ nav_set_active('events.registration') }}" href="{{ route('events.registration', $event->slug) }}">Registration</a>
        </div><!-- /.nav -->
    </div><!-- /.nav-scroller -->
</header><!-- /.page-title-bar -->
