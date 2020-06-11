@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card boba-card">
                <div class="card-header boba-card-header shadow-sm text-center">User Information</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr class="text-center">
                            <th>#Id</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr class="text-center">
                                <th><img src="{{ Gravatar::src($user->email, 200) }}" width="55pt" height="55pt" style="border-radius: 34%"></th>
                                <th>{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td>
                                    @if (!$user->isAdmin())
                                        <form action="{{route('users.make-admin', $user->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-block btn-outline-primary">Make Admin</button>
                                        </form>
                                    
                                    @else
                                        <button disabled class="btn btn-block btn-outline-primary">Admin</button>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                          
                        </tbody>
                      </table>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
