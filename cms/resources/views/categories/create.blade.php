@extends('layouts.app')

@section('content')
    <div class="card boba-card">
        <div class="card-header boba-card-header text-center clearfix">
            {{isset($category) ? "Edit Category" : "Create Category"}}
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    </ul>
                </div>
                
            @endif
            <form action="{{isset($category) ? route('category.update', $category->id) : route('category.store')}}" method="post">
                @csrf
                @if (isset($category))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="{{isset($category) ? $category->name : "Name of category"}}">
                </div>

                <div class="form-group">
                <button class="btn btn-block btn-outline-secondary" type="submit" >{{isset($category) ? "Update Category" : "Add Category"}}</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection