@extends('layouts.app')

@section('page-inner')
<header class="page-navs shadow-sm pr-3">
	<!-- btn-account -->
	<a href="{{ route('organizations.show') }}" class="btn-account">
		<div class="user-avatar mr-2">
			<img src="/assets/images/avatars/team4.jpg" alt="">
		</div>
		<div class="account-summary">
			<h1 class="card-title"> Creative Division </h1>
			<h6 class="card-subtitle text-muted"> 53 days left · Last update 1h </h6>
		</div>
	</a> <!-- /btn-account -->
	<!-- right actions -->
	<div class="ml-auto">
		<!-- invite members -->
		<div class="dropdown d-inline-block">
			<button type="button" class="btn btn-light btn-icon" title="Invite members" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-plus"></i></button>
			<div class="dropdown-arrow"></div><!-- .dropdown-menu -->
			<div class="dropdown-menu dropdown-menu-right dropdown-menu-rich stop-propagation">
				<div class="dropdown-header"> Add members </div>
				<div class="form-group px-3 py-2 m-0">
					<input type="text" class="form-control" placeholder="e.g. @bent10" data-toggle="tribute" data-remote="assets/data/tribute.json" data-menu-container="#people-list" data-item-template="true" data-autofocus="true"> <small class="form-text text-muted">Search people by username or email address to invite them.</small>
				</div>
				<div id="people-list" class="tribute-inline stop-propagation"></div><a href="#" class="dropdown-footer">Invite member by link <i class="far fa-clone"></i></a>
			</div><!-- /.dropdown-menu -->
		</div><!-- /invite members -->
		<button type="button" class="btn btn-light btn-icon" data-toggle="sidebar"><i class="fa fa-angle-double-left"></i></button>
	</div><!-- /right actions -->
</header>
<div class="page-inner">
	<!-- .page-title-bar -->
	<header class="page-title-bar">
		<!-- .d-flex -->
		<div class="d-flex justify-content-between align-items-center">
			<!-- .breadcrumb -->
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item active">
						<a href="{{ route('events.index') }}"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Back</a>
					</li>
				</ol>
			</nav><!-- /.breadcrumb -->
			<button type="button" class="btn btn-light btn-icon d-xl-none" data-toggle="sidebar"><i class="fa fa-angle-double-left"></i></button>
		</div><!-- /.d-flex -->
		<!-- grid row -->
		<div class="row text-center text-sm-left">
			<!-- grid column -->
			<div class="col-sm-auto col-12 mb-2">
				<span class="tile tile-xl bg-pink">SP</span>
			</div>
			<!-- grid column -->
			<div class="col">
				<h1 class="page-title"> Creative Division </h1>
				<p class="text-muted"> We make stunning and cool responsive web and app design which suitable for any
					project purpose for your business. </p>
			</div><!-- /grid column -->
		</div><!-- /grid row -->
		<!-- .nav-scroller -->
		<div class="nav-scroller border-bottom">
			<!-- .nav -->
			<div class="nav nav-tabs">
				<a class="nav-link" href="{{ route('events.show') }}">Overview</a>
				<a class="nav-link" href="page-team.html">Map</a>
				<a class="nav-link active" href="#">Registration</a>
			</div><!-- /.nav -->
		</div><!-- /.nav-scroller -->
	</header><!-- /.page-title-bar -->
	<!-- .page-section -->
	<div class="col-lg-8 offset-2">
		<!-- .card -->
		<div class="card card-fluid">
			<h6 class="card-header"> Event Registration </h6><!-- .card-body -->
			<div class="card-body">
				<form action="#" method="post">
					<fieldset>
						<div class="form-group">
							<label for="tf1">Description</label>
							
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="tf1">First Name</label>
									<input type="text" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="Himpunan Mahasiswa Komputer UNS">
									<small id="tf1Help" class="form-text text-muted">Nama lengkap dan panjang dari organisasi anda.</small>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label for="tf1">Short Name</label>
									<input type="text" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="HIMASTER">
									<small id="tf1Help" class="form-text text-muted">Nama pendek organisasi anda.</small>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="tf1">Address</label>
							<input type="text" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="">
						</div>
						<hr>
						<p>Informasi tambahan. Kamu dapat mengosongkannya dan menambahkannya dikemudian waktu.</p>
						<div class="form-group">
							<label for="tf1">Phone Number <span class="badge badge-secondary"><em>Optional</em></span></label>
							<input type="text" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="">
						</div>
						<div class="form-group">
							<label for="tf1">Website <span class="badge badge-secondary"><em>Optional</em></span></label>
							<input type="text" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="">
						</div>
						<hr>
						<div class="form-group">
							<label for="tf1">Registration Fee <span class="badge badge-secondary"><em>Optional</em></span></label>
							<input type="text" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="">
						</div>
						<div class="form-group">
							<label>Settings</label>
							<div class="custom-control custom-checkbox mb-1">
								<input type="checkbox" class="custom-control-input" id="ckb8"> <label class="custom-control-label" for="ckb8">Open organization registration</label>
								<div class="text-muted"> Membuka halaman registrasi untuk organisasi anda. Anda dapat mengubahnya dikemudian hari di laman pengaturan. </div>
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
	</div><!-- /.page-section -->
</div>
@endsection