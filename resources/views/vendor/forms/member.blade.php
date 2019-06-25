@push('styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/flatpickr.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
@endpush

<fieldset>
    @include('vendor.include.message_flash')
    <input type="hidden" name="redirectTo" value="{{ app('request')->input('redirectTo') ?? '' }}">
    <div class="form-group">
        <label for="nik">NIK</label>
        <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" aria-describedby="nik_help"
            name="nik" placeholder="1773892830280001" value="{{ old('nik', $member->nik) }}" required>
        @error('nik')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <small id="nik_help" class="form-text text-muted">Masukkan 16 digit NIK.</small>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    aria-describedby="name_help" name="name" placeholder="Galih Akbar Moerbayaksa"
                    value="{{ old('name', $member->name) }}" required>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <small id="name_help" class="form-text text-muted">Isikan nama sesuai dengan yang tertera di Kartu
                    Kredit.</small>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="custom-select @error('gender') is-invalid @enderror" id="gender" name="gender"
                    required="">
                    <option value=""> Choose... </option>
                    @foreach(['L', 'P'] as $gender)
                    <option value="{{ $gender }}" {{ (old("gender", $member->gender) == $gender ? 'selected' : '') }}>
                        {{ $gender }}</option>
                    @endforeach
                </select>
                @error('gender')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="birth_place">Birth Place</label>
        <div class="input-group @error('birth_place') is-invalid @enderror">
            <label class="input-group-prepend" for="pi1"><span class="input-group-text"><span
                        class="fas fa-globe-asia"></span></span></label>
            <input type="text" class="form-control" name="birth_place" id="birth_place" placeholder="Pangandaran"
                value="{{ old('birth_place', $member->birth_place) }}" required>
        </div>
        @error('birth_place')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <small id="city_help" class="form-text text-muted">Masukkan tempat lahir sesuai Kartu Keluarga</small>
    </div>
    <div class="form-group">
        <label for="birth_date">Birth Date</label>
        <div class="input-group @error('birth_date') is-invalid @enderror">
            <label class="input-group-prepend" for="pi1"><span class="input-group-text"><span
                        class="far fa-calendar"></span></span></label>
            <input type="number" class="form-control flatpickr-input" id="birth_date" name="birth_date"
                data-toggle="flatpickr" data-date-format="Y-m-d" readonly="readonly" placeholder=""
                data-default-date="{{ old('birth_date', $member->birth_date) }}" required>
        </div>

        @error('birth_date')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="religion">Religion</label>
        <select class="custom-select @error('religion') is-invalid @enderror" id="religion" name="religion" required="">
            <option value=""> Choose... </option>
            @foreach(['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha'] as $religion)
            <option value="{{ $religion }}" {{ (old("religion", $member->religion) == $religion ? 'selected' : '') }}>
                {{ $religion }}</option>
            @endforeach
        </select>
        @error('religion')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone_number">Phone Number</label>
        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
            name="phone_number" placeholder="082216008423" value="{{ old('phone_number', $member->phone_number) }}"
            required>
        @error('phone_number')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <hr>
    <h6><i class="fas fa-map-marked-alt"></i> Tempat Tinggal</h6>
    <p>Masukkan informasi tempat tinggal kamu.</p>
    <div class="form-group">
        <label for="address">Address</label>
        <div class="input-group @error('address') is-invalid @enderror">
            <label class="input-group-prepend" for="pi1"><span class="input-group-text"><span
                        class="far fa-building"></span></span></label>
            <input type="text" class="form-control" name="address" id="address" placeholder="Jl. Ir. Soekarno, No. 22"
                value="{{ old('address', $member->address) }}" required>
        </div>
        @error('address')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="city">City</label>
                <div class="input-group @error('city') is-invalid @enderror">
                    <label class="input-group-prepend" for="pi1"><span class="input-group-text"><span
                                class="far fa-building"></span></span></label>
                    <input type="text" class="form-control" name="city" id="city" placeholder="Jakarta Barat"
                        value="{{ old('city', $member->city) }}" required>

                </div>
                @error('city')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <small id="city_help" class="form-text text-muted">Masukkan nama kota tempat kamu tinggal
                    sekarang</small>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="province">Province</label>
                <div class="input-group @error('province') is-invalid @enderror">
                    <label class="input-group-prepend" for="pi1"><span class="input-group-text"><span
                                class="far fa-building"></span></span></label>
                    <input type="text" class="form-control" name="province" id="province" placeholder="DKI Jakarta"
                        value="{{ old('province', $member->province) }}" required>

                </div>
                @error('province')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <small id="province_help" class="form-text text-muted">Masukkan nama province dimana kamu berada
                    sekarang</small>
            </div>
        </div>
    </div>
    <hr>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Update Information</button>
    </div>
</fieldset>
