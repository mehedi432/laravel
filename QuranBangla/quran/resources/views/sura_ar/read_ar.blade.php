@extends('layouts.app')

@section('content')
<div class="container">
    <div class="justify-content-center">
        <div class="card">
            <div class="card-header text-center bg-secondary clearfix">
                <span class="text-white" style="font-size: 21px">সূরা {{$sura->sura_name}}</span>
                <span class="float-left text-white" style="font-size: 13px"> আয়াত - {{$sura->total_ayat}}</span>
                <span class="float-right text-white" style="font-size: 13px"> সূরা নং - {{$sura->id}}</span>
            </div>

            <div class="card-body">
                <ul class="list-group clearfix">
                    @foreach ($sura_text_arab as $text)
                        <li class="list-group-item font-weight-bolder"> <span class="badge badge-secondary badge-pill text-white font-weight-bolder float-left mr-3" >{{$text->aya}} </span> {{$text->text_arab}}</li>
                    @endforeach
                </ul>
                <div class="card-footer clearfix">
                    <a href="{{route('sura_arab.index')}}" class="btn btn-block btn-outline-secondary float-right">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
    
    
@endsection