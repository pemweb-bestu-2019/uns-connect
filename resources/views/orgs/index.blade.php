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
                        @component('vendor.component.empty')
                        <h3 class="state-header"> Belum daftar dimanapun. </h3>
                        <p class="state-description lead text-muted"> Mulai mendaftar organisasi dan nikmati hidupmu. </p>
                        <div class="state-action">
                            <a href="{{ route('organizations.index') }}" class="btn btn-primary">Daftar Organisasi</a>
                        </div>
                        @endcomponent
                    </div>
                </div><!-- /.card -->
                <!-- .card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
    </div>
</div><!-- /.page-inner -->
@endsection
