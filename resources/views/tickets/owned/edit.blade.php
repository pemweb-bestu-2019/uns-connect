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
                    @include('vendor.include.navigation_ticket')
                    <!-- .card-body -->
                    <div class="card-body">
                        <a href="#" class="btn btn-primary"><i class="fas fa-donate"></i> Generate Report</a>
                        <hr>
                        <form action="{{ route('tickets.owned.update', $event->id_event) }}" method="post">
                            @method('PUT')
                            @csrf

                            @include('vendor.forms.event', ['create' => false, 'delete' => true])
                        </form>
                    </div><!-- /.card-body -->
                </div>
                <!-- .card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
    </div>
</div><!-- /.page-inner -->
@endsection
