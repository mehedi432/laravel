@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">Contact With Us</div>
                {!! Form::open(['url' => 'contact/submit']) !!}
                    <div class="form-group">
                        {{ Form::label('name', 'Name: ') }}
                        {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'E-Mail Address: ') }}
                        {{ Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Enter Email address']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('message', 'Enter message') }}
                        {{ Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter your message']) }}
                    </div>

                    <div>
                        {{ Form::submit('Submit', ['class' => 'btn btn-lg btn-primary'])}}
                    </div>
                {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('Sidebar')
@endsection
