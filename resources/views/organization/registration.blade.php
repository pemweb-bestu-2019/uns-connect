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
                            <p class="mb-0">Dengan menekan tombol dibawah ini, kamu akan dialihkan ke laman pembayaran. Setelah pembayaran berhasil, maka kamu bisa menjadi anggota dari organisasi ini.</p>
                            <fieldset>
                                <form action="{{ route('organizations.registration.store', $organization->id_organization) }}" method="POST">
                                    @csrf
                                    <hr>
                                    <div class="section-block text-center text-sm-left">
                                        <h3 class="section-title"> Pilih salah satu divisi pada daftar </h3><!-- .visual-picker -->
                                        @forelse ($divisions as $division)
                                            <div class="visual-picker visual-picker-sm has-peek px-3">
                                                <!-- visual-picker input -->
                                                <input type="radio" id="division-{{ $division->id_division }}" value="{{ $division->id_division }}" name="division"> <!-- .visual-picker-figure -->
                                                <label class="visual-picker-figure" for="division-{{ $division->id_division }}">
                                                  <span class="visual-picker-content"><span class="tile tile-sm bg-info"><i class="oi oi-person"></i></span></span> <!-- /.visual-picker-content --></label> <!-- /.visual-picker-figure -->
                                                <span class="visual-picker-peek">{{ $division->name }}</span>
                                              </div><!-- /.visual-picker -->
                                        @empty
                                        <div class="alert alert-primary has-icon" role="alert">
                                                <div class="alert-icon">
                                                  <span class="fa fa-bullhorn"></span>
                                                </div>
                                                <strong>Sebuah kesalahan terjadi!</strong>
                                                <p class="mb-0">Jika kamu membaca pesan ini, hubungi pemilik dan memberikan pesan kesalahan <strong>ERR_DIV_NOTEXISTS</strong>.</p>
                                            </div>
                                        @endforelse
                                    </div>
                                    <hr>
                                    <div class="section-block text-center text-sm-left">
                                        <h3 class="section-title"> Biaya pendaftaran </h3><!-- .visual-picker -->
                                        <h2>{{ $organization->registration_fee == 0 ? 'Gratis' : 'Rp' . number_format($organization->registration_fee, 0) }}</h2>
                                    </div>
                                    <hr>
                                    <p><button type="submit" class="btn btn-primary" @if(count($divisions) == 0) disabled @endif><i class="far fa-registered"></i> Daftar Organisasi</button></p>
                                </form>
                            </fieldset>
                        @else
                            @if($membership)
                                <div class="d-flex justify-content-between align-items-center">
                                    <h2 id="client-billing-contact-tab" class="card-title"> Your Memberships</h2>
                                </div>
                                @include('vendor.include.message_flash')
                                <p>Berikut ini adalah informasi dari membership anda di organisasi ini. Kamu bisa menghapus keanggotaan ini kapan saja.</p>
                                <div class="card-body">
                                    <dl class="d-flex justify-content-between">
                                      <dt class="text-left">
                                        <span class="mr-2">Division</span>
                                      </dt>
                                      <dd class="text-right mb-0">
                                        <strong><span class="badge badge-primary">{{ $membership->division->name }}</span></strong>
                                      </dd>
                                    </dl>
                                    <dl class="d-flex justify-content-between">
                                      <dt class="text-left">
                                        <span class="mr-2">Member Until</span>
                                      </dt>
                                      <dd class="text-right mb-0">
                                        <strong>{{ $membership->date_expired->format('F j, Y') }}</strong>
                                      </dd>
                                    </dl>
                                    <dl class="d-flex justify-content-between mb-0">
                                        <dt class="text-left">
                                          <span class="mr-2">Member Left</span>
                                        </dt>
                                        <dd class="text-right mb-0">
                                          <strong>{{ $membership->date_expired->diffForHumans() }}</strong>
                                        </dd>
                                      </dl>
                                  </div>
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
