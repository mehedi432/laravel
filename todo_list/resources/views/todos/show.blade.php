@extends('layouts.app')

@section('content')
<br>
    <div class="card shadow">
        <h3 class="card-header text-center bg-primary text-white">
            <strong>{{$todo->id}} . {{$todo->text}}</strong>
        </h3>
        <div class="card-body">
            <pre>শেষ হওয়ার তারিখঃ {{ $todo->due }}</pre>
            <pre>{{ $todo->body }}</pre>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-3"></div>
            <div class="col-lg-3">
                <a href="/todo/{{$todo->id}}/edit" class="btn btn-outline-info btn-block">Edit</a>
            </div>
            <div class="col-lg-3">
                {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST']) !!}
                {{ Form::hidden('_method', 'DELETE')}}    
                {{ Form::bsSubmit('Delete', ['class' => 'btn btn-outline-danger btn-block']) }}
                {!! Form::close() !!}
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <br>
    <a href="{{ url('/todo')}}" class="btn btn-lg btn-primary">Go back to home</a>
@endsection
