@push('styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/flatpickr/flatpickr.min.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('assets/vendor/flatpickr/flatpickr.min.js') }}"></script>
@endpush

<fieldset>
    <header class="pr-3 mb-3">
        @if ($create)
        <a href="https://uns-connect.app/organizations/view" class="btn-account">
            <div class="mr-2">
                <div class="tile tile-circle tile-md bg-blue"> {{ substr($organization->name, 0, 1) }}
                </div>
            </div>
            <div class="account-summary">
                <h1 class="card-title"> {{ $organization->name }} </h1>
                <h6 class="card-subtitle text-muted"> {{ $organization->name_short }} ·
                    <strong>{{ $organization->events()->count() }} Events</strong></h6>
            </div>
        </a>
        @else
        <div class="btn-account">
            <div class="mr-2">
                <div class="tile tile-circle tile-md bg-blue"> {{ substr($event->name, 0, 1) }}
                </div>
            </div>
            <div class="account-summary">
                <h1 class="card-title"> {{ $event->name }} </h1>
                <h6 class="card-subtitle text-muted"> {{ $organization->name }} ·
                    <strong>{{ $organization->name_short }} Events</strong></h6>
            </div>
            <div class="mr-0">
                <a href="{{ route('tickets.owned') }}" class="btn btn-sm btn-icon btn-secondary stop-propagation"><i
                        class="fas fa-times"></i></a>
            </div>
        </div>
        @endif
    </header>
    <hr>
    @include('vendor.include.message_flash')
    <div class="form-group">
        <label for="name">Event Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
            aria-describedby="name_help" name="name" placeholder="Pekan Informasi dan Teknologi UNS"
            value="{{ old('name', $event->name) }}" required>
        @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <small id="name_help" class="form-text text-muted">Nama event akan tampil di semua laman event.</small>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
            rows="3" required>{{ old('description', $event->description) }}</textarea>
        @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="quota">Quota</label>
        <input type="number" class="form-control @error('quota') is-invalid @enderror" id="quota" name="quota"
            placeholder="" value="{{ old('quota', $event->quota) ?? 0 }}" required>
        @error('quota')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <label for="date_eventday">Start Event</label>
            <div class="input-group @error('date_eventday') is-invalid @enderror">
                <label class="input-group-prepend" for="pi1"><span class="input-group-text"><span
                            class="far fa-calendar"></span></span></label>
                <input type="number" class="form-control flatpickr-input" id="date_eventday" name="date_eventday"
                    data-toggle="flatpickr" data-enable-time="true" data-date-format="Y-m-d H:i" readonly="readonly"
                    placeholder="" data-default-date="{{ old('date_eventday', $event->date_eventday) }}" required>
            </div>

            @error('date_eventday')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="col-md-6">
            <label for="date_register_close">Registration Close</label>
            <div class="input-group @error('date_register_close') is-invalid @enderror">
                <label class="input-group-prepend" for="pi1"><span class="input-group-text"><span
                            class="far fa-calendar"></span></span></label>
                <input type="number" class="form-control flatpickr-input" id="date_register_close"
                    name="date_register_close" data-toggle="flatpickr" data-enable-time="true"
                    data-date-format="Y-m-d H:i" readonly="readonly" placeholder=""
                    data-default-date="{{ old('date_register_close', $event->date_register_close) }}" required>
            </div>

            @error('date_register_close')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>
    <hr>
    <h6><i class="fas fa-map-marked-alt"></i> Lokasi</h6>
    <p>Lokasi akan membantu pengguna untuk menemukan lokasi event kamu. Isian ini bersifat opsional dan kamu dapat
        mengubahnya kapanpun di pengaturan.</p>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="lat">Latitude <span class="badge badge-secondary"><em>Optional</em></span></label>
                <div class="input-group @error('lat') is-invalid @enderror">
                    <label class="input-group-prepend" for="pi1"><span class="input-group-text"><span
                                class="fas fa-map-marker-alt"></span></span></label>
                    <input type="text" class="form-control" id="lat" name="lat" placeholder="-7.5556611"
                        value="{{ old('lat', $event->lat) }}">
                </div>
                @error('lat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="long">Longitude <span class="badge badge-secondary"><em>Optional</em></span></label>
                <div class="input-group @error('long') is-invalid @enderror">
                    <label class="input-group-prepend" for="pi1"><span class="input-group-text"><span
                                class="fas fa-map-marker-alt"></span></span></label>
                    <input type="text" class="form-control" id="long" name="long" placeholder="110.8672131"
                        value="{{ old('long', $event->long) }}">
                </div>
                @error('long')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Settings</label>
        <div class="custom-control custom-checkbox mb-1">
            <input type="checkbox" class="custom-control-input" id="is_private" name="is_private"
                @if($event->is_private) checked="checked" @endif> <label class="custom-control-label"
                for="is_private">Private Event</label>
            <div class="text-muted"> Mengakibatkan event hanya bisa diregister oleh member organisasi sendiri. </div>
        </div>
    </div>
    <hr>
    <div class="form-actions">
        @if($delete)
        <button type="submit" name="delete" value="1" class="btn btn-danger ml-auto"><i class="far fa-trash-alt"></i>
            Delete Event</button>
        @endif
        <button type="submit" class="btn btn-primary">@if($create) Create Event @else Update Event @endif</button>
    </div>
</fieldset>
