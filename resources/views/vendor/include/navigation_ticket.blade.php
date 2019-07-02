<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
        <li class="nav-item">
            <a class="nav-link {{ nav_set_active('tickets.index') }}" href="{{ route('tickets.index') }}"><i
                    class="fas fa-ticket-alt"></i> Event
                Tickets</a>
        </li>
        @if (auth()->user()->isOrganizationAdmin())
        <li class="nav-item">
            <a class="nav-link {{ nav_set_active(['tickets.owned', 'tickets.owned.create', 'tickets.owned.select', 'tickets.owned.edit', 'tickets.owned.report']) }}"
                href="{{ route('tickets.owned') }}"><i class="fab fa-trello"></i> Your Events</a>
        </li>
        @endif
    </ul>
</div><!-- /.card-header -->
