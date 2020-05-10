@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center clearfix bg-secondary text-white">
            {{isset($post) ? "Edit Post" : "Create Post"}}
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
            <form action="{{isset($post) ? route('post.update', $post->id) : route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @if (isset($category))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="{{isset($post) ? $post->title : 'Title of post' }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea type="text" name="description" class="form-control" placeholder="{{isset($post) ? $post->description : "Description of post"}}"></textarea>
                </div>
                <div class="form-group">
                    <label for="content">content</label>
                    <textarea type="text" name="content" class="form-control" placeholder="{{isset($post) ? $post->content : "Content of post"}}"></textarea>
                </div>

                <div class="form-group">
                    <label for="date">Published At</label>
                    <input type="date" name="published_at" class="form-control" placeholder="{{isset($post) ? $post->published_at : "Date of published_at"}}">
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" class="form-control" placeholder="{{isset($post) ? $post->name : "Image of post"}}">
                </div>

                <div class="form-group">
                    <button class="btn btn-block btn-outline-secondary" type="submit" >{{isset($post) ? "Update Post" : "Add Post"}}</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/trix.js') }}" defer></script>
@endsection