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
                    @if($tickets->count() > 0)
                    <div class="card-body">
                        <h6>List of your tickets</h6>
                        <p>Berikut adalah tiket yang sudah anda beli. Tekan pada tombol kanal untuk melihat invoice dan tiket anda.</p>
                        <hr>
                        @foreach ($tickets as $ticket)
                            <div class="btn-group">
                                <a href="{{ route('events.registration', $ticket->invoice->event->slug) }}" class="btn btn-secondary"><span class="fas fa-link"></span></a> <button class="btn btn-secondary">{{ $ticket->invoice->event->name }}</button>
                            </div>
                        @endforeach
                    </div>
                    @else
                    <div class="card-body">
                        @component('vendor.component.empty')
                        <h3 class="state-header"> Tidak ada tiket. </h3>
                        <p class="state-description lead text-muted"> Kamu belum beli tiket di event manapun.
                        </p>
                        <div class="state-action">
                            <a href="{{ route('events.index') }}" class="btn btn-primary">Beli Tiket</a>
                        </div>
                        @endcomponent
                    </div>
                    @endif
                </div>
                <!-- .card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
    </div>
</div><!-- /.page-inner -->
@endsection
