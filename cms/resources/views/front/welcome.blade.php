@extends('front.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card boba-card shadow">
                
                <div class="card-body">
                    <p  style="font-family: 'Raleway', sans-serif; letter-spacing: 1.6pt; text-align: center; font-weight: bolder; font-size: 21px">{{Str::limit($post->title, 987)}}</p>
                    <p class=" text-center" style="font-family: 'Raleway', sans-serif; letter-spacing: 1.6pt; font-weight: bolder; font-size: 13px">{{$category->name}}</p>
                    <p class="" style="font-family: 'Raleway', sans-serif; letter-spacing: 1.6pt; text-align: center">{{Str::limit($post->description, 987)}}</p>
                </div>
                <div class="clearfix">
                <form action="{{route('blog.show', $post->id)}}" method="get">
                    @csrf
                    <button style="letter-spacing: 1.6pt; font-family: 'Raleway', sans-serif" type="submit" class="btn text-dark float-right"><i class="material-icons">arrow_right_alt</i></button>
                </form>
                </div>
            </div>
            <br>
        </div>
    </div>

    <div class="row justify-content-center">
        @foreach ($posts as $post)
            <div class="col-md-4">
                <div class="card boba-card shadow">
                    <img class="card-img-top" src="storage/{{$post->image}}" alt="Image">
                    <div class="card-body">
                        <p class="" style="font-family: 'Raleway', sans-serif; letter-spacing: 1.6pt; text-align: center">{{Str::limit($post->title, 60)}}</p>
                        <div style="margin-bottom: 0%; margin-top: 0%">
                            <p class="text-center font-weight-bolder" style="font-size: 13px; font-family: 'Raleway', sans-serif; letter-spacing: 1.6pt; text-align: center">{{$category->name}}</p>
                        </div>
                    </div>
                    <div>
                        <form action="{{route('blog.show', $post->id)}}" method="get">
                            @csrf
                            <button style="letter-spacing: 1.6pt; font-family: 'Raleway', sans-serif" type="submit" class="btn btn-block btn-outline-secondary text-dark float-right">Read More</button>
                        </form>
                    </div>
                </div>
                <br>
            </div>
            @endforeach
        </div>
    </div>
@endsection


