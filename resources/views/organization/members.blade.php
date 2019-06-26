@extends('layouts.app') @section('page-inner')
<div class="page-inner container">
    <div class="page-section">
        <!-- .d-flex -->
        @include('vendor.include.navigation_organization')
        <!-- /.nav-scroller -->
        <!-- .tab-content -->
        <div class="tab-content pt-4">
            <!-- .tab-pane -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="list-group list-group-bordered mb-3">
                        <div class="list-group-header"> Members List </div>
                        @forelse ($organization->memberships as $membership)
                        <span class="list-group-item list-group-item-action">
                            <div class="list-group-item-figure">
                                <div class="tile tile-circle bg-primary">
                                    {{ substr($membership->user->member->name, 0, 1) }} </div>
                            </div>
                            <div class="list-group-item-body">
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title">
                                        <span>{{ $membership->user->member->name }}</span>
                                    </h4>
                                    <p class="list-group-item-text"> {{ $membership->division->name }} </p>
                                </div>
                            </div>
                        </span>
                        @empty
                        <span class="list-group-item list-group-item-action">
                            <div class="list-group-item-body"> Tidak ada anggota </div>
                        </span>
                        @endforelse
                    </div>
                </div>
            </div>
            <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>
    <!-- /.page-section -->
</div>
<!-- /.page-inner -->
@endsection
