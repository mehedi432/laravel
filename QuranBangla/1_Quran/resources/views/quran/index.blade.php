@extends('layouts.app')
@include('include.nav')

@section('content')

<div id="fix-view">
    <div class="container py-2">
        <div id="particles-js" style="border-radius: 0">
            <div class="row justify-content-center m-5">
                <div class="col-md-4 mb-2">
                    <div class="card shadow-lg bg-dark border border-secondary" style="width: 233px; height: 233px; border-bottom-right-radius: 34px">
                        <div class="card-body">
                            <h3 class="text-center font-weight-bolder text-white ">বাংলায় সূরা সমূহ</h3><hr class="bg-secondary"><br><br>
                            <a href="{{route('sura.index')}}" class="btn btn-block btn-outline-secondary font-weight-bolder text-white">প্রবেশ করুন</a>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-4 mb-2">
                    <div class="card shadow-lg border border-secondary bg-dark" style="width: 233px; height: 233px; border-bottom-right-radius: 34px">
                        <div class="card-body text-center">
                            <h3 class="font-weight-bolder text-white">আরবিতে সূরা সমূহ</h3><hr class="bg-secondary"><br><br>
                            <a href="{{route('sura_arab.index')}}" class="bg-dark btn btn-block btn-outline-secondary font-weight-bolder text-white">প্রবেশ করুন</a>
                        </div>
                    </div>
                </div>
        
                <div class="col-md-4 mb-2">
                    <div class="card shadow-lg border border-secondary bg-dark" style="width: 233px; height: 233px; border-bottom-right-radius: 34px">
                        <div class="card-body text-center">
                            <h3 class="font-weight-bolder text-white">সূরা সমূহের অডিও</h3><hr class="bg-secondary"><br><br>
                            <a href="{{route('sura.index')}}" class="btn btn-block btn-outline-secondary font-weight-bolder text-white">প্রবেশ করুন</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div> 
</div>
  
@endsection