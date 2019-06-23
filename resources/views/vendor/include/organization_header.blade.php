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
