@extends('layouts.app') @section('page-inner')
<div class="page-inner container">
    <div class="page-section">
        <!-- .d-flex -->
        @include('vendor.include.navigation_organization')
        <!-- /.nav-scroller -->
        <!-- .tab-content -->
        <div class="tab-content pt-4">
            <!-- .tab-pane -->
            <div class="card">
                <!-- .card-body -->
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 id="client-billing-contact-tab" class="card-title"> Description</h2>
                    </div>
                    <p>{{ $organization->description }}</p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>
    <!-- /.page-section -->
</div>
<!-- /.page-inner -->
@endsection
