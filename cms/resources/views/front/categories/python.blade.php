@extends('front.layouts.app')
@section('content')

<div class="row justify-content-center">
    @foreach ($posts as $post)
        <div class="col-md-4">
            <div class="card boba-card shadow">
                <img src="{{ URL::to('/') }}/storage/{{$post->image}}" alt="Image" height="144px">                        
                <div class="card-body">
                    <p class="" style="margin-bottom: 0%; margin-top: 0%; font-family: 'Raleway', sans-serif; letter-spacing: 1.6pt; text-align: center">{{Str::limit($post->title, 60)}}</p>
                    <div >
                        {{-- <p style="margin-bottom: 0%; margin-top: 0%" class="text-center font-weight-bolder" style="font-size: 13px; font-family: 'Raleway', sans-serif; letter-spacing: 1.6pt; text-align: center">{{$category->name}}</p> --}}
                        <p style="margin-bottom: 0%; margin-top: 0%" class="text-center font-weight-bolder" style="font-size: 13px; font-family: 'Raleway', sans-serif; letter-spacing: 1.6pt; text-align: center">{{$post->created_at }}</p>
                    </div>
                </div>
                <div style="margin-bottom: 0%; margin-top: 0%">
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