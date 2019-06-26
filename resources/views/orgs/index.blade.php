@extends('layouts.app')

@section('page-inner')
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
                        @forelse ($memberships as $membership)
                        <div class="list-group-item">
                            <div class="list-group-item-figure">
                                <div class="tile tile-circle tile-md bg-blue"> {{ substr($membership->organization->name, 0, 1) }}
                                </div>
                            </div>
                            <div class="list-group-item-body">
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                    <div class="team">
                                        <h4 class="list-group-item-title">
                                            <span>{{ $membership->organization->name }}</span>
                                        </h4>
                                        <p class="list-group-item-text"> {{ $membership->organization->name_short }}
                                        </p>
                                    </div>
                                    <ul class="list-inline text-muted mb-0">
                                        <li class="list-inline-item mr-3"> {{ $membership->division->name }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="list-group-item-figure">
                                <a href="{{ route('organizations.registration', $membership->organization->id_organization) }}"
                                    class="btn btn-sm btn-icon btn-secondary stop-propagation"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                        @empty
                        @component('vendor.component.empty')
                        <h3 class="state-header"> Belum daftar dimanapun. </h3>
                        <p class="state-description lead text-muted"> Mulai mendaftar organisasi dan nikmati hidupmu.
                        </p>
                        <div class="state-action">
                            <a href="{{ route('organizations.index') }}" class="btn btn-primary">Daftar Organisasi</a>
                        </div>
                        @endcomponent
                        @endforelse
                    </div>
                </div><!-- /.card -->
                <!-- .card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
    </div>
</div><!-- /.page-inner -->
@endsection
