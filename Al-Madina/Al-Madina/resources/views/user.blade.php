@extends('layouts.app')
@section('content')
<div class="container mt-3 ">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow bg-white">
                <div class="card-header bg-dark text-center" style="font-weight: bolder; font-size: 21px">
                    ব্যবহারকারী যুক্ত করুন
                </div>

                <div class="container">
                    <form method="POST" action="{{ url('register')}}" style="margin: 13px">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group" class="was-validated">
                                    <label for="name">নাম</label>
                                    <input type="text" class="form-control" id="name" placeholder="নাম" name='name'>
                                </div>
        
                                <div class="form-group" class="was-validated">
                                  <label for="email">ইমেইল</label>
                                  <input type="text" class="form-control" id="email"" placeholder="ইমেইল ঠিকানা" name='email'>
                                </div>
        
                                <div class="form-group">
                                  <label for="password">পাসওয়ার্ড</label>
                                  <input type="text" class="form-control" id="password" placeholder="পাসওয়ার্ড" name="password">
                                </div>

                                <div class="form-group">
                                    <label for="sel1">অ্যাকাউন্ট এর ধরন</label>
                                    <select class="form-control" id="role" name="role">
                                        <option value="admin">এডমিন</option>
                                        <option value="worker">কর্মী</option>
                                        <option value="shop_owner">দোকানের মালিক</option>
                                        <option value="seller">বিক্রেতা</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-block btn-outline-dark">রেজিস্টার</button>
                            </div>

                            <div class="col-md-8">
                                <div class="container">
                                    <table class="table" style="text-align: center">
                                        <thead class="">
                                          <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($users as $user)
                                            <tr>
                                            <th scope="row">{{$user->user_id}}</th>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->role}}</td>
                                                <td><a href="{{ route('user.edit', $user->id)}}"><i class="fa fa-edit text-center"></i></a></td>
                                                <td><a href="register"><i class="fa fa-trash text-center"></i></a></td>
                                            </tr>  
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> {{-- end of form grid --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection