@extends('layouts.app')

@section('page-inner')
@include('vendor.include.organization_header', ['organization' => $event->organization, 'event' => $event])
<div class="page-inner">
    <!-- .page-title-bar -->
    @include('vendor.include.event.header')
    <!-- .page-section -->
    <div class="page-section">
        <!-- .section-block -->
        <div class="section-block">
            <!-- .metric-row -->
            {!! nl2br(e($event->description)) !!}
        </div><!-- /.section-block -->
        <!-- .section-block -->
    </div><!-- /.page-section -->
</div>
@endsection