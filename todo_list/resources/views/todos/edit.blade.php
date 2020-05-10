@extends('layouts.app')

@section('content')
<div class="card mt-3">
    <h5 class="text-center card-header bg-primary text-white">Edit Todo </h5>
    <div class="container mt-3">
        {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
            {{ Form::bsText('text', $todo->text) }}
            {{ Form::bsTextArea('body', $todo->body) }}
            {{ Form::bsText('due', $todo->due) }}
            {{ Form::bsText('_method', 'PUT') }}
            {{ Form::bsSubmit('Submit', ['class' => 'btn btn-block btn-info']) }}
        {!! Form::close() !!}
    </div>
</div>

@endsection
