@extends('layouts.app')

@section('page-inner')
@component('vendor.component.manage.owned', ['organization' => $organization])
<div class="list-group-item">
    <div class="page-section">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <form action="{{ route('manage.owned.update', $organization->id_organization) }}" method="post">
                        @method('PUT')
                        @csrf

                        @include('vendor.forms.organization', ['create' => false, 'delete' =>
                        true])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endcomponent
@endsection
