@extends('includes.theme')




@section('content')


<div id="content-wrapper">

	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Attendance</a>
			</li>
			<li class="breadcrumb-item active">Overview</li>
		</ol>

		@foreach($project as $p)

		{{$p->project_id}}
		{{$p->project_name}}


		@endforeach
	</div>
</div>
<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

</div>




@endsection()




