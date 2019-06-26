<fieldset>
    @include('vendor.include.message_flash')
    <div class="form-group">
                <label for="name">Division Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                    aria-describedby="name_help" name="name" placeholder="Senior"
                    value="{{ old('name', $division->name) }}" required>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <small id="name_help" class="form-text text-muted">Nama divisi yang akan dibuat.</small>
            </div>
        <div class="form-group">
            <label for="level">Level</label>
            <input type="text" class="form-control @error('level') is-invalid @enderror" id="level"
                    aria-describedby="level_help" name="level" placeholder="1"
                    value="{{ old('level', $division->level) ?? 1 }}" required>
            @error('level')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <hr>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">@if($create) Create Division @else Update Division
                @endif</button>
        </div>
    </fieldset>
