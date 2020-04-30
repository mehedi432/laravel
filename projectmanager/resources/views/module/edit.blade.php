@extends('includes.theme')




@section('content')


<div id="content-wrapper">

	<div class="container-fluid">
  <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Modules</h2>
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
			<li class="breadcrumb-item active">Modules</li>
		</ol>

		
	</div>
</div>



{{-- ??????????????????????????????????????????????????????????????????????????????? --}}

<form action='{{url("module/{$module->id}")}}'  method="post" novalidate="novalidate">
	@method('PUT')
	@csrf
	<div class="row form-group">

                    		<div class="col-12 col-md-12">
                    			<label class="control-label mb-1">Project Id</label>
                    			<select name="project_id" id="select" class="form-control">
                    				<option value="select">Select</option>
                    				@foreach($pr as $p)
                    				<option value="{{$p->project_id}}">{{$p->project_id}}</option>
                    				@endforeach
                    			</select>
                    		</div>
                    	</div>
	<div class="form-group">
		<label class="control-label mb-1">Module Id</label>
		<input  name="module_id" type="text" class="form-control"  value="{{$module->module_id}}">
	</div>
	<div class="form-group has-success">
		<label for="cc-name" class="control-label mb-1">Module Name</label>
		<input  name="module_name" type="text" class="form-control"  
		 value="{{$module->module_name}}">
		
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