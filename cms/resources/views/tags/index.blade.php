@extends('layouts.app')

@section('content')
    <div class="card boba-card">
        <div class="card-header text-center clearfix shadow-sm">Tags <span class="float-right"><a class="text-dark" href="{{route('tags.create')}}">Add</a></span></div>
        <div class="card-body">
            @if ($tags->count()) 
                <table class="table table-hover">
                    <thead>
                    <tr class="text-center">
                        <th>#Id</th>
                        <th>Name</th>
                        <th>Post Count</th> 
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{$tag->id}}</td>
                                <td>{{$tag->name}}</td>
                                <td>0</td>
                                <td><a href="{{route('tags.edit', $tag->id)}}" class="btn btn-block btn-outline-info" >Edit</a></td>
                                <td><button class="btn btn-block btn-outline-danger" onclick="handleDelete( {{ $tag->id }} )">Delete</button></td>
                            </tr>                        
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-center">No tag found in database, please add a tag for displaying post</h3>
            @endif
           
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
                    <h4 class="modal-title">Delete Tag</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
            
                    <!-- Modal body -->
                    <div class="modal-body text-center">
                        <strong>Are you sure to delete tag</strong>
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
            form.action = '/tags/' + id;
            console.log(form)
            $("#deleteModal").modal('show');
        }
    </script>    
@endsection