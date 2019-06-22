@extends('layouts.app')

@section('page-inner')
@component('vendor.component.orgs.owned', ['organization' => $organization])
<div class="list-group-item">
    <div class="page-section">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <p>TEST</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endcomponent
@endsection
