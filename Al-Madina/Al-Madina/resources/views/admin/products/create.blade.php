@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow mt-3 card-outline card-secondary">
            <div class="card-header">
                প্রোডাক্ট যুক্ত করেন
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    {!! Form::open(['url' => 'product', 'files' => true, 'method' => 'post']) !!}
                        <div class="form-group">
                            {{Form::label('product_name', 'নাম')}}
                            {{Form::text('name', '', ['class'=>'form-control border-input', 'placeholder'=>'Dell 101'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('price', 'কেনা দাম')}}
                            {{Form::text('price', '', ['class'=>'form-control border-input', 'placeholder'=>'১২০৳'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('sell_price', 'বিক্রি দাম')}}
                            {{Form::text('sell_price', '', ['class'=>'form-control border-input', 'placeholder'=>'১২০৳'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('description', 'প্রোডাক্ট এর বর্ণনা')}}
                            {{Form::textarea('description', '', ['class'=>'form-control border-input', 'placeholder'=>'প্রোডাক্টের বর্ণনা'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('file', 'প্রোডাক্ট এর ছবি')}}
                            {{Form::file('image', ['class'=>'form-control border-input'])}}
                        </div>
                        <div class="form-group">
                            {{Form::submit('প্রোডাক্ট যুক্ত করুন', ['class' => 'btn btn-block btn-outline-secondary'])}}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
