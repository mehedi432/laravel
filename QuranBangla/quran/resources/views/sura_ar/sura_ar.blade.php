@extends('layouts.app')
@include('include.nav')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @foreach ($suras as $sura)
            <div class="col-md-3 font-weight-bold">
                <div class="card m-2" style="width: 233px; height: 144px; border-bottom-right-radius: 34px">
                    <div class="text-dark font-weight-bolder">
                        <div class="row justify-content-center mt-2">
                            <div class="col">
                                <p class="container">সূরা-{{$sura->id }}</p>
                            </div>
                            <div class="col">
                                <p class="container">রুকু-{{$sura->total_ruku }}</p>
                            </div>
                        </div>
                        <p class="text-center"><a href="{{route('sura_arab.show', $sura->id)}}" class="container text-center text-dark" style="font-size: 21pt">{{ $sura->sura_name }}</a></p>
                        <p class="text-center">আয়াত সংখ্যা - {{$sura->total_ayat}}</p>   
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    
    
@endsection