@extends('layouts.app')

@section('content')
    @if(count($messages))
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item">Name: {{ $message->name }}</li>
                <li class="list-group-item">Email: {{ $message->email }}</li>
                <li class="list-group-item">Message: {{ $message->message }}</li>
                <hr>
            </ul>
        @endforeach
    @endif
@endsection

@section('sidebar')

@endsection
