@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card boba-card">
                <div class="card-header boba-card-header shadow-sm text-center">My Profile</div>

                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-2">
                            <img src="{{ Gravatar::src($user->email, 200) }}" width="144pt" height="144pt" style="border-radius: 34%">
                        </div>
                    </div>
                <form action="{{route('users.update-profile', $user->id)}}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                       <input type="text" class="form-control" name="name" value="{{$user->name}}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                       <input type="text" class="form-control" name="email" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea class="form-control" cols="8" name="email" >{{$user->about}}</textarea>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
