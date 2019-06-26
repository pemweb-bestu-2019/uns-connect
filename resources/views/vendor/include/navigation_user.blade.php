<div class="col-lg-4">
    <!-- .card -->
    <div class="card card-fluid">
        <h6 class="card-header"> Profile </h6><!-- .nav -->
        <div class="list-group list-group-divider" style="box-shadow: none;">
            <div class="list-group-header"> Information </div>
            <a href="{{ route('me.index') }}" class="list-group-item list-group-item-action {{ nav_set_active('me.index') }}">
                    <div class="list-group-item-figure">
                        <span class="fas fa-lg fa-fw fa-meteor"></span>
                    </div>
                    <div class="list-group-item-body">
                        <span class="list-group-item-text">Me</span>
                    </div>
                </a>
            <a href="{{ route('me.profile') }}" class="list-group-item list-group-item-action {{ nav_set_active('me.profile') }}">
                <div class="list-group-item-figure">
                    <span class="fas fa-lg fa-fw fa-info-circle"></span>
                </div>
                <div class="list-group-item-body">
                    <span class="list-group-item-text">User Information</span>
                </div>
            </a>
        </div>

    </div><!-- /.card -->
</div><!-- /grid column -->
