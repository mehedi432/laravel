@extends('layouts.app')

@section('content')
<br>
    @if(count($todos) > 0)
        @foreach($todos as $todo)
            <div class="">
                <div class="mt-3">
                    <div class="card shadow">
                            <h3 class="card-header text-center bg-primary">
                                <a href="todo/{{$todo->id}}" class="card-link text-white">
                                {{$todo->id}} . {{$todo->text}}</a>
                                </h3>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <pre>শুরু হওয়ার তারিখঃ {{ $todo->created_at }}</pre>
                                    </div>
                                    <div class="col">
                                        <pre>শেষ হওয়ার তারিখঃ {{ $todo->due }}</pre>
                                    </div>
                                </div>
                                <pre>{{ $todo->body }}</pre>
                            </div>
                        </div>
                </div>
            <br>
        @endforeach
    @endif
@endsection
