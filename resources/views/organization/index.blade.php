@extends('layouts.app')

@section('page-inner')
<div class="page-inner container">
    <!-- .page-title-bar -->
    <!-- .page-title-bar -->
    <header class="page-title-bar">
        <!-- page title stuff goes here -->
        <h1 class="page-title"> Organizations <small class="badge">{{ $organizations->count() }} Totals</small> </h1>
        <p class="text-muted"> Suatu kelompok orang dalam suatu wadah untuk tujuan bersama.. </p>
    </header><!-- /.page-title-bar -->
    <!-- .page-section -->
    <div class="page-section">
        <!-- .masonry-layout -->
        <div class="masonry-layout">
            @forelse ($organizations as $organization)
            @if ($loop->first)
            <div class="masonry-item col-lg-12">
                <form class="top-bar-search" style="margin-bottom: 20px;">
                    <div class="input-group input-group-search">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><span class="oi oi-magnifying-glass"></span></span>
                        </div><input type="text" class="form-control" aria-label="Search" placeholder="Search">
                    </div>
                </form>
            </div>
            @endif
            <div class="masonry-item col-lg-6">
                <!-- .card -->
                <div class="card card-fluid">
                    <!-- .card-body -->
                    <div class="card-body">
                        <!-- team avatar -->
                        <div class="media align-items-center mb-3">
                            <div class="user-avatar user-avatar-lg mr-3" style="font-size: 2rem;">
                                <div class="tile tile-circle tile-lg bg-blue"> {{ substr($organization->name, 0, 1) }}
                                </div>
                            </div>
                            <div class="media-body">
                                <h3 class="card-title">
                                    {{ $organization->name }}
                                </h3>
                                <h6 class="card-subtitle text-muted"> {{ $organization->name_short }} </h6>
                            </div><a href="{{ route('organizations.show', $organization->id_organization) }}"
                                class="btn btn-icon btn-light" data-toggle="tooltip" title="Lihat organisasi"><i
                                    class="far fa-building"></i></a>
                        </div><!-- /.media -->
                        <hr>
                        <p> {{ Str::limit($organization->description, 300) }} </p><!-- /team avatar -->
                    </div><!-- /.card-body -->
                    <!-- .card-footer -->
                    <div class="card-footer">
                        <a href="{{ route('organizations.members', $organization->id_organization) }}" class="card-footer-item card-footer-item-bordered text-muted"><strong>{{ number_format($organization->memberships->count()) }}</strong>
                            Terdaftar</a> <a href="{{ route('organizations.show', $organization->id_organization) }}"
                            class="card-footer-item card-footer-item-bordered text-muted">Lihat</a>
                        @if($organization->registration_open)
                            <a href="{{ route('organizations.registration', $organization->id_organization) }}" class="card-footer-item card-footer-item-bordered text-muted">Daftar</a>
                        @endif
                    </div><!-- /.card-footer -->
                </div><!-- /.card -->
            </div><!-- /.masonry-item -->
            @empty
            <div class="col-lg-12">
                @component('vendor.component.empty', ['type' => '7.svg'])
                <h3 class="state-header"> Organisasi belum tersedia. </h3>
                <p class="state-description lead text-muted"> Sepertinya belum ada organisasi yang dibuat.
                </p>
                @endcomponent
            </div>
            @endforelse
        </div><!-- /.masonry-layout -->
    </div><!-- /.page-section -->
</div><!-- /.page-inner -->
@endsection
