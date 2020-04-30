@extends('layouts.master')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-center" style="font-weight: bolder; font-size: 21px">
                    লগইন 
                </div>

                <div class="container">
                    <form method="POST" action="{{ url('login')}}" style="margin: 13px">
                        @csrf
                        <div class="form-group" class="was-validated">
                          <label for="email">ইমেইল</label>
                          <input type="text" class="form-control" id="email"" placeholder="ইমেইল ঠিকানা" name='email'>
                        </div>
                        <div class="form-group">
                          <label for="password">পাসওয়ার্ড</label>
                          <input type="text" class="form-control" id="password" placeholder="পাসওয়ার্ড" name="password">
                        </div>
    
                        <button type="submit" class="btn btn-block btn-outline-primary">লগইন</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>