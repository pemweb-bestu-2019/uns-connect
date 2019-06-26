@extends('layouts.app')

@section('page-inner')
<div class="page-inner container">
    <div class="page-section">
        <!-- grid row -->
        <div class="row">
            <!-- grid column -->
            <div class="col-lg-12">
                <!-- .card -->
                <div class="card">
                    <!-- .card-header -->
                    @include('vendor.include.navigation_admin')
                    <!-- .card-body -->
                    <div class="card-body">
                        @component('vendor.component.empty')
                        <h3 class="state-header"> Maintenance </h3>
                        <p class="state-description lead text-muted"> Cek lagi di lain waktu ya.
                        </p>
                        @endcomponent
                    </div><!-- /.card-body -->
                </div>
                <!-- .card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
    </div>
</div><!-- /.page-inner -->
@endsection
