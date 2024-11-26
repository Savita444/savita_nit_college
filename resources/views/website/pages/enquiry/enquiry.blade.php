@extends('website.layout.master')
@section('content')
<style>
    .text-danger {
        color: red;
    }

    label {
        color: #545353;
    }

    .red-text {
        color: red;
    }

    /* i {
    color: red;
} */
</style>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container pt-4">

        <div class="col-sm-12" style="padding:0;">
            <center>
                <h4 style="color:green"><strong>Enquiry</strong></h4>
            </center>
            <div class="pull-right"><img src="{{ env('FILE_VIEW') }}/up-images/index.php" alt="" class="img-responsive">
            </div>
        </div>

    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">


            <div class="col-lg-8 col-md-8 col-sm-8 col-11 p-2 pb-5">

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

                <div class="well well-sm" style=" box-shadow: 0 8px 17px 2px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2);">

                    <form method="POST" enctype="multipart/form-data" id="regForm" action="{{ route('add-enquiry') }}">
                        @csrf
                        <div class="row" style="display: flex; justify-content: center; background-color:#fff; padding:10px;">
                            <div class="col-md-6">
                                <div class="form-group py-2 pt-2">
                                    <label for="name"><b>Full Name</b> <i class="required">*</i></label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter full name" value="{{ old('name') }}" />
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group py-2">
                                    <label for="mobile_number"><b>Mobile Number</b> <i class="required">*</i></label>
                                    <input type="text" class="form-control" id="mobile_number" name="mobile_number" placeholder="Enter Mobile Number" value="{{ old('mobile_number') }}" />
                                    @if ($errors->has('mobile_number'))
                                    <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                                    @endif
                                </div>
                                <div class="form-group py-2">
                                    <label for="email"><b>Email Address </b><i class="required">*</i></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" value="{{ old('email') }}" />
                                    </div>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>

                                <div class="form-group py-2">
                                    <label for="Brach"><b>Branch</b> <i class="required">*</i></label><br>
                                    <select id="Branch" class="form-control">
                                        <option value="null">Select Branch</option>
                                        <option value="Electrical">Electrical engg.</option>
                                        <option value="Computer">Computer engg.</option>
                                        <option value="Mechanical">Mechanical engg.</option>
                                        <option value="Civil">Civil engg.</option>
                                        <option value="Automobile">Automobile engg.</option>
                                        <option value="Eelctronics And Telecommunications Engineering">E&TC engg.</option>
                                    </select>






                                    @if ($errors->has('mobile_number'))
                                    <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
                                    @endif
                                </div>


                                <div class="form-group py-2">
                                    <label for="admission_level"><b>Admission Level</b> <i class="required">*</i></label>
                                    <select class="form-control" name="admission_level" id="admission_level">
                                        <option value="">Select</option>
                                        <option value="1" {{ old('admission_level') == 'FY' ? 'selected' : '' }}>FY
                                        </option>
                                        <option value="2" {{ old('admission_level') == 'DSY' ? 'selected' : '' }}>DSY
                                        </option>
                                    </select>
                                    @if ($errors->has('admission_level'))
                                    <span class="text-danger">{{ $errors->first('admission_level') }}</span>
                                    @endif
                                </div>
                                <div class="form-group py-2">
                                    <label for="source"><b>Source</b> <i class="required">*</i></label>
                                    <select class="form-control" id="source" name="source">
                                        <option value="">Select source</option>
                                        <option value="Directly Institute Visit" {{ old('source') == 'Directly Institute Visit' ? 'selected' : '' }}>Directly
                                            Institute Visit</option>
                                        <option value="website" {{ old('source') == 'website' ? 'selected' : '' }}>
                                            Website</option>
                                        <option value="radio/newspaper" {{ old('source') == 'radio/newspaper' ? 'selected' : '' }}>Radio/Newspaper
                                        </option>
                                        <option value="staff" {{ old('source') == 'staff' ? 'selected' : '' }}>Staff
                                        </option>
                                        <option value="student" {{ old('source') == 'student' ? 'selected' : '' }}>
                                            Student</option>
                                    </select>
                                    @if ($errors->has('source'))
                                    <span class="text-danger">{{ $errors->first('source') }}</span>
                                    @endif
                                </div>
                                <div class="form-group py-2">
                                    <label for="source_name"><b>Source Name</b> <i class="required">*</i></label>
                                    <input type="text" class="form-control" id="source_name" name="source_name" placeholder="Enter source name" value="{{ old('source_name') }}" />
                                    @if ($errors->has('source_name'))
                                    <span class="text-danger">{{ $errors->first('source_name') }}</span>
                                    @endif
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
            </div>

        </div>
    </div>
</div>
{{-- <script src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script> --}}
{{-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
<script>
    $(document).ready(function() {
        // Custom validation rule
        $.validator.addMethod("spcenotallow", function(value, element) {
            return this.optional(element) || value.trim().length > 0;
        }, "Enter Some Text");

        // Apply validation to the form
        $("#regForm").validate({
            errorClass: "text-danger",
            rules: {
                name: {
                    required: true,
                    spcenotallow: true
                },
                email: {
                    required: true,
                    email: true
                },
                mobile_number: {
                    required: true,
                    spcenotallow: true
                },
                source: {
                    required: true
                },
                source_name: {
                    required: true,
                    spcenotallow: true
                },
                admission_level: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "Enter Full Name",
                    spcenotallow: "Enter Some Text"
                },
                email: {
                    required: "Enter Email Id"
                },
                mobile_number: {
                    required: "Enter Mobile Number"
                },
                source: {
                    required: "Select Source"
                },
                source_name: {
                    required: "Enter source name"
                },
                admission_level: {
                    required: "Select admission level"
                }
            },
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            submitHandler: function(form) {
                if (grecaptcha.getResponse() === "") {
                    alert("Please complete the reCAPTCHA challenge.");
                } else {
                    form.submit();
                }
            }
        });
    });
</script>



@endsection