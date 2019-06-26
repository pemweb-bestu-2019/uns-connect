@extends('layouts.app')

@section('page-inner')
@include('vendor.include.organization_header', ['organization' => $event->organization, 'event' => $event])
<div class="page-inner container">
    <!-- .page-title-bar -->
    @include('vendor.include.event.header')
    <!-- .page-section -->
    <div class="page-section">
        <!-- .section-block -->
        <div class="section-block">
            <!-- .metric-row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @auth
                        {{-- User register --}}
                        <p>AUTH</p>
                        @else
                        {{-- Guest register --}}
                        <div class="card-body">
                            <h4 class="card-title"> Guest Registration </h4>
                            <p>Kami memerlukan data dibawah ini untuk informasi identitas anda, silahkan isi dengan
                                lengkap dan sebenar-benarnya.</p>
                            <hr>
                            <div class="section-block text-center text-sm-left">
                                <h3 class="section-title"> Biaya pendaftaran </h3><!-- .visual-picker -->
                                <h2>{{ 'Rp' . number_format(100000, 0) }}</h2>
                                <p>Biaya tersebut dibebankan kepada kamu dan akan diberikan kepada pembuat event.</p>
                            </div>
                            <hr>
                            <form action="{{ route('events.registration.guest', $event->slug) }}" method="post">
                                @csrf

                                @include('vendor.forms.member', ['register' => true])
                            </form>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div><!-- /.section-block -->
        <!-- .section-block -->
    </div><!-- /.page-section -->
</div>
@endsection
