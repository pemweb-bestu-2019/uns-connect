@extends('layouts.app')

@section('page-inner')
<div class="page-inner container">
    <div class="page-section">
        <!-- grid row -->
        <div class="row">
            <!-- grid column -->
            @include('vendor.include.navigation_user')
            <!-- grid column -->
            <div class="col-lg-8">
                <!-- .card -->
                <div class="card card-fluid">
                    <h6 class="card-header"> Your Information </h6><!-- .card-body -->
                    <div class="list-group list-group-flush list-group-divider">
                        @component('vendor.component.empty')
                        <h3 class="state-header"> Maintenance. </h3>
                        <p class="state-description lead text-muted"> Balik lagi kapan-kapan aja ya. </p>
                        @endcomponent
                    </div>
                </div><!-- /.card -->
                <!-- .card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
    </div>
</div><!-- /.page-inner -->
@endsection
