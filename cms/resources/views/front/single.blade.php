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
@endsection


