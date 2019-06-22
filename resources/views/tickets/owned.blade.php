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
                        @include('vendor.include.message_flash')
                        @if ($events)
                        <a href="{{ route('tickets.owned.select') }}" class="btn btn-primary"><i
                                class="fas fa-plus"></i> Create Event</a>
                        <hr>
                        <div class="list-group list-group-flush list-group-divider">
                            @foreach ($events as $event)
                            <div class="list-group-item">
                                <div class="list-group-item-figure">
                                    <div class="tile tile-circle tile-md bg-blue">
                                        {{ substr($event->name, 0, 1) }}
                                    </div>
                                </div>
                                <div class="list-group-item-body">
                                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                        <div class="team">
                                            <h4 class="list-group-item-title">
                                                {{ $event->name }}
                                            </h4>
                                            <p class="list-group-item-text"> {{ $event->organization->name }} </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item-figure">
                                    <a href="#" class="btn btn-sm btn-icon btn-secondary stop-propagation"><i
                                            class="fas fa-chevron-right"></i></a>
                                </div>
                            </div><!-- /.list-group-item -->
                            @endforeach
                            <!-- .list-group-item -->
                        </div>
                        @else
                        @component('vendor.component.empty')
                        <h3 class="state-header"> Eventnya gak ada. </h3>
                        <p class="state-description lead text-muted"> Kamu harus coba deh membuat event sekarang.
                        </p>
                        <div class="state-action">
                            <a href="{{ route('tickets.owned.select') }}" class="btn btn-primary">Buat Event Kamu</a>
                        </div>
                        @endcomponent
                        @endif
                    </div><!-- /.card-body -->
                </div>
                <!-- .card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
    </div>
</div><!-- /.page-inner -->
@endsection
