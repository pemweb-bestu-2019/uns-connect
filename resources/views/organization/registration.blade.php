@extends('layouts.app') @section('page-inner')
<div class="page-inner container">
    <div class="page-section">
        <!-- .d-flex -->
        @include('vendor.include.navigation_organization')
        <!-- /.nav-scroller -->
        <!-- .tab-content -->
        <div class="tab-content pt-4">
            <!-- .tab-pane -->
            <div class="card">
                <!-- .card-body -->
                <div class="card-body">
                    @if(auth()->user()->isNot($organization->owner))
                        @if($is_registration)
                            <div class="d-flex justify-content-between align-items-center">
                                <h2 id="client-billing-contact-tab" class="card-title"> Pendaftaran</h2>
                            </div>
                            <p>Dengan menekan tombol dibawah ini, kamu akan dialihkan ke laman pembayaran. Setelah pembayaran berhasil, maka kamu bisa menjadi anggota dari organisasi ini.</p>
                            <p><a href="#" class="btn btn-primary"><i class="far fa-registered"></i> Daftar Organisasi</a></p>
                        @else
                            @if($membership)
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 id="client-billing-contact-tab" class="card-title"> Your Memberships</h2>
                                </div>
                                <p>{{ $organization->description }}</p>
                            @else
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 id="client-billing-contact-tab" class="card-title"> Tidak Menerima Pendaftaran</h2>
                                </div>
                                <p>Mohon maaf namun organisasi ini tidak menerima pendaftaran untuk saat ini, silahkan hubungi pemilik organisasi ini untuk informasi lebih lanjut.</p>
                            @endif
                        @endif
                    @else
                        @component('vendor.component.empty', ['type' => '7.svg'])
                            <h3 class="state-header"> Organisasi milik kamu sendiri. </h3>
                            <p class="state-description lead text-muted"> Kamu tidak bisa daftar di organisasi yang kamu urus sendiri
                            </p>
                        @endcomponent
                    @endif
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
    </div>
    <!-- /.page-section -->
</div>
<!-- /.page-inner -->
@endsection
