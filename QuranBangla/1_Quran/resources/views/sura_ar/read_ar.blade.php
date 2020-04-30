@extends('layouts.app')





@section('content')
<div class="container justify-content-center" style="font-family: 'Amiri', serif; font-size: 34px; letter-spacing: 1.6pt;">
    <div class="row">
        <div class="card bg-dark shadow-lg border border-secondary">
            <div class="card-header text-center border border-secondary clearfix">
                <span class="text-white" style="font-size: 21px">সূরা {{$sura->sura_name}}</span>
                <span class="float-left text-white" style="font-size: 13px"> আয়াত - {{$sura->total_ayat}}</span>
                <span class="float-right text-white" style="font-size: 13px"> সূরা নং - {{$sura->id}}</span>
            </div>

            <div class="card-body">
                <ul class="list-group clearfix">
                    @foreach ($sura_text_arab as $text)
                        <li class="shadow bg-dark text-white list-group-item">  <span class="badge badge-secondary badge-pill text-white font-weight-bolder float-left mr-3" >{{$text->VerseIDAr}} </span> <span class="float-right">{{$text->aya_ar}}</span></li>
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