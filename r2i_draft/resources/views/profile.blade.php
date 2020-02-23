@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-13">
        <div class="card">
            <div class="card-header text-center bg-primary">
                <strong><h5 class="text-white">আপনার পরিচয়পত্র</h5></strong>
            </div>
    
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
    
                <form method="POST" action="">
                    @csrf
    
                    @foreach ($user as $user)
                    <div class=" ">
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('নাম') }}</label>
    
                            <div class="col-md-4">
                                <input id="name" type="text" placeholder="{{ Auth::user()->name }}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
    
                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('ইমেইল') }}</label>
    
                            <div class="col-md-4">
                                <input id="email" type="text" placeholder="{{ Auth::user()->email }}" class="form-control @error('name') is-invalid @enderror" name="email" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
    
                            <div class="form-group row">
                                <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('জাতীয় পরিচয়পত্র') }}</label>
        
                                <div class="col-md-4">
                                <input id="name" type="text" placeholder="{{Auth::user()->national_id}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
        
                                <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('পাসওয়ার্ড') }}</label>
        
                                <div class="col-md-4">
                                <input id="email" type="password" placeholder="{{Auth::user()->password}}" class="form-control @error('name') is-invalid @enderror" name="email" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('বর্তমান ঠিকানা') }}</label>

                            <div class="col-md-4">
                            <input id="name" type="text" placeholder="{{__('বর্তমান ঠিকানা')}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <label for="email" class="col-md-2 col-form-label text-md-right">{{ __('স্তায়ি ঠিকানা') }}</label>

                            <div class="col-md-4">
                                <input id="email" type="text" placeholder="{{__('গ্রামের বাড়ীর ঠিকানা')}}" class="form-control @error('name') is-invalid @enderror" name="email" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-block btn-primary justify-contetn-center">পরিবর্তন করুন</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection