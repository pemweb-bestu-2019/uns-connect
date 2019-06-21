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
                        @forelse ($organizations as $organization)
                        <div class="list-group-item">
                            <div class="list-group-item-figure">
                                <div class="tile tile-circle tile-md bg-blue"> {{ substr($organization->name, 0, 1) }}
                                </div>
                            </div>
                            <div class="list-group-item-body">
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                                    <div class="team">
                                        <h4 class="list-group-item-title">
                                            <a href="page-team.html">{{ $organization->name }}</a>
                                        </h4>
                                        <p class="list-group-item-text"> {{ $organization->name_short }} </p>
                                    </div>
                                    <ul class="list-inline text-muted mb-0">
                                        <li class="list-inline-item mr-3" data-toggle="tooltip" title=""
                                            data-placement="bottom" data-original-title="Members">
                                            <i class="fas fa-users text-teal"></i> 8 </li>
                                        <li class="list-inline-item mr-3" data-toggle="tooltip" title=""
                                            data-placement="bottom" data-original-title="Events">
                                            <i class="fa fa-bookmark text-yellow"></i> {{ $organization->events()->count() }} </li>

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
                            <div class="list-group-item-figure">
                                <a href="#" class="btn btn-sm btn-icon btn-secondary stop-propagation"><i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div><!-- /.list-group-item -->
                        @empty
                        @component('vendor.component.empty')
                        <h3 class="state-header"> Belum ada Organisasi. </h3>
                        <p class="state-description lead text-muted"> Mari buat sebuah organisasi pertama kamu dengan
                            menekan tombol dibawah. </p>
                        <div class="state-action">
                            <a href="{{ route('manage.create') }}" class="btn btn-primary">Buat Baru</a>
                        </div>
                        @endcomponent
                        @endforelse
                        <!-- .list-group-item -->
                    </div>
                </div><!-- /.card -->
                <!-- .card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
    </div>
</div><!-- /.page-inner -->
@endsection
