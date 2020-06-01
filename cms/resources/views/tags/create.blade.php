@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center clearfix">
            {{isset($tag) ? "Edit Tag" : "Create Tag"}}
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
            <form action="{{isset($tag) ? route('tags.update', $tag->id) : route('tags.store')}}" method="post">
                @csrf
                @if (isset($tag))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="{{isset($tag) ? $tag->name : 'Name of tag'}}">
                </div>

                <div class="form-group">
                <button class="btn btn-block btn-outline-secondary" type="submit" >{{isset($tag) ? "Update Tag" : "Add Tag"}}</button>
                </div>
            </form>
        </div>
    </div>
    
@endsection