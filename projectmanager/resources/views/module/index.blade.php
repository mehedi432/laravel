@extends('includes.theme')




@section('content')


<div id="content-wrapper">

	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<div class="row">
	<div class="col-lg-6">
		<h2>Modules</h2>
	</div>
	<div class="col-lg-4">
		
	</div>
	<div class="col-lg-2">
		<h5> 
			<a href="{{ url('module/create') }}">
				<button type="button" class="btn btn-success" style="position:relative;">Create module</button>
			</a>
			<script type="text/javascript">
				function fn(){
					$(document).on("click", ".edit-link", function() {
						window.location=$(this).attr('href');
					});
				}
			</script>
		</h5>
	</div>
	</div>
</div>


<table class="table table-borderless table-striped table-earning">
	<thead>
		<th>Project Id</th>
		<th>Module Id</th>
		<th>Module Name</th>
		<th>Edit</th>
		<th>Delete</th>
		<th>Module Status</th>
		<th>Assigned Members</th>

	</thead>

	@foreach($module as $a)
	<tbody>
		<td>{{$a->project_id}}</td>
		<td>{{$a->module_id}}</td>
		<td>{{$a->module_name}}</td>

		<td>
			<a class="edit-link" onclick="fn()" href='{{ url("module/$a->id/edit") }}'><button type="button" class="btn btn-primary">Edit</button></a>
			<script type="text/javascript">
				function fn(){
					$(document).on("click", ".edit-link", function() {
						window.location=$(this).attr('href');
					});
				}
			</script>
		</td>
		<td>
			<form action='{{ url("module/$a->id") }}' method="post"> 
				@method('Delete')
				@csrf
				<button onclick="delfn(this)" type="submit" class="btn btn-danger">Delete</button> 
				<script type="text/javascript">
						function delfn() {
						  confirm("Do you want to delete");
						}
				</script>
			</form>
		</td>
		<td>
			 <div class="progress mb-3">
                <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: 75%" aria-valuenow="69"
                aria-valuemin="0" aria-valuemax="100"></div>
            </div> 
		</td>
		<td>Sadat,Shohel</td>

	</tbody>

	@endforeach    	



</table>




</div>

</div>




@endsection()




