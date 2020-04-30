@extends('includes.theme')




@section('content')


<div id="content-wrapper">

	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<div class="row">
	<div class="col-lg-6">
		<h2>Project Task</h2>
	</div>
	<div class="col-lg-4">
		
	</div>
	<div class="col-lg-2">
		<h5> 
			<a href="{{ url('project_task/create') }}">
				<button  type="button" class="btn btn-success" style="position:relative;">Create Project Task</button>
			</a>
			
		</h5>
	</div>
	</div>
</div>


<table class="table table-borderless table-striped table-earning">
	<thead>
		<th>Project Id</th>
		<th>Module ID</th>
		<th>Member ID</th>
		<th>Message Subject</th>
		<th>Message Text</th>
		<th>Comments</th>
		<th>Task Percentage</th>
		<th>Edit</th>
		<th>Delete</th>
		
     

	</thead>

	@foreach($pj as $p)
	<tbody>
		<td>{{$p->project_id}}</td>
		<td>{{$p->module_id}}</td>
		<td>{{$p->member_id}}</td>
		<td>{{$p->message_subject}}</td>
		<td>{{$p->message_text}}</td>
		<td>{{$p->comments}}</td>
		<td>{{$p->task_percentage}}</td>

		<td>
			<a class="edit-link" onclick="fn()" href='{{ url("project_task/$p->id/edit") }}'><button type="button" class="btn btn-primary">Edit</button></a>
			<script type="text/javascript">
				function fn(){
					$(document).on("click", ".edit-link", function() {
						window.location=$(this).attr('href');
					});
				}
			</script>
		</td>
		<td>
			<form action='{{ url("project_task/$p->id") }}' method="post"> 
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
		

	</tbody>

	@endforeach    	



</table>



<div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

</div>




@endsection()




