@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <h3 class="text-center card-header bg-primary text-white">অভিযোগ করুন</h3>
        <form class="form-horizontal" action="complain" method="POST">
            <br>
            @csrf
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-3"></div>

                    <div class="col-sm-3 col-md-3">
                        <div class="dropdown">
                            <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown">মন্ত্রণালয়
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">প্রধানমন্ত্রী </a></li>
                                <li><a href="#">অর্থ মন্ত্রণালয়</a></li>
                                <li><a href="#">সড়ক ও জনপথ মন্ত্রণালয়</a></li>
                                <li><a href="#">কৃষি মন্ত্রণালয়</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3 col-md-3">
                        <div class="dropdown">
                            <button class="btn btn-primary btn-lg dropdown-toggle" type="button" data-toggle="dropdown">বিধিসংগত ক্ষমতা
                                <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">প্রধানমন্ত্রী </a></li>
                                <li><a href="#">অর্থ মন্ত্রণালয়</a></li>
                                <li><a href="#">সড়ক ও জনপথ মন্ত্রণালয়</a></li>
                                <li><a href="#">কৃষি মন্ত্রণালয়</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-3"></div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-12" for="ticket">আপনার পরিচয়পত্র নাম্বার</label>
                <div class="col-sm-12">
                <input type="text" class="form-control" id="ticket" placeholder="{{Auth::user()->national_id}}" name="ticket">
                    @error('ticket')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-12" for="title">আপনার অভিযোগ এর নাম</label>
                <div class="col-sm-12">
                <input type="text" class="form-control" id="title" placeholder="{{__('অভিযোগ এর নাম')}}" name="title">
                    @error('title')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-12" for="ticket">অভিযোগ এর বিবরণ</label>
                <div class="col-sm-12">
                    <textarea type="text" class="form-control" id="ticket" placeholder="অভিযোগ এর বিবরণ" name="description"></textarea>
                    @error('description')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="container">
                <div class="form-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="file_blob">
                        <label class="custom-file-label" for="customFile">ফাইল পছন্দ করেন</label>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-block btn-outline-info text-dark">অভিযোগ করেন</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <div>
                                <button class="btn btn-block btn-outline-info text-dark">টাকা দেন ভাই</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

<script>
    // The name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
@endsection