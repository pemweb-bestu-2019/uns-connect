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
                        @include('vendor.include.message_flash')
                        <a href="{{ route('admin.division.create') }}" class="btn btn-primary mb-3">Create Division</a>

                        @forelse ($divisions as $division)
                        @if ($loop->first)
                        <div class="list-group list-group-bordered">
                            <div class="list-group-header"> Daftar Divisi </div>
                            @endif
                            <div class="list-group-item list-group-item-action">
                                <div class="list-group-item-figure">
                                    <div class="tile tile-circle bg-primary">
                                        {{ strtoupper(substr($division->name, 0, 1)) }}
                                    </div>
                                </div>
                                <div class="list-group-item-body"> {{ $division->name }} </div>
                                <div class="list-group-item-figure">
                                    <a href="{{ route('admin.division.delete', $division->id_division) }}"
                                        class="btn btn-sm btn-icon btn-light"><i class="fas fa-trash"></i></a>
                                    <a href="{{ route('admin.division.edit', $division->id_division) }}"
                                        class="btn btn-sm btn-icon btn-light"><i class="fas fa-edit"></i></a>
                                </div>
                            </div>
                            @if ($loop->last)
                        </div>
                        @endif
                        @empty
                        <div class="alert alert-primary has-icon" role="alert">
                            <div class="alert-icon">
                                <span class="oi oi-bell"></span>
                            </div>
                            <strong>Belum ada divisi yang bisa ditampilkan, cepat buat satu!</strong>
                            <p class="mb-0">Ingat lho mau membuka pendaftaran di suatu organisasi, harus memiliki
                                divisi dulu minimal satu!</p>
                        </div>
                        @endforelse
                    </div><!-- /.card-body -->
                </div>
                <!-- .card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
    </div>
</div><!-- /.page-inner -->
@endsection
