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
                    <div class="list-group list-group-flush list-group-divider">
                        <div class="list-group-item">
                            <div class="card-body">
                                <legend class="mb-0">Pilih Organisasi</legend>
                            </div>
                        </div>
                        @forelse ($organizations as $organization)
                        <div class="list-group-item">
                            <div class="list-group-item-figure">
                                <div class="tile tile-circle tile-md bg-blue">
                                    {{ substr($organization->name, 0, 1) }}
                                </div>
                            </div>
                            <div class="list-group-item-body">
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                    <div class="team">
                                        <h4 class="list-group-item-title">
                                            {{ $organization->name }}
                                        </h4>
                                        <p class="list-group-item-text"> {{ $organization->name_short }} </p>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item-figure">
                                <a href="{{ route('tickets.owned.create', ['organization' => $organization->id_organization]) }}"
                                    class="btn btn-sm btn-icon btn-secondary stop-propagation"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div><!-- /.list-group-item -->
                        @empty
                        @component('vendor.component.empty')
                        <h3 class="state-header"> Belum ada Organisasi. </h3>
                        <p class="state-description lead text-muted"> Sayangnya sebelum membuat event kamu harus
                            punya organisasi yang kamu atur dulu. </p>
                        <div class="state-action">
                            <a href="{{ url()->previous() }}" class="btn btn-primary">Kembali</a>
                        </div>
                        @endcomponent
                        @endforelse
                        <!-- .list-group-item -->
                    </div>
                </div>
                <!-- .card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
    </div>
</div><!-- /.page-inner -->
@endsection
