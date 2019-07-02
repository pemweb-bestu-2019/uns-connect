<header class="page-navs shadow-sm pr-3">
    <!-- btn-account -->
    <a href="{{ route('organizations.show', $organization->id_organization) }}" class="btn-account">
        <div class="mr-2">
            <div class="tile tile-circle tile-md bg-blue"> {{ substr($organization->name, 0, 1) }}
            </div>
        </div>
        <div class="account-summary">
            <h1 class="card-title"> {{ $organization->name }} </h1>
            <h6 class="card-subtitle text-muted"> <strong>{{ $organization->name_short }}</strong> · Last update
                {{ $event->updated_at->diffForHumans() }} </h6>
        </div>
    </a> <!-- /btn-account -->
    <!-- right actions -->
</header>
