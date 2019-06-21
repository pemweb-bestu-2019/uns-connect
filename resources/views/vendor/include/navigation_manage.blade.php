<div class="col-lg-4">
    <!-- .card -->
    <div class="card card-fluid">
      <h6 class="card-header"> Manage Organizations </h6><!-- .nav -->
      <nav class="nav nav-tabs flex-column border-0">
        <a href="{{ route('manage.index') }}" class="nav-link {{ nav_set_active('manage.index') }}">Organization List</a>
        <a href="{{ route('manage.create') }}" class="nav-link {{ nav_set_active('manage.create') }}"><i class="fas fa-plus"></i> Create New</a>
      </nav><!-- /.nav -->
    </div><!-- /.card -->
  </div><!-- /grid column -->
