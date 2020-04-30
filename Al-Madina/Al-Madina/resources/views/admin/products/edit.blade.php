@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="card shadow mt-3 card-outline card-secondary">
            <div class="card-header">
                প্রোডাক্ট যুক্ত করেন
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6">
                    {!! Form::open(['url' => ['product', $product->id], 'files' => true, 'method' => 'patch']) !!}
                        <div class="form-group">
                            {{Form::label('product_name', 'নাম')}}
                            {{Form::text('name', $product->name, ['class'=>'form-control border-input', 'placeholder'=>$product->name])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('price', 'কেনা দাম')}}
                            {{Form::text('price', $product->price, ['class'=>'form-control border-input', 'placeholder'=>$product->price])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('sell_price', 'বিক্রি দাম')}}
                            {{Form::text('sell_price', $product->sell_price, ['class'=>'form-control border-input', 'placeholder'=>$product->sell_price])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('description', 'প্রোডাক্ট এর বর্ণনা')}}
                            {{Form::textarea('description', $product->description, ['class'=>'form-control border-input', 'placeholder'=>$product->description])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('file', 'প্রোডাক্ট এর ছবি')}}
                            {{Form::file('image', ['class'=>'form-control border-input'])}}
                        </div>
                        <div class="form-group">
                            {{Form::submit('প্রোডাক্ট আপডেট করুন', ['class' => 'btn btn-block btn-outline-secondary font-weight-bolder'])}}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection