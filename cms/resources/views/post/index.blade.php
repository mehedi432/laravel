@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center clearfix shadow-sm">Post <span class="float-right"><a class="text-dark" href="{{route('post.create')}}">Add</a></span></div>
        <div class="card-body">
            @if ($posts->count() > 0)
                <table class="table table-hover">
                    <thead>
                    <tr class="text-center">
                        <th>#Id</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Edit | Restore</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{Str::limit($post->title, 34)}}</td>
                                <td><img src="storage/{{$post->image}}" alt="Image" width="89dp" height="55dp"></td>
                                {{-- <td>
                                    <a class="btn btn-block btn-outline-info" href="{{route('category.edit', $post->category->id)}}">
                                        {{$post->category->name}}
                                    </a>
                                </td> --}}
                                <td>
                                    @if ($post->trashed())
                                        <form action="{{route('restore-posts', $post->id)}}" method="post">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-block btn-outline-info" type="submit">Restore</button>
                                        </form>
                                            
                                    @else
                                        <a href="{{route('post.edit', $post->id)}}" class="btn btn-block btn-outline-info">Edit</a>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{route('post.destroy', $post->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-block btn-outline-danger">
                                            {{$post->trashed() ? "Delete" : "Trash"}}</button>
                                    </form>
                                </td>
                            </tr>                        
                        @endforeach
                    </tbody>
                </table>
            @else
                <h3 class="text-center">No post found in database, please add a post for displaying post</h3>
            @endif
            {{-- <div class="d-flex justify-content-center">{{ $posts->links() }}</div> --}}
        </div>
    </div>
@endsection

