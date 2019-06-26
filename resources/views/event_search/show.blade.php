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
            <div class="row">
                <div class="col-md-4">
                    <div class="list-group list-group-divider mb-3">
                            <div class="list-group-header"> Quota </div>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="list-group-item-figure">
                                <span class="fab fa-lg fa-fw fa-hubspot"></span>
                            </div>
                            <div class="list-group-item-body">
                                <span
                                    class="list-group-item-text">{{ $event->quota == 0 ? 'Unlimited' : $event->quota }} Registration</span>
                            </div>
                        </a>
                        <div class="list-group-header"> Registration Closed </div><a href="#"
                            class="list-group-item list-group-item-action">
                            <div class="list-group-item-figure">
                                <span class="fas fa-lg fa-fw fa-door-closed"></span>
                            </div>
                            <div class="list-group-item-body">
                                <span class="list-group-item-text">{{ $event->date_register_close->diffForHumans() }}</span>
                            </div>
                        </a>
                        <div class="list-group-header"> Event Date </div>
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="list-group-item-figure">
                                <span class="fas fa-lg fa-fw fa-stopwatch"></span>
                            </div>
                            <div class="list-group-item-body">
                                <span class="list-group-item-text">{{ $event->date_eventday->diffForHumans() }}</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Description </h4>
                            {!! nl2br(e($event->description)) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.section-block -->
        <!-- .section-block -->
    </div><!-- /.page-section -->
</div>
@endsection
