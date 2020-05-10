@extends('layouts.app')

@section('content')
<br>
<div class="card">
    <div class="text-center card-header bg-primary text-white">Create todo</div>
        <div class="container mt-3">
            {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
                {{ Form::bsText('text') }}
                {{ Form::bsTextArea('body') }}
                {{ Form::bsText('due') }}
                {{ Form::bsSubmit('Submit', ['class' => 'btn btn-block btn-outline-info text-dark']) }}
            {!! Form::close() !!}
            <br>
        </div>
    </div>

@endsection
