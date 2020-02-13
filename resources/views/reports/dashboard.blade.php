@extends('layouts.plain')

@section('content')
	<div class="d-flex align-items-stretch">
		
		@include('reports.sidebar')

        <!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5">
			<h2 class="mb-4">CalPro - Dashboard</h2>
			
			<div class="row">
				<div class="col-4">
					<div class="card weather-card">
					  <div class="card-body pb-3">
					    <h4 class="card-title font-weight-bold">Total Reports</h4>
					    <p class="card-text">Mon, 12:30 PM</p>
					    <div class="d-flex justify-content-between">
					      <p class="display-1 degree">{{count($reports)}}</p>
					      <i class="fa fa-file-text-o fa-5x pt-3 amber-text"></i>
					    </div>
					    <div class="d-flex justify-content-between mb-4">
					      <p><i class="fa fa-tint fa-lg text-info pr-2"></i>3% Precipitation</p>
					      <p><i class="fa fa-percent fa-lg grey-text pr-2"></i>21% More</p>
					    </div>
					    <div class="progress md-progress">
					      <div class="progress-bar black" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
					    </div>

					  </div>

					</div>
				</div>
				<div class="col-4">
					<div class="card weather-card">
					  <div class="card-body pb-3">
					    <h4 class="card-title font-weight-bold">Total Users</h4>
					    <p class="card-text">Mon, 12:30 PM</p>
					    <div class="d-flex justify-content-between">
					      <p class="display-1 degree">{{count($users)}}</p>
					      <i class="fa fa-file-text-o fa-5x pt-3 amber-text"></i>
					    </div>
					    <div class="d-flex justify-content-between mb-4">
					      <p><i class="fa fa-tint fa-lg text-info pr-2"></i>3% Precipitation</p>
					      <p><i class="fa fa-percent fa-lg grey-text pr-2"></i>21% More</p>
					    </div>
					    <div class="progress md-progress">
					      <div class="progress-bar black" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
					    </div>

					  </div>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
