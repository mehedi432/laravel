@extends('front.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card boba-card shadow">
                
                <div class="card-body">
                    <p  style="margin-bottom: 0%; margin-top: 0%; font-family: 'Raleway', sans-serif; letter-spacing: 1.6pt; text-align: center; font-weight: bolder; font-size: 21px">{{Str::limit($post->title, 987)}}</p>
                    <p class=" text-center" style="margin-bottom: 0%; margin-top: 0%; font-family: 'Raleway', sans-serif; letter-spacing: 1.6pt; font-weight: bolder; font-size: 13px">{{$category->name}}</p>
                    <p class=" text-center" style=" margin-bottom: 0%; margin-top: 0%; font-family: 'Raleway', sans-serif; letter-spacing: 1.6pt; font-size: 13px">
                    <span class="txt-rotate"
                        data-period="2000"
                        data-rotate='[ "Written By Mehedi Abdullah !" ]'>
                    </span>
                    </p>
                    <p style="margin-bottom: 0%; margin-top: 0%; font-family: 'Raleway', sans-serif; letter-spacing: 2pt; text-align: center; font-size: 13px">{{ $post->created_at->diffForHumans() }}
                    </p>
                    
                    <hr>

                    <p class="" style="font-family: 'Raleway', sans-serif; letter-spacing: 1.6pt; text-align: center">{{Str::limit($post->description, 987)}}</p>
                </div>
                <div class="clearfix">
                    <form action="{{route('blog.index')}}" method="get">
                        @csrf
                        <button style="letter-spacing: 1.6pt; font-family: 'Raleway', sans-serif" type="submit" class="btn text-dark float-left"><i class="material-icons">arrow_back</i></button>
                    </form>
                </div>
            </div>
            <br>
        </div>
    </div>
@endsection


