@extends('website.layout.master')
@section('content')
<style>
    /* General styling for the form */
    label {
        color: #454545;
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 7px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 1px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .containerid {
        border-radius: 5px;
        /* background-color: #f2f2f2; */
        padding: 20px;
        margin: 0 auto;
    }

    .form-container {
        max-width: 800px;
        margin: auto;
    }

    .carousel-fade .carousel-inner .item {
        opacity: 0;
        transition-property: opacity;
    }

    .carousel-fade .carousel-inner .active {
        opacity: 1;
    }

    .carousel-fade .carousel-inner .active.left,
    .carousel-fade .carousel-inner .active.right {
        left: 0;
        opacity: 0;
        z-index: 1;
    }

    .carousel-fade .carousel-inner .next.left,
    .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
    }

    .carousel-fade .carousel-control {
        z-index: 2;
    }

    @media all and (transform-3d),
    (-webkit-transform-3d) {

        .carousel-fade .carousel-inner>.item.next,
        .carousel-fade .carousel-inner>.item.active.right {
            opacity: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .carousel-fade .carousel-inner>.item.prev,
        .carousel-fade .carousel-inner>.item.active.left {
            opacity: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .carousel-fade .carousel-inner>.item.next.left,
        .carousel-fade .carousel-inner>.item.prev.right,
        .carousel-fade .carousel-inner>.item.active {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }


    .table-widthB {
        width: 48%;
    }

    .table-widthA {
        width: 49.8%;
    }

    .bg {
        background-color: white;
    }

    .tablescroll {
        overflow-y: auto;
        overflow-x: hidden;
        height: 189px;
        margin-right: 1px;
    }

    /* .marginTop30 {
    margin-top: 30px;
} */

    .radio,
    .checkbox {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .checkbox,
    .radio {
        margin-top: 0px;
        margin-bottom: 0px
    }

    .radio-margin {
        margin-left: -13px;
        margin-top: 7px;
    }

    .radio-margin {
        margin-left: -13px;
        margin-top: 7px;
    }

    .EU_DataTable td,
    th {
        padding: 6px;
        border: 1px solid #ccc;
        text-align: left;
        height: 50px;
    }

    th {
        background: #e5e5e5;
        color: #454545;
        font-weight: bold;
        height: 40px;
    }

    /* .placeholder{
opacity: 0;

} */

    /*Radio and Checkbox START*/
    .checkbox label:after,
    .radio label:after {
        content: '';
        display: table;
        clear: both;
    }

    .checkbox .cr,
    .radio .cr {
        position: relative;
        display: inline-block;
        border: 1px solid #a9a9a9;
        border-radius: .25em;
        width: 1.2em;
        height: 1.2em;
        /* float: left; */
        margin-right: .5em;
        left: 9px;
    }

    @media (max-width: 575.98px) {

        .checkbox .cr,
        .radio .cr {
            position: relative;
            display: inline-block;
            border: 1px solid #a9a9a9;
            border-radius: .25em;
            width: 0.9em;
            height: 0.9em;
            /* float: left; */
            margin-right: 1.5em;
            left: 20px;
        }
    }

    .radio .cr {
        border-radius: 50%;
    }

    .checkbox .cr .cr-icon,
    .radio .cr .cr-icon {
        position: absolute;
        font-size: .8em;
        line-height: 0;
        top: 50%;
        left: 20%;
    }

    .checkbox label input[type="checkbox"],
    .radio label input[type="radio"] {
        display: none;
    }

    .checkbox label input[type="checkbox"]+.cr>.cr-icon,
    .radio label input[type="radio"]+.cr>.cr-icon {
        transform: scale(3) rotateZ(-20deg);
        opacity: 0;
        transition: all .3s ease-in;
    }

    .checkbox label input[type="checkbox"]:checked+.cr>.cr-icon,
    .radio label input[type="radio"]:checked+.cr>.cr-icon {
        transform: scale(1) rotateZ(0deg);
        opacity: 1;
    }

    /* .checkbox label input[type="checkbox"]:disabled+.cr,
.radio label input[type="radio"]:disabled+.cr {
    opacity: .5;
} */

    /*Radio and Checkbox END*/
</style>
<script>
    $('#carouselHacked').carousel();
</script>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading" style="background:#fff;">
    <div class="container">

        <div class="col-sm-12" style="padding:0;">
            <center>
                <h2 style="color:green" class="pt-4">Alumni Register Here..</h2>
            </center>
        </div>
    </div>


    <div class="container-fluid" style="background:#fff; padding-top:20px; ">
        <div class="container form-container">
            <div class="row" style="padding:0px">
                <div class="col-md-12 col-sm-12 text-justify" id="iwtContentArea">
                    <div class="row outer-white" style="box-shadow: 0 8px 17px 2px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2); margin-bottom:30px; ">
                        <div class="col-sm-12" style="padding: 0px;">
                            <div>
                                <div class="containerid" style="margin-left: 20px;">
                                    <form method="post" enctype="multipart/form-data" action="{{ route('add-aluminiregister') }}">
                                        @csrf
                                        {{-- <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}"
                                        /> --}}
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label for="name" style="color:black">Name Of Student</label>
                                                <input type="text" id="name" name="name" placeholder="Your name..">
                                                @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                <label for="email" style="color:black">Email ID</label>
                                                <input type="text" id="email" name="email" placeholder="Your Email Address..">
                                                @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div><br>
                                            <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                                <label for="enroll" style="color:black">Enrollment Number</label>
                                                <input type="text" id="enroll" name="enroll" placeholder="Your Enrollment Number..">
                                                @if ($errors->has('enroll'))
                                                <span class="text-danger">{{ $errors->first('enroll') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                                <label for="company" style="color:black">Current Working Company</label>
                                                <input type="text" id="company" name="company" placeholder="Your Current Working Company..">
                                                @if ($errors->has('company'))
                                                <span class="text-danger">{{ $errors->first('company') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                                <label for="location" style="color:black">Current Location</label>
                                                <input type="text" id="location" name="location" placeholder="Your Current Location..">
                                                @if ($errors->has('location'))
                                                <span class="text-danger">{{ $errors->first('location') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                                <label for="mobile" style="color:black">Contact Number</label>
                                                <input type="text" id="mobile" name="mobile" placeholder="Your Contact Number..">
                                                @if ($errors->has('mobile'))
                                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                                <label for="passout_year" style="color:black">Passout Year</label>
                                                <input type="text" id="passout_year" name="passout_year" placeholder="Your Passout Year..">
                                                @if ($errors->has('passout_year'))
                                                <span class="text-danger">{{ $errors->first('passout_year') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                                <label for="department" style="color:black">Department Name</label>
                                                <input type="text" id="department" name="department" placeholder="Your Department Name..">
                                                @if ($errors->has('department'))
                                                <span class="text-danger">{{ $errors->first('department') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                                                <label for="message" style="color:black">Message</label>
                                                <input type="text" id="message" name="message" placeholder="Message..">
                                                @if ($errors->has('message'))
                                                <span class="text-danger">{{ $errors->first('message') }}</span>
                                                @endif

                                            </div>

                                        </div><br>

                                        <table style="margin-right: 20px;">
                                            <thead>
                                                <tr class="filters">
                                                    <th style="width: 40px;border:none">
                                                        <!-- <div class="checkbox radio-margin">
                                                        <label>
                                                            <input type="checkbox" id="selectAll">
                                                            <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                        </label>
                                                    </div> -->
                                                    </th>
                                                    <th style="width: 50%;border:none">
                                                        <center>Semester</center>
                                                    </th>
                                                    <th style="width: 50%;border:none">
                                                        <center>Result</center>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="firstSem" class="single-checkbox">
                                                            <label class="form-check-label" for="firstSem">
                                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td style="width: 48%; color:black">First Semester</td>
                                                    <td>
                                                        <input type="text" class="form-control" name="firstsem" placeholder="Result">
                                                        @if ($errors->has('firstsem'))
                                                        <span class="text-danger">{{ $errors->first('firstsem') }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="secondSem" class="single-checkbox">
                                                            <label class="form-check-label" for="secondSem">
                                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td style="width: 48%; color:black">Second Semester</td>
                                                    <td style="width: 48%">
                                                        <input type="text" class="form-control" name="secondsem" placeholder="Result">
                                                        @if ($errors->has('secondsem'))
                                                        <span class="text-danger">{{ $errors->first('secondsem') }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="thirdSem" class="single-checkbox">
                                                            <label class="form-check-label" for="thirdSem">
                                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td style="width: 48%; color:black">Third Semester</td>
                                                    <td style="width: 48%">
                                                        <input type="text" class="form-control" name="thirdsem" placeholder="Result">
                                                        @if ($errors->has('thirdsem'))
                                                        <span class="text-danger">{{ $errors->first('thirdsem') }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="fourthSem" class="single-checkbox">
                                                            <label class="form-check-label" for="fourthSem">
                                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td style="width: 48%; color:black">Fourth Semester</td>
                                                    <td style="width: 48%">
                                                        <input type="text" class="form-control" name="fourthsem" placeholder="Result">
                                                        @if ($errors->has('fourthsem'))
                                                        <span class="text-danger">{{ $errors->first('fourthsem') }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="fifthSem" class="single-checkbox">
                                                            <label class="form-check-label" for="fifthSem">
                                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td style="width: 48%; color:black">Fifth Semester</td>
                                                    <td style="width: 48%">
                                                        <input type="text" class="form-control" name="fifthsem" placeholder="Result">
                                                        @if ($errors->has('fifthsem'))
                                                        <span class="text-danger">{{ $errors->first('fifthsem') }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50px;">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="" id="sixthSem" class="single-checkbox">
                                                            <label class="form-check-label" for="sixthSem">
                                                                <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td style="width: 48%; color:black">Sixth Semester</td>
                                                    <td style="width: 48%">
                                                        <input type="text" class="form-control" name="sixthsem" placeholder="Result">
                                                        @if ($errors->has('sixthsem'))
                                                        <span class="text-danger">{{ $errors->first('sixthsem') }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>


                                        {{-- <div class="creatediv1 marginTop30 pt-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-primary filterable">
                                        <div class="panel-heading">
                                            <div class="pull-right">
                                                <!-- Filter button if needed -->
                                            </div>
                                        </div>
                                        <div class="bg tablescroll ">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr class="filters">
                                                        <th style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </th>
                                                        <th style="width: 48%">
                                                            <center>Semister</center>
                                                        </th>
                                                        <th style="width: 48%">
                                                            <center>Result</center>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 48%">First Semister</td>
                                                        <td style="width: 48%">
                                                            <input type="text" class="form-control" name="firstsem"
                                                                placeholder="Result">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 48%">Second Semister</td>
                                                        <td style="width: 48%">
                                                            <input type="text" class="form-control" name="secondsem"
                                                                placeholder="Result">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 48%">Third Semister</td>
                                                        <td style="width: 48%">
                                                            <input type="text" class="form-control" name="thirdsem"
                                                                placeholder="Result">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 48%">Fourth Semister</td>
                                                        <td style="width: 48%">
                                                            <input type="text" class="form-control" name="fourthsem"
                                                                placeholder="Result">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 48%">Fifth Semister</td>
                                                        <td style="width: 48%">
                                                            <input type="text" class="form-control" name="fifthsem"
                                                                placeholder="Result">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 50px;">
                                                            <div class="checkbox radio-margin">
                                                                <label>
                                                                    <input type="checkbox" value="">
                                                                    <span class="cr"><i
                                                                            class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td style="width: 48%">Sixth Semister</td>
                                                        <td style="width: 48%">
                                                            <input type="text" class="form-control" name="sixthsem"
                                                                placeholder="Result">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}


                                        <div class="col-md-12 py-2 captcha_set d-flex" style="text-align: right;justify-content: end; ">
                                            {!! NoCaptcha::renderJs() !!}
                                            {!! NoCaptcha::display() !!}
                                            @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <span class="red-text">{{ $errors->first('g-recaptcha-response') }}</span>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 d-flex" style="float: right;justify-content: end; padding-bottom:25px">
                                            <center><button type="submit" name="submit" value="submit" class="btn pull-right" id="btnContactUs" style=" background-color:  #015198; color:#fff;">Submit</button></center>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const selectAllCheckbox = document.getElementById('selectAll');
        const singleCheckboxes = document.querySelectorAll('.single-checkbox');

        selectAllCheckbox.addEventListener('change', function() {
            singleCheckboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });

        singleCheckboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                if (!this.checked) {
                    selectAllCheckbox.checked = false;
                } else if (Array.from(singleCheckboxes).every(cb => cb.checked)) {
                    selectAllCheckbox.checked = true;
                }
            });
        });
    });
</script>

@endsection