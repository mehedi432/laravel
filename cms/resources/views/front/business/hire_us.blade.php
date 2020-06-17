@extends('front.layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow boba-card" >
                <div class="card-header shadow-sm text-center boba-card-header">
                    Plan A
                </div>

                <div class="card-body" style="font-family: 'Raleway', sans-serif; letter-spacing: 1.6px">
                    <div class="container">
                        <ul class="list-group">
                            <li class="list-group-item ">1. Broken Laravel Application Service</li>
                            <li class="list-group-item ">2. Broken SQL query realated problem</li>
                            <li class="list-group-item ">3. Broken Views in blade templates</li>
                          </ul> 
                          <br>
                          <button type="submit" class="btn btn-block btn-secondary">8 $ / hour</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow boba-card" >
                <div class="card-header shadow-sm text-center boba-card-header">
                    Plan B
                </div>

                <div class="card-body" style="font-family: 'Raleway', sans-serif; letter-spacing: 1.6px">
                    <div class="container">
                        <ul class="list-group">
                            <li class="list-group-item ">1. Build a web application using Laravel</li>
                            <li class="list-group-item ">2. Build a web application using Django</li>
                            <li class="list-group-item ">3. Build a web application using node.js</li>
                          </ul> 
                          <br>
                          <button type="submit" class="btn btn-block btn-secondary">13 $ / hour</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card boba-card shadow">
                <div class="card-header boba-card-header text-center">
                    Plan C
                </div>
                <div class="card-body" style="font-family: 'Raleway', sans-serif; letter-spacing: 1.6px">
                    <div class="container">
                        <ul class="list-group">
                            <li class="list-group-item ">1. Build a Flutter Android & IOS application</li>
                            <li class="list-group-item ">2. Repair a Flutter application</li>
                            <li class="list-group-item ">3. Fix bugs and colleboration in FLutter</li>
                          </ul> 
                          <br>
                          <button type="submit" class="btn btn-block btn-secondary">21 $ / hour</button>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
    
@endsection