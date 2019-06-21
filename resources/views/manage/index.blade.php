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
              <h6 class="card-header"> Organization List </h6><!-- .card-body -->
              <div class="list-group list-group-flush list-group-divider">
                <!-- .list-group-item -->
                <div class="list-group-item">
                  <div class="list-group-item-figure">
                    <a href="page-team.html" class="user-avatar user-avatar-md"><img src="assets/images/avatars/team4.jpg" alt=""></a>
                  </div>
                  <div class="list-group-item-body">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                      <div class="team">
                        <h4 class="list-group-item-title">
                          <a href="page-team.html">Creative Division</a>
                        </h4>
                        <p class="list-group-item-text"> Updated 1 hour ago </p>
                      </div>
                      <ul class="list-inline text-muted mb-0">
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Members">
                          <i class="fas fa-users text-teal"></i> 8 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Clients">
                          <i class="fas fa-user-tie text-pink"></i> 3 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Projects">
                          <i class="fa fa-bookmark text-yellow"></i> 4 </li>
                        <li class="list-inline-item" data-toggle="tooltip" title="" data-original-title="Private">
                          <i class="fa fa-lock"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="list-group-item-figure">
                    <a href="#" class="btn btn-sm btn-icon btn-secondary stop-propagation"><i class="fas fa-ellipsis-h"></i></a>
                  </div>
                </div><!-- /.list-group-item -->
                <!-- .list-group-item -->
                <div class="list-group-item">
                  <div class="list-group-item-figure">
                    <a href="page-team.html" class="user-avatar user-avatar-md"><img src="assets/images/avatars/bootstrap.svg" alt=""></a>
                  </div>
                  <div class="list-group-item-body">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                      <div class="team">
                        <h4 class="list-group-item-title">
                          <a href="page-team.html">Bootstrap</a> <a href="page-team.html" class="mention ml-1">Owner</a>
                        </h4>
                        <p class="list-group-item-text"> Updated 25 minutes ago </p>
                      </div>
                      <ul class="list-inline text-muted mb-0">
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Members">
                          <i class="fas fa-users text-teal"></i> 15 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Clients">
                          <i class="fas fa-user-tie text-pink"></i> 28 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Projects">
                          <i class="fa fa-bookmark text-yellow"></i> 40 </li>
                        <li class="list-inline-item" data-toggle="tooltip" title="" data-original-title="Public">
                          <i class="fa fa-globe"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="list-group-item-figure">
                    <a href="#" class="btn btn-sm btn-icon btn-secondary stop-propagation"><i class="fas fa-ellipsis-h"></i></a>
                  </div>
                </div><!-- /.list-group-item -->
                <!-- .list-group-item -->
                <div class="list-group-item">
                  <div class="list-group-item-figure">
                    <a href="page-team.html" class="user-avatar user-avatar-md"><img src="assets/images/avatars/instagram.svg" alt=""></a>
                  </div>
                  <div class="list-group-item-body">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                      <div class="team">
                        <h4 class="list-group-item-title">
                          <a href="page-team.html">Instagram</a>
                        </h4>
                        <p class="list-group-item-text"> Updated 13 hours ago </p>
                      </div>
                      <ul class="list-inline text-muted mb-0">
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Members">
                          <i class="fas fa-users text-teal"></i> 6 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Clients">
                          <i class="fas fa-user-tie text-pink"></i> 10 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Projects">
                          <i class="fa fa-bookmark text-yellow"></i> 18 </li>
                        <li class="list-inline-item" data-toggle="tooltip" title="" data-original-title="Public">
                          <i class="fa fa-globe"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="list-group-item-figure">
                    <a href="#" class="btn btn-sm btn-icon btn-secondary stop-propagation"><i class="fas fa-ellipsis-h"></i></a>
                  </div>
                </div><!-- /.list-group-item -->
                <!-- .list-group-item -->
                <div class="list-group-item">
                  <div class="list-group-item-figure">
                    <a href="page-team.html" class="user-avatar user-avatar-md"><img src="assets/images/avatars/team1.jpg" alt=""></a>
                  </div>
                  <div class="list-group-item-body">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                      <div class="team">
                        <h4 class="list-group-item-title">
                          <a href="page-team.html">Stilearning</a>
                        </h4>
                        <p class="list-group-item-text"> Updated 6 days ago </p>
                      </div>
                      <ul class="list-inline text-muted mb-0">
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Members">
                          <i class="fas fa-users text-teal"></i> 24 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Clients">
                          <i class="fas fa-user-tie text-pink"></i> 19 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Projects">
                          <i class="fa fa-bookmark text-yellow"></i> 31 </li>
                        <li class="list-inline-item" data-toggle="tooltip" title="" data-original-title="Private">
                          <i class="fa fa-lock"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="list-group-item-figure">
                    <a href="#" class="btn btn-sm btn-icon btn-secondary stop-propagation"><i class="fas fa-ellipsis-h"></i></a>
                  </div>
                </div><!-- /.list-group-item -->
                <!-- .list-group-item -->
                <div class="list-group-item">
                  <div class="list-group-item-figure">
                    <a href="page-team.html" class="user-avatar user-avatar-md"><img src="assets/images/avatars/sketch.svg" alt=""></a>
                  </div>
                  <div class="list-group-item-body">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                      <div class="team">
                        <h4 class="list-group-item-title">
                          <a href="page-team.html">Sketch</a> <a href="page-team.html" class="mention ml-1">Owner</a>
                        </h4>
                        <p class="list-group-item-text"> Updated 1 week ago </p>
                      </div>
                      <ul class="list-inline text-muted mb-0">
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Members">
                          <i class="fas fa-users text-teal"></i> 2 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Clients">
                          <i class="fas fa-user-tie text-pink"></i> 12 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Projects">
                          <i class="fa fa-bookmark text-yellow"></i> 13 </li>
                        <li class="list-inline-item" data-toggle="tooltip" title="" data-original-title="Private">
                          <i class="fa fa-lock"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="list-group-item-figure">
                    <a href="#" class="btn btn-sm btn-icon btn-secondary stop-propagation"><i class="fas fa-ellipsis-h"></i></a>
                  </div>
                </div><!-- /.list-group-item -->
                <!-- .list-group-item -->
                <div class="list-group-item">
                  <div class="list-group-item-figure">
                    <a href="page-team.html" class="user-avatar user-avatar-md"><img src="assets/images/avatars/gitlab.svg" alt=""></a>
                  </div>
                  <div class="list-group-item-body">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                      <div class="team">
                        <h4 class="list-group-item-title">
                          <a href="page-team.html">Gitlab</a>
                        </h4>
                        <p class="list-group-item-text"> Updated 2 hours ago </p>
                      </div>
                      <ul class="list-inline text-muted mb-0">
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Members">
                          <i class="fas fa-users text-teal"></i> 4 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Clients">
                          <i class="fas fa-user-tie text-pink"></i> 16 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Projects">
                          <i class="fa fa-bookmark text-yellow"></i> 21 </li>
                        <li class="list-inline-item" data-toggle="tooltip" title="" data-original-title="Private">
                          <i class="fa fa-lock"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="list-group-item-figure">
                    <a href="#" class="btn btn-sm btn-icon btn-secondary stop-propagation"><i class="fas fa-ellipsis-h"></i></a>
                  </div>
                </div><!-- /.list-group-item -->
                <!-- .list-group-item -->
                <div class="list-group-item">
                  <div class="list-group-item-figure">
                    <a href="page-team.html" class="user-avatar user-avatar-md"><img src="assets/images/avatars/slack.svg" alt=""></a>
                  </div>
                  <div class="list-group-item-body">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                      <div class="team">
                        <h4 class="list-group-item-title">
                          <a href="page-team.html">Slack</a>
                        </h4>
                        <p class="list-group-item-text"> Updated 58 minutes ago </p>
                      </div>
                      <ul class="list-inline text-muted mb-0">
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Members">
                          <i class="fas fa-users text-teal"></i> 14 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Clients">
                          <i class="fas fa-user-tie text-pink"></i> 5 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Projects">
                          <i class="fa fa-bookmark text-yellow"></i> 8 </li>
                        <li class="list-inline-item" data-toggle="tooltip" title="" data-original-title="Public">
                          <i class="fa fa-globe"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="list-group-item-figure">
                    <a href="#" class="btn btn-sm btn-icon btn-secondary stop-propagation"><i class="fas fa-ellipsis-h"></i></a>
                  </div>
                </div><!-- /.list-group-item -->
                <!-- .list-group-item -->
                <div class="list-group-item">
                  <div class="list-group-item-figure">
                    <a href="page-team.html" class="user-avatar user-avatar-md"><img src="assets/images/avatars/team2.png" alt=""></a>
                  </div>
                  <div class="list-group-item-body">
                    <div class="d-sm-flex justify-content-sm-between align-items-sm-center">
                      <div class="team">
                        <h4 class="list-group-item-title">
                          <a href="page-team.html">Openlane</a>
                        </h4>
                        <p class="list-group-item-text"> Updated 16 hours ago </p>
                      </div>
                      <ul class="list-inline text-muted mb-0">
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Members">
                          <i class="fas fa-users text-teal"></i> 5 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Clients">
                          <i class="fas fa-user-tie text-pink"></i> 2 </li>
                        <li class="list-inline-item mr-3" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Projects">
                          <i class="fa fa-bookmark text-yellow"></i> 3 </li>
                        <li class="list-inline-item" data-toggle="tooltip" title="" data-original-title="Public">
                          <i class="fa fa-globe"></i>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="list-group-item-figure">
                    <a href="#" class="btn btn-sm btn-icon btn-secondary stop-propagation"><i class="fas fa-ellipsis-h"></i></a>
                  </div>
                </div><!-- /.list-group-item -->
              </div>
            </div><!-- /.card -->
            <!-- .card -->
          </div><!-- /grid column -->
        </div><!-- /grid row -->
      </div>
</div><!-- /.page-inner -->
@endsection

