@extends('includes.theme')




@section('content')


<div id="content-wrapper">

	<div class="container-fluid">

		<!-- Breadcrumbs-->
		<div class="row">
	<div class="col-lg-6">
		<h2>Members</h2>
	</div>
	<div class="col-lg-4">
		
	</div>
	<div class="col-lg-2">
		<h5> 
			<a href="{{ url('member/create') }}">
				<button type="button" class="btn btn-success" style="position:relative;">Create Member</button>
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
		<th>Member Id</th>
		<th>Member Name</th>
		<th>Role</th>
		<th>Edit</th>
		<th>Delete</th>
		

	</thead>

	@foreach($member as $a)
	<tbody>
		<td>{{$a->member_id}}</td>
		<td>{{$a->member_name}}</td>
		<td>{{$a->role}}</td>

		<td>
			<a class="edit-link" onclick="fn()" href='{{ url("member/$a->id/edit") }}'><button type="button" class="btn btn-primary">Edit</button></a>
			<script type="text/javascript">
				function fn(){
					$(document).on("click", ".edit-link", function() {
						window.location=$(this).attr('href');
					});
				}
			</script>
		</td>
		<td>
			<form action='{{ url("member/$a->id") }}' method="post"> 
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




