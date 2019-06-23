@extends('layouts.app')

@section('page-inner')
<div class="page-inner container">
    <!-- .page-title-bar -->
    <!-- .page-title-bar -->
    <header class="page-title-bar">
        <!-- page title stuff goes here -->
        <h1 class="page-title"> {{ __('Event Search') }} <small class="badge">{{ $events->count() }} Totals</small>
        </h1>
        <p class="text-muted"> Event adalah tempat terbaik untuk meningkatkan skill akademik anda. </p>
    </header><!-- /.page-title-bar -->
    <!-- .page-section -->
    <div class="page-section">
        <div class="section-box">
            <div class="row">
                <div class="col-lg-12">
                    <select id="filterBy" class="custom-select no-block">
                        <option value="" selected=""> Show all </option>
                        <option value="sent"> Sent </option>
                        <option value="paid"> Paid </option>
                        <option value="overdue"> Overdue </option>
                    </select>
                </div>
            </div>
        </div>
        <div class="section-block">
            <!-- grid row -->
            <div class="row">
                @forelse ($events as $event)
                <div class="col-lg-6">
                    <!-- .list-group -->
                    <div class="list-group list-group-media mb-3">
                        <a href="{{ route('events.show') }}" class="list-group-item list-group-item-action">
                            <div class="list-group-item-figure rounded-left">
                                <img src="assets/images/dummy/img-5.jpg" alt="placeholder image">
                            </div>
                            <div class="list-group-item-body">
                                <h4 class="list-group-item-title"> Expanding Your Home Network’s Reach </h4>
                                <p class="list-group-item-text"> A incidunt, corrupti. Quasi, incidunt ab, vel quidem
                                    debitis fuga? Delectus, ipsam... </p>
                            </div>
                        </a>

                    </div><!-- /.list-group -->
                </div><!-- /grid column -->
                @empty
                <div class="col-lg-12">
                    @component('vendor.component.empty', ['type' => '5.png'])
                    <h3 class="state-header"> Tidak ada event. </h3>
                    <p class="state-description lead text-muted"> Kami belum memiliki event, cek lagi kapan-kapan ya.
                    </p>
                    @endcomponent
                </div>
                @endforelse
                <!-- grid column -->

                <!-- grid column -->
            </div><!-- /grid row -->
        </div>
    </div><!-- /.page-section -->
</div><!-- /.page-inner -->
@endsection
