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
                                <a href="page-team.html" class="user-avatar user-avatar-md"><img
                                        src="{{ asset('/assets/images/avatars/team2.png') }}" alt=""></a>
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
                                            data-placement="bottom" data-original-title="Clients">
                                            <i class="fas fa-user-tie text-pink"></i> 3 </li>
                                        <li class="list-inline-item mr-3" data-toggle="tooltip" title=""
                                            data-placement="bottom" data-original-title="Projects">
                                            <i class="fa fa-bookmark text-yellow"></i> 4 </li>
                                        <li class="list-inline-item" data-toggle="tooltip" title=""
                                            data-original-title="Private">
                                            <i class="fa fa-lock"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="list-group-item-figure">
                                <a href="#" class="btn btn-sm btn-icon btn-secondary stop-propagation"><i
                                        class="fas fa-ellipsis-h"></i></a>
                            </div>
                        </div><!-- /.list-group-item -->
                        @empty
                            @component('vendor.component.empty')
                                <h3 class="state-header"> Belum ada Organisasi. </h3>
                                <p class="state-description lead text-muted"> Mari buat sebuah organisasi pertama kamu dengan menekan tombol dibawah. </p>
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
