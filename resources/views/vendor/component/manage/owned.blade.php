<div class="page-inner container">
    <div class="page-section">
        <!-- grid row -->
        <div class="row">
            <!-- grid column -->
            @include('vendor.include.navigation_manage')
            <!-- grid column -->
            <div class="col-lg-8">
                <!-- .card -->
                <div class="card card-fluid">
                    <h6 class="card-header"> Organization List </h6><!-- .card-body -->
                    <div class="list-group list-group-flush list-group-divider">
                        @include('vendor.include.message_flash')
                        <div class="list-group-item">
                            <div class="list-group-item-figure">
                                <div class="tile tile-circle tile-md bg-blue"> {{ substr($organization->name, 0, 1) }}
                                </div>
                            </div>
                            <div class="list-group-item-body">
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                    <div class="team">
                                        <h4 class="list-group-item-title">
                                            <a href="page-team.html">{{ $organization->name }} <span
                                                    class="text-muted">({{ $organization->name_short }})</span></a>
                                        </h4>
                                        <ul class="list-inline text-muted mb-0">
                                            <li class="list-inline-item mr-3" data-toggle="tooltip" title=""
                                                data-placement="bottom" data-original-title="Members">
                                                <i class="fas fa-users text-teal"></i> 8 </li>
                                            <li class="list-inline-item mr-3" data-toggle="tooltip" title=""
                                                data-placement="bottom" data-original-title="Events">
                                                <i class="fa fa-bookmark text-yellow"></i>
                                                {{ $organization->events()->count() }} </li>

                                            @if($organization->registration_open)
                                            <li class="list-inline-item" data-toggle="tooltip" title=""
                                                data-original-title="Public">
                                                <i class="fa fa-globe"></i>
                                            </li>
                                            @else
                                            <li class="list-inline-item" data-toggle="tooltip" title=""
                                                data-original-title="Private">
                                                <i class="fa fa-lock"></i>
                                            </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item-figure">
                                <a href="{{ route('manage.owned') }}"
                                    class="btn btn-sm btn-icon btn-secondary stop-propagation"><i
                                        class="fas fa-times"></i></a>
                            </div>
                        </div><!-- /.list-group-item -->
                        <div class="list-group-item">
                            <div class="nav-scroller border-bottom">
                                <!-- .nav -->
                                <div class="nav nav-tabs">
                                    <a class="nav-link {{ nav_set_active('manage.owned.edit') }}" href="{{ route('manage.owned.edit', $organization->id_organization) }}">Settings</a>
                                    <a class="nav-link {{ nav_set_active('manage.owned.report') }}" href="{{ route('manage.owned.report', $organization->id_organization) }}">Report</a>
                                </div><!-- /.nav -->
                            </div>
                        </div>

                        {{ $slot }}
                        <!-- .list-group-item -->
                    </div>
                </div><!-- /.card -->
                <!-- .card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
    </div>
</div><!-- /.page-inner -->
