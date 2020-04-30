@extends('layouts.app')

@section('content')


<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-center" style="font-weight: bolder; font-size: 21px">
                    ব্যবহারকারী যুক্ত করুন
                </div>

                <div class="container">
                    <form method="POST" action="{{ url('register')}}" style="margin: 13px">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" class="was-validated">
                                    <label for="name">নাম</label>
                                    <input type="text" class="form-control" id="name" placeholder="নাম" name='name'>
                                </div>
        
                                <div class="form-group" class="was-validated">
                                  <label for="email">ইমেইল</label>
                                  <input type="text" class="form-control" id="email"" placeholder="ইমেইল ঠিকানা" name='email'>
                                </div>
        
                                <div class="form-group" class="was-validated">
                                    <label for="mobile_number">মোবাইল নাম্বার</label>
                                    <input type="text" class="form-control" id="name" placeholder="মোবাইল নাম্বার" name='mobile_number'>
                                </div>
        
                                
                            </div>

                            <div class="col-md-6">
                                <div class="form-group" class="was-validated">
                                    <label for="national_id">ন্যাশনাল আইডি</label>
                                    <input type="text" class="form-control" id="name" placeholder="ন্যাশনাল আইডি" name='national_id'>
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
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-block btn-outline-primary">রেজিস্টার</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
    
@endsection