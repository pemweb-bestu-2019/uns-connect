<div class="col-lg-4">
    <!-- .card -->
    <div class="card card-fluid">
        <h6 class="card-header"> Manage Organizations </h6><!-- .nav -->
        <nav class="nav nav-tabs flex-column border-0">
            <a href="{{ route('orgs.index') }}" class="nav-link {{ nav_set_active('orgs.index') }}">Registered
                Organizations</a>
            <a href="{{ route('orgs.owned') }}"
                class="nav-link {{ nav_set_active(['orgs.owned', 'orgs.owned.edit', 'orgs.owned.report']) }}">Owned Organizations</a>
            <a href="{{ route('orgs.create') }}" class="nav-link {{ nav_set_active('orgs.create') }}"><i
                    class="fas fa-plus"></i> Create New</a>
        </nav><!-- /.nav -->
    </div><!-- /.card -->
</div><!-- /grid column -->
