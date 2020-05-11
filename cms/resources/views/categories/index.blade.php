@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center bg-secondary text-white clearfix">Category <span class="float-right"><a class="text-white" href="{{route('category.create')}}">Add</a></span></div>
        <div class="card-body">
            @if ($categories->count()) 
                <table class="table table-hover">
                    <thead>
                    <tr class="text-center">
                        <th>#Id</th>
                        <th>Name</th>
                        {{-- <th>Post Count</th> --}}
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                {{-- <td>{{ $category->posts->count() }}</td> Not working but why? --}}
                                <td><a href="{{route('category.edit', $category->id)}}" class="btn btn-block btn-outline-info" >Edit</a></td>
                                <td><button class="btn btn-block btn-outline-danger" onclick="handleDelete({{$category->id}})">Delete</button></td>
                            </tr>                        
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-center">No category found in database, please add a category for displaying post</h3>
            @endif
            <div class="d-flex justify-content-center">{{ $categories->links() }}</div>
        </div>
    </div>

    <!-- The Modal -->
    <div class="modal" id="deleteModal">
        <div class="modal-dialog">
            <form action="" method="post" id="deleteCategoryForm">
                @csrf
                @method('DELETE')

                <div class="modal-content">
        
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Delete Category</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
            
                    <!-- Modal body -->
                    <div class="modal-body text-center">
                        <strong>Are you sure to delete category</strong>
                    </div>
            
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </div>
            
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function handleDelete(id) {
            var form = document.getElementById('deleteCategoryForm');
            form.action = '/category/' + id;
            console.log(form)
            $("#deleteModal").modal('show');
        }
    </script>    
@endsection