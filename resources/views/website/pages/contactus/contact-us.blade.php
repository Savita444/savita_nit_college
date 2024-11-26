@extends('website.layout.master')
@section('content')
<style>
    label {
        color: #454545;
    }

    /* i {
    color: red !important;
} */
    .data-con {
        color: #454545 !important;
    }
   

    .data-con:hover {
        color: blue !important;
    }

    .row>* {
        padding-right: 0px !important;
    }

    @media only screen and (max-width:769px){
        .container{
        /* margin-left: 0px !important;
        margin-right: 0px !important; */
        /* padding-left: 0px !important; */
        padding-right: 0px !important;
    }

    }
</style>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container">

        <div class="col-sm-12 pt-4">
            <center>
                <h4 style="color:green"><strong>Contact Us</strong></h4>
            </center>
            <div class="pull-right"><img src="{{ env('FILE_VIEW') }}/up-images/index.php" alt="" class="img-responsive">
            </div>
        </div>

    </div>
</div>

<!-- <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12" style="width: 100%; height:100%; ">
            </div>
        </div>
    </div> -->

<div class="container-fluid">
    <div class="container">
        <div class="row d-flex card-shadow">
            <div class="col-lg-8 col-md-8 col-sm-8">
                @if (Session::get('status') == 'success')
                <div class="col-12 grid-margin">
                    <div class="alert alert-success" id="success-alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong> <span id="data_to_show">
                                {{ Session::get('msg') }}
                            </span> </strong>
                    </div>
                </div>
                @endif

                @if (Session::get('status') == 'error')
                <div class="col-12 grid-margin">
                    <div class="alert alert-danger" id="danger-alert">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong> <span id="data_to_show">
                                {!! session('msg') !!}
                            </span> </strong>
                    </div>
                </div>
                @endif
                <form method="POST" enctype="multipart/form-data" id="regForm" action="{{ route('add-contact-us') }}">
                    @csrf
                    <div class="row p-4">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group py-2">
                                <label for="fld_contact_name"><b>Full Name</b> <i class="required">*</i></label>
                                <input type="text" class="form-control" name="fld_contact_name" id="fld_contact_name" placeholder="Enter full name" value="{{ old('fld_contact_name') }}" />
                                @if ($errors->has('fld_contact_name'))
                                <span class="text-danger">{{ $errors->first('fld_contact_name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group py-2">
                                <label for="fld_contact_subject"><b>Subject</b> <i class="required">*</i></label>
                                <input type="text" class="form-control" id="fld_contact_subject" name="fld_contact_subject" placeholder="Enter Subject" value="{{ old('fld_contact_subject') }}" />
                                @if ($errors->has('fld_contact_subject'))
                                <span class="text-danger">{{ $errors->first('fld_contact_subject') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group py-2">
                                <label for="fld_contact_email"><b>Email Address </b><i class="required">*</i></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                    <input type="email" class="form-control" id="fld_contact_email" name="fld_contact_email" placeholder="Enter email address" value="{{ old('email') }}" />
                                </div>
                                @if ($errors->has('fld_contact_email'))
                                <span class="text-danger">{{ $errors->first('fld_contact_email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="form-group py-2">
                                <label for="fld_contact_number"><b>Mobile Number</b> <i class="required">*</i></label>
                                <input type="text" class="form-control" id="fld_contact_number" name="fld_contact_number" placeholder="Enter Mobile Number" value="{{ old('fld_contact_number') }}" />
                                @if ($errors->has('fld_contact_number'))
                                <span class="text-danger">{{ $errors->first('fld_contact_number') }}</span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="name">
                                    <b>Message</b></label>
                                <textarea id="message" name="fld_contact_message" class="form-control" rows="4" cols="10" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 py-2 captcha_set d-flex" style="text-align: right;justify-content: end; ">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                            <span class="help-block">
                                <span class="red-text">{{ $errors->first('g-recaptcha-response') }}</span>
                            </span>
                            @endif
                        </div>
                        <div class="col-md-12 d-flex" style="float: right;justify-content: end;">
                            <center><button type="submit" name="submit" value="submit" class="btn pull-right" id="btnContactUs" style=" background-color:  #015198; color:#fff;">Submit</button></center>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="row align-text-bottom">
                    <div class="col-12">
                        <form class="mt-5">
                            <div style=" margin:15px;">
                                <legend><span class="glyphicon glyphicon-globe"></span><strong>Our Office</strong></legend>
                                <address>
                                    <b style="color:green">{{ $contactusdata[0]['contact_us_name'] }} </b>
                                </address>
                                <address>
                                    <span class="glyphicon glyphicon-home" style="color: #454545;"></span><b style="color:green">Address</b> <b style="color: #454545;">:</b>&nbsp;
                                    <a href="#" style="color: #454545;">{{ $contactusdata[0]['contact_us_address'] }}</a><br>
                                </address>
                                <address>
                                <span class="glyphicon glyphicon-phone" style="color: #454545;"></span><b
                                        style="color:green">Tel.</b> <b style="color: #454545;">:</b>
                                    <span
                                    class="data-con">{{ $contactusdata[0]['contact_us_telephone'] }}</span><br>
                            </address>
                                <address>
                                    <span class="glyphicon glyphicon-phone" style="color: #454545;"></span><b style="color:green">Mobile.</b> <b style="color: #454545;">:</b>&nbsp;
                                    <span class="data-con">
                                        <a class="data-con" href="tel:{{ $contactusdata[0]['contact_us_mobile'] }}">{{ $contactusdata[0]['contact_us_mobile'] }}</a>


                                        &nbsp;</span><br>
                                </address>
                                <address>
                                    <span class="glyphicon glyphicon-globe" style="color: #454545;"></span><b style="color:green">Website :</b>&nbsp;
                                    <a href="https://nitnasik.com/" class="data-con">
                                        {{ $contactusdata[0]['contact_us_website'] }}</a><br>
                                </address>
                                <address>
                                    <span class="glyphicon glyphicon-envelope" style="color: #454545;"></span><b style="color:green; ">Email :</b>&nbsp;<a class="data-con" href="mailto:#">{{ $contactusdata[0]['contact_us_email'] }}
                                    </a>

                                </address>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3748.774391088928!2d73.80388429999999!3d20.0179814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bddea4f04aebdd5%3A0x3511df5d5b6650c4!2sNashik%20Institute%20of%20Technology%20(NIT)%20Nashik!5e0!3m2!1sen!2sin!4v1720083483882!5m2!1sen!2sin" height="500px" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>

</div>
@endsection