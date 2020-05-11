@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div class="card bg-dark shadow-lg border border-secondary">
            <div class="card-header text-center border border-secondary clearfix">
                <span class="text-white" style="font-size: 21px">সূরা {{$sura->sura_name}}</span>
                <span class="float-left text-white" style="font-size: 13px"> আয়াত - {{$sura->total_ayat}}</span>
                <span class="float-right text-white" style="font-size: 13px"> সূরা নং - {{$sura->id}}</span>
            </div>

            <div class="card-body">
                <ul class="list-group clearfix">
                    @foreach ($sura_text as $text)
                        <li class="shadow bg-dark text-white list-group-item" style="letter-spacing: 1.6px;">  <span class="badge badge-secondary badge-pill text-white font-weight-bolder float-left mr-3" >{{$text->aya}} </span> {{$text->text}}</li> <br>
                    @endforeach
                </ul>
                <div class="card-footer clearfix">
                    <a href="{{route('sura.index')}}" class="btn btn-block btn-outline-secondary text-white font-weight-bolder">সকল সূরা সমূহ</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
@endsection