<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
            <a class="nav-link {{ nav_set_active('tickets.index') }}" href="{{ route('tickets.index') }}"><i class="fas fa-ticket-alt"></i> Event
                Tickets</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ nav_set_active('tickets.owned') }}" href="{{ route('tickets.owned') }}"><i class="fab fa-trello"></i> Your Events</a>
        </li>
    </ul>
</div><!-- /.card-header -->
