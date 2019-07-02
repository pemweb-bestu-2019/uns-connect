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
                        <a href="#" class="btn-primary btn"><i class="fas fa-file-pdf"></i> Export PDF</a>
                        <hr>
                        <h6>Total Revenue</h6>
                        <p>Jumlah penghasilan dari pendaftaran event ini dari
                            <strong>{{ number_format($event->invoices()->count(), 0) }}</strong> pendaftar.</p>
                        <hr>
                        <h3>Rp{{ number_format($event->invoices()->count() * 100000, 0) }}</h3>
                        <hr>
                        <h6>Invoices</h6>
                        <p>Berikut adalah daftar invoiec dari pendaftaran. Invoice dibawah ini termasuk dari user yang
                            mencabut keanggotaan.</p>
                        <hr>
                        @if($event->invoices->count() == 0)
                        <p>Belum ada invoice tersedia</p>
                        @else
                        <div class="table-responsive">
                            <!-- .table -->
                            <table class="table table-hover table-striped">
                                <!-- thead -->
                                <thead class="thead">
                                    <tr>
                                        <th style="min-width:200px"> Name of User </th>
                                        <th> NIK </th>
                                        <th> Tipe </th>
                                        <th> Price </th>
                                        <th> Date </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($event->invoices as $invoice)
                                    <tr>
                                        @if($invoice->invoiceable->id_invoice_guest)
                                        <td> {{ $invoice->invoiceable->name }} </td>
                                        <td> {{ $invoice->invoiceable->nik }} </td>
                                        <td> Guest </td>
                                        @else
                                        <td> {{ $invoice->invoiceable->user->member->name }} </td>
                                        <td> {{ $invoice->invoiceable->user->member->nik }} </td>
                                        <td> Member </td>
                                        @endif
                                        <td> Rp{{ number_format(100000, 0) }} </td>
                                        <td> {{ $invoice->created_at->format('F j, Y') }} </td>
                                    </tr>
                                    @endforeach
                                </tbody><!-- /tbody -->
                            </table><!-- /.table -->
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- .card -->
        </div><!-- /grid column -->
    </div><!-- /grid row -->
</div>
</div><!-- /.page-inner -->
@endsection
