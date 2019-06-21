@extends('layouts.app')

@section('page-inner')
<div class="page-inner container">
    <div class="page-section">
        <!-- grid row -->
        <div class="row">
            <!-- grid column -->
            @include('vendor.include.navigation_manage')
            <!-- grid column -->
            <div class="col-lg-8">
                <!-- .card -->
                <div class="card card-fluid">
                    <h6 class="card-header"> New Organization </h6><!-- .card-body -->
                    <div class="card-body">
                        <form action="{{ route('manage.store') }}" method="post">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Organization Name</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                                id="name" aria-describedby="name_help" name="name"
                                                placeholder="Himpunan Mahasiswa Komputer UNS" value="{{ old('name') }}"
                                                required>
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <small id="name_help" class="form-text text-muted">Nama lengkap dan panjang
                                                dari organisasi anda.</small>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="name_short">Short Name</label>
                                            <input type="text"
                                                class="form-control @error('name_short') is-invalid @enderror"
                                                id="name_short" aria-describedby="name_short_help" name="name_short"
                                                placeholder="HIMASTER" value="{{ old('name_short') }}" required>
                                            @error('name_short')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                            <small id="name_short_help" class="form-text text-muted">Nama pendek
                                                organisasi
                                                anda.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description"
                                        class="form-control @error('description') is-invalid @enderror" rows="3"
                                        required>{{ old('description') }}</textarea>
                                    @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <div class="input-group">
                                        <label class="input-group-prepend" for="pi1"><span
                                                class="input-group-text"><span
                                                    class="far fa-building"></span></span></label>
                                        <input type="text" class="form-control @error('address') is-invalid @enderror"
                                            name="address" id="address" placeholder="" value="{{ old('address') }}"
                                            required>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <hr>
                                <p>Informasi tambahan. Kamu dapat mengosongkannya dan menambahkannya dikemudian waktu.
                                </p>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number <span
                                            class="badge badge-secondary"><em>Optional</em></span></label>
                                    <input type="text" class="form-control @error('phone_number') is-invalid @enderror"
                                        id="phone_number" name="phone_number" placeholder=""
                                        value="{{ old('phone_number') }}">
                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="website">Website <span
                                            class="badge badge-secondary"><em>Optional</em></span></label>
                                    <input type="text" class="form-control @error('website') is-invalid @enderror"
                                        id="website" name="website" placeholder="" value="{{ old('website') }}">
                                    @error('website')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="registration_fee">Registration Fee <span
                                            class="badge badge-secondary"><em>Optional</em></span></label>
                                    <div class="input-group @error('registration_fee') is-invalid @enderror">
                                        <label class="input-group-prepend" for="pi9"><span
                                                class="badge">Rp</span></label>
                                        <input type="number" class="form-control" id="registration_fee"
                                            name="registration_fee" placeholder="" step="10000" min="0" value="0"
                                            value="{{ old('registration_fee') }}">
                                    </div>
                                    @error('registration_fee')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Settings</label>
                                    <div class="custom-control custom-checkbox mb-1">
                                        <input type="checkbox" class="custom-control-input" id="registration_open"
                                            name="registration_open"> <label class="custom-control-label"
                                            for="registration_open">Open organization
                                            registration</label>
                                        <div class="text-muted"> Membuka halaman registrasi untuk organisasi anda. Anda
                                            dapat mengubahnya dikemudian hari di laman pengaturan. </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary ml-auto">Create Organization</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- /.card -->
                <!-- .card -->
            </div><!-- /grid column -->
        </div><!-- /grid row -->
    </div>
</div><!-- /.page-inner -->
@endsection