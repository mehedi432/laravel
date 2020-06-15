@extends('front.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="card boba-card shadow">
                    <img class="card-img-top" src="storage/{{$post->image}}" alt="Image">
                    <div class="card-body">
                        <p style="font-family: 'Raleway', sans-serif; letter-spacing: 1.6pt; text-align: center">{{Str::limit($post->title, 60)}}</p>
                    </div>
                    <button style=" letter-spacing: 1.6pt; font-family: 'Raleway', sans-serif" type="submit" class="btn btn-block shadow bg-dark text-white">Read More</button>
                </div>
                <br>
            </div>
            @endforeach
        </div>
    </div>
@endsection


