@extends('layouts.app')

@section('page-inner')
@component('vendor.component.orgs.owned', ['organization' => $organization])
<div class="list-group-item">
    <div class="page-section">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <a href="#" class="btn-primary btn"><i class="fas fa-file-pdf"></i> Export PDF</a>
                    <hr>
                    <h6>Total Revenue</h6>
                    <hr>
                    <p>Pendapatan yang didapatkan dari hasil registrasi member adalah sebesar</p>
                    <h3>Rp{{ number_format($organization->membership_invoices()->sum('price'), 0) }}</h3>
                    <hr>
                    <h6>Organization Member</h6>
                    <hr>
                    <div class="list-group list-group-bordered mb-3">
                        <div class="list-group-header"> Members List </div>
                        @forelse ($organization->memberships as $membership)
                        <span class="list-group-item list-group-item-action">
                            <div class="list-group-item-figure">
                                <div class="tile tile-circle bg-primary">
                                    {{ substr($membership->user->member->name, 0, 1) }} </div>
                            </div>
                            <div class="list-group-item-body">
                                <div class="list-group-item-body">
                                    <h4 class="list-group-item-title">
                                        <span>{{ $membership->user->member->name }}</span>
                                    </h4>
                                    <p class="list-group-item-text"> {{ $membership->division->name }} </p>
                                </div>
                            </div>
                        </span>
                        @empty
                        <span class="list-group-item list-group-item-action">
                            <div class="list-group-item-body"> Tidak ada anggota </div>
                        </span>
                        @endforelse
                    </div>
                    <hr>
                    <h6>Invoices</h6>
                    <p>Berikut adalah daftar invoiec dari pendaftaran. Invoice dibawah ini termasuk dari user yang mencabut keanggotaan.</p>
                    <hr>
                    @if($organization->membership_invoices->count() == 0)
                    <p>Belum ada invoice tersedia</p>
                    @else
                    <div class="table-responsive">
                        <!-- .table -->
                        <table class="table table-hover table-striped">
                            <!-- thead -->
                            <thead class="thead">
                                <tr>
                                    <th style="min-width:200px"> Name of User </th>
                                    <th> Price </th>
                                    <th> Date </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($organization->membership_invoices as $invoice)
                                    <tr>
                                        <td> {{ $invoice->user->member->name }} </td>
                                        <td> Rp{{ number_format($invoice->price, 0) }} </td>
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
    </div>
</div>
@endcomponent
@endsection
