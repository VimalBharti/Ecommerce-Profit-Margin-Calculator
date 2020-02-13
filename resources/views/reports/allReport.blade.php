@extends('layouts.plain')

@section('content')
	<div class="d-flex align-items-stretch">
		
		@include('reports.sidebar')

        <!-- Page Content  -->
		<div id="content" class="p-4 p-md-5 pt-5 all-report-page">
			<h2 class="mb-4">All Reports</h2>
			<div class="row">
				@foreach($reports as $report)
				<div class="col-sm-3 d-flex single-report-card">
					<div class="card">
					  <div class="card-body">
					    <h5 class="card-title mb-1">{{$report->title}}</h5>
					    <p class="card-text"><i class="fa fa-clock-o pr-2"></i>{{$report->created_at->format('d(D), M-Y')}}</p>
					  </div>
					  <ul class="list-group list-group-flush">
					    <li class="list-group-item">
					    	<strong>Profit P. Delivered: </strong>
					    	<span class="ml-3">{{$report->profitperdelivered}}</span>
					    </li>
					    <li class="list-group-item">
					    	<strong>Total Profit: </strong>
					    	<span class="ml-3">{{$report->totalprofit}}</span>
					    </li>
					  </ul>
					  <div class="card-body">
					  	<a href="{{route('singleReport', $report->id)}}" class="btn btn-block btn-outline-secondary">View Report</a>
					  </div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
@endsection
