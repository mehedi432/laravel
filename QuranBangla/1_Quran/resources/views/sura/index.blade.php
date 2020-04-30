@extends('layouts.app')
@include('include.nav')

@section('content')
<div class="justify-content-center">
    <div class="container mt-5">
        <div class="row justify-content-center">
            @foreach ($suras as $sura)
                <div class="col-md-3 font-weight-bold">
                    <div class="card m-2 bg-dark shadow-lg border border-secondary" style= " border-bottom-right-radius: 34px">
                        <div class="text-dark font-weight-bolder m-1">
                            <div class="clearfix">
                                <div class="float-left">
                                    <p class="container text-white">সূরা-{{$sura->id }}</p>
                                </div>
                                <div class="float-right">
                                    <p class="container text-white">রুকু-{{$sura->total_ruku }}</p>
                                </div>
                            </div>
                            <div class="container mt-2">
                                <p class="text-center"><a href="{{route('sura.show', $sura->id)}}" class="container text-center  text-white" style="font-size: 21pt">{{ $sura->sura_name }}</a></p>
                            </div>
                            <p class="text-center text-white">আয়াত সংখ্যা - {{$sura->total_ayat}}</p>   
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection