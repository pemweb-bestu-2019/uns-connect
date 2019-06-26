<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
            <a class="nav-link {{ nav_set_active('admin.index') }}" href="{{ route('admin.index') }}"><i class="fas fa-ticket-alt"></i> Website
                Preference</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ nav_set_active(['admin.division', 'admin.division.create', 'admin.division.edit']) }}" href="{{ route('admin.division') }}"><i class="fab fa-trello"></i> Divisions</a>
        </li>
    </ul>
</div><!-- /.card-header -->
