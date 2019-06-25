<div class="d-flex justify-content-between align-items-center">
    <!-- .breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">
                <a href="{{ route('organizations.index') }}"><i
                        class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
            </li>
        </ol>
    </nav>
    <!-- /.breadcrumb -->
    <button type="button" class="btn btn-light btn-icon d-xl-none" data-toggle="sidebar"><i
            class="fa fa-angle-double-left"></i></button>
</div>
<!-- /.d-flex -->
<h1 class="page-title">
    <i class="far fa-building text-muted mr-2"></i> {{ $organization->name }} ({{ $organization->name_short }})
</h1>
<p class="text-muted"> {{ $organization->address }} </p>
<!-- .nav-scroller -->
<div class="nav-scroller border-bottom">
    <!-- .nav-tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link {{ nav_set_active('organizations.show') }}"
                href="{{ route('organizations.show', $organization->id_organization) }}">Description &amp;
                Contacts</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ nav_set_active('organizations.members') }}"
                href="{{ route('organizations.members', $organization->id_organization) }}">Members</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ nav_set_active('organizations.registration') }}"
                href="{{ route('organizations.registration', $organization->id_organization) }}">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ nav_set_active('organizations.events') }}"
                href="{{ route('organizations.events', $organization->id_organization) }}">Events</a>
        </li>
    </ul>
    <!-- /.nav-tabs -->
</div>
