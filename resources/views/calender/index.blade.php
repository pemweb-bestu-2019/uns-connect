@extends('layouts.app')

@section('page-inner')
<div class="page-inner container">
	<!-- .page-title-bar -->
	<!-- .page-title-bar -->
	<header class="page-title-bar">
		<!-- page title stuff goes here -->
		<h1 class="page-title"> Events Calender</h1>
	</header><!-- /.page-title-bar -->
	<div class="page-inner page-inner-fill">
		<!-- .page-navs -->
		<nav class="page-navs pr-3">
			<div class="btn-group">
				<button id="calendar-prev" class="btn btn-secondary"><i class="fa fa-chevron-left"></i></button> <button id="calendar-today" class="btn btn-secondary">Today</button> <button id="calendar-next" class="btn btn-secondary"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="ml-auto">
				<button type="button" class="btn btn-success">Add event</button> <button type="button" class="btn btn-secondary d-xl-none" data-toggle="sidebar"><i class="fas fa-tasks"></i></button>
			</div>
		</nav><!-- /.page-navs -->
		<!-- .board -->
		<div class="board">
			<div class="card">
				<div id="calendar" class="c fc-bootstrap4 fc-ltr"></div>
			</div>
		</div><!-- /.board -->
	</div>
</div><!-- /.page-inner -->
@endsection
