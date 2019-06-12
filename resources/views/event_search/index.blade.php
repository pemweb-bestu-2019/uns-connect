@extends('layouts.app')

@section('page-inner')
<div class="page-inner container">
    <!-- .page-title-bar -->
    <!-- .page-title-bar -->
    <header class="page-title-bar">
        <!-- page title stuff goes here -->
        <h1 class="page-title"> Event Search <small class="badge">23 Totals</small> </h1>
        <p class="text-muted"> Session timeout and keep-alive control with a nice Bootstrap warning dialog. </p>
    </header><!-- /.page-title-bar -->
    <!-- .page-section -->
    <div class="page-section">
        <div class="section-box">
            <div class="row">
                <div class="col-lg-12">
                    <div class="dropdown">
                        <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"><span>This Month</span> <i
                                class="fa fa-fw fa-caret-down"></i></button>
                        <div class="dropdown-arrow dropdown-arrow-right"></div><!-- .dropdown-menu -->
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation">
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="dpToday" name="dpFilter" value="0">
                                <label class="custom-control-label d-flex justify-content-between"
                                    for="dpToday"><span>Today</span> <span class="text-muted">Mar 27</span></label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="dpYesterday" name="dpFilter"
                                    value="1"> <label class="custom-control-label d-flex justify-content-between"
                                    for="dpYesterday"><span>Yesterday</span> <span class="text-muted">Mar
                                        26</span></label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="dpWeek" name="dpFilter" value="2">
                                <label class="custom-control-label d-flex justify-content-between"
                                    for="dpWeek"><span>This Week</span> <span class="text-muted">Mar
                                        21-27</span></label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="dpMonth" name="dpFilter" value="3"
                                    checked=""> <label class="custom-control-label d-flex justify-content-between"
                                    for="dpMonth"><span>This Month</span> <span class="text-muted">Mar
                                        1-31</span></label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="dpYear" name="dpFilter" value="4">
                                <label class="custom-control-label d-flex justify-content-between"
                                    for="dpYear"><span>This Year</span> <span class="text-muted">2018</span></label>
                            </div><!-- /.custom-control -->
                            <!-- .custom-control -->
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" id="dpCustom" name="dpFilter"
                                    value="5"> <label class="custom-control-label" for="dpCustom">Custom</label>
                                <div class="custom-control-hint my-1">
                                    <!-- datepicker:range -->
                                    <input type="text" class="form-control flatpickr-input" data-toggle="flatpickr"
                                        data-mode="range" data-date-format="Y-m-d" readonly="readonly">
                                    <!-- /datepicker:range -->
                                </div>
                            </div><!-- /.custom-control -->
                        </div><!-- /.dropdown-menu -->
                    </div>
                </div>
            </div>
        </div>
        <div class="section-block">
            <!-- grid row -->
            <div class="row">
                <!-- grid column -->
                <div class="col-lg-6">
                    <!-- .list-group -->
                    <div class="list-group list-group-media mb-3">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="list-group-item-figure rounded-left">
                                <img src="assets/images/dummy/img-5.jpg" alt="placeholder image">
                            </div>
                            <div class="list-group-item-body">
                                <h4 class="list-group-item-title"> Expanding Your Home Network’s Reach </h4>
                                <p class="list-group-item-text"> A incidunt, corrupti. Quasi, incidunt ab, vel quidem
                                    debitis fuga? Delectus, ipsam... </p>
                            </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                            <div class="list-group-item-figure rounded-left">
                                <img src="assets/images/dummy/img-1.jpg" alt="placeholder image">
                            </div>
                            <div class="list-group-item-body">
                                <h4 class="list-group-item-title"> The Wealth of New Choices With Robot Vacuum Cleaners
                                </h4>
                                <p class="list-group-item-text"> Fugiat beatae vel neque, minus voluptatum in. Placeat
                                    repellat qui impedit, consectetur... </p>
                            </div>
                        </a>
                    </div><!-- /.list-group -->
                </div><!-- /grid column -->
                <!-- grid column -->
                <div class="col-lg-6">
                    <!-- .list-group -->
                    <div class="list-group list-group-media mb-3">
                        <a href="#" class="list-group-item list-group-item-action">
                            <div class="list-group-item-figure rounded-left">
                                <img src="assets/images/dummy/img-4.jpg" alt="placeholder image">
                            </div>
                            <div class="list-group-item-body">
                                <h4 class="list-group-item-title"> Meet the People Who Train the Robots </h4>
                                <p class="list-group-item-text"> Veritatis dicta expedita dolorem repudiandae nemo odit
                                    quos optio vero libero quia... </p>
                            </div>
                        </a> <a href="#" class="list-group-item list-group-item-action">
                            <div class="list-group-item-figure rounded-left">
                                <img src="assets/images/dummy/img-2.jpg" alt="placeholder image">
                            </div>
                            <div class="list-group-item-body">
                                <h4 class="list-group-item-title"> Daily Report: Cloud Computing Asserts Itself </h4>
                                <p class="list-group-item-text"> Reprehenderit iure et, fugit libero harum doloremque
                                    culpa... </p>
                            </div>
                        </a>
                    </div><!-- /.list-group -->
                </div><!-- /grid column -->
            </div><!-- /grid row -->
        </div>
    </div><!-- /.page-section -->
</div><!-- /.page-inner -->
@endsection
