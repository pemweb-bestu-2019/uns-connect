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
            <!-- .metric-row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @if (!$isMapAvailable)
                        <div class="card-body">
                            <h4 class="card-title"> Peta tidak Tersedia </h4>
                            <hr>
                            <p>Peta tidak tersedia dikarenakan pemilik event belum memasukkan alamat koordinat dari
                                event tersebut.</p>
                        </div>
                        @else
                        <style>
                            #map {
                                height: 600px;
                                width: 100%;
                            }
                        </style>
                        <div id="map"></div>
                        @endif
                    </div>
                </div>
            </div>
        </div><!-- /.section-block -->
        <!-- .section-block -->
    </div><!-- /.page-section -->

    @if($isMapAvailable)
    <script>
        var map;
            function initMap() {
                var center = {lat: {{ $event->lat }}, lng: {{ $event->long }}};
                map = new google.maps.Map(document.getElementById('map'), {
                    center: center,
                    zoom: 17
                });

              var marker = new google.maps.Marker({
                  position: center,
                  map: map,
                  title: 'Event Location'
              });
            }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDkERXTRahQ20HpM8bx3IVjShrjt41I6QY&callback=initMap"
        async defer></script>
    @endif
</div>
@endsection
