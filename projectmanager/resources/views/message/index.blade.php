@extends('includes.theme')




@section('content')


<div id="content-wrapper">

	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<div class="row">
	<div class="col-lg-6">
		<h2>Message</h2>
	</div>
	<div class="col-lg-4">
		
	</div>
	<div class="col-lg-2">
		<h5> 
			<a href="{{ url('message/create') }}">
				<button type="button" class="btn btn-success" style="position:relative;">Create Message</button>
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
		<th>Message Subject</th>
		<th>Message Text</th>
		<th>Member ID</th>
		<th>Edit</th>
		<th>Delete</th>
		

	</thead>

	@foreach($message as $a)
	<tbody>
		<td>{{$a->project_id}}</td>
		<td>{{$a->module_id}}</td>
		<td>{{$a->message_subject}}</td>
		<td>{{$a->message_text}}</td>
		<td>{{$a->member_id}}</td>
		

		<td>
			<a class="edit-link" onclick="fn()" href='{{ url("message/$a->id/edit") }}'><button type="button" class="btn btn-primary">Edit</button></a>
			<script type="text/javascript">
				function fn(){
					$(document).on("click", ".edit-link", function() {
						window.location=$(this).attr('href');
					});
				}
			</script>
		</td>
		<td>
			<form action='{{ url("message/$a->id") }}' method="post"> 
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




</div>

</div>




@endsection()




