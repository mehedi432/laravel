@extends('includes.theme')




@section('content')


<div id="content-wrapper">

	<div class="container-fluid">
  <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Members</h2>
                                    {{-- <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>add item</button> --}}
                                </div>
                            </div>
                        </div>
		<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Edit</a>
			</li>
			<li class="breadcrumb-item active">Members</li>
		</ol>

		
	</div>
</div>



{{-- ??????????????????????????????????????????????????????????????????????????????? --}}

<form action='{{url("member/{$member->id}")}}'  method="post" novalidate="novalidate">
	@method('PUT')
	@csrf
	<div class="form-group">
		<label class="control-label mb-1">Member Id</label>
		<input  name="member_id" type="text" class="form-control"  value="{{$member->member_id}}">
	</div>
	<div class="form-group">
		<label class="control-label mb-1">Member Name</label>
		<input  name="member_name" type="text" class="form-control"  value="{{$member->member_name}}">
	</div>
	<div class="form-group has-success">
		<label for="cc-name" class="control-label mb-1">Role</label>
		<input  name="role" type="text" class="form-control"  
		 value="{{$member->role}}">
		
	</div>
	
	<div class="row">
		
		
	</div>
	<div>
		<button type="submit" class="btn btn-lg btn-info btn-block">
			<i class="fa fa-box fa-lg"></i>&nbsp;
			
		</button>
	</div>
</form>


{{-- ????????????????????????????????????????????????????????????????????????????? --}}




</div>

</div>




@endsection()