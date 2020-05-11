@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center clearfix shadow-sm">
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
                @if (isset($post))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ isset($post) ? $post->title : '' }}">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" name="description" class="form-control" value="{{ isset($post) ? $post->description : ''}}">
                </div>

                <div class="form-group">
                    <label for="content">content</label>
                    <input id="content" type="hidden" name="content" value="{{isset($post) ? $post->content : ""}}">
                    <trix-editor input="content"></trix-editor>
                </div>

                <div class="form-group">
                    <label for="date">Published At</label>
                    <input type="text" name="published_at" class="form-control" value="{{ isset($post) ? $post->published_at : "Date of published_at"}}" id="published_at">
                </div>

                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}"
                                @if (isset($post))
                                    @if ($category->id == $post->category_id)
                                        selected
                                    @endif
                                @endif    
                            >{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                @if (isset($post))
                    <div class="form-group">
                        <label for="show-image">Current image</label>
                        <img src="{{ URL::to('/') }}/storage/{{$post->image}}" alt="Image" width="100%">                        
                    </div>
                @endif

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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script type="text/javascript" src="{{ asset('js/trix.js') }}" defer></script>

    <script>
        flatpickr('#published_at', {
            enableTime: true,
        });
    </script>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/trix.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection