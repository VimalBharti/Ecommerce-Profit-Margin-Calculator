@extends('layouts.plain')

@section('content')
	<div class="d-flex align-items-stretch">

		@include('reports.sidebar')

        <!-- Page Content  -->
		<div id="content" class="pl-5 pr-5 pb-5">
			<home></home>
		</div>
	</div>
@endsection
