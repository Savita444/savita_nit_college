@extends('website.layout.master')
@section('content')
<style>
    .panel_content {
        background-color: #eceff7;
    }

    .clickable {
        cursor: pointer;
    }

    /* .titlegov{
  
    margin-bottom: 25px !important;
} */

    .panel {
        background-color: #fff;
        border: 1px solid transparent;
        border-radius: 0;
        width: 100%;
        /* Changed from fixed width to 100% */
    }

    .row>* {
        padding-right: 0px !important;
    }

    .product-type {
        margin-top: 45px;
    }

    .product-size {
        margin-top: 25px;
    }

    .product-use {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .panel-heading span {
        margin-top: -20px;
        font-size: 15px;
    }

    .panel-primary>.panel-heading {
        color: #000;
        background-color: #fff;
        border-bottom: 1px solid #eeeeee;
        padding-top: 20px;
        padding-bottom: 20px
    }

    .govbody {
        margin-top: -70px;
    }

    .panel-title {
        font-size: 22px;
        font-weight: 400;
    }

    .panel_product_type {
        margin-top: 20px;
    }

    .panel_product_type {
        line-height: 26px;
    }

    .panel_product_type {
        font-size: 18px;
        font-weight: 400;
        color: black;
    }

    .dataTables_filter {
        display: flex;
        justify-content: end;
        padding-bottom: 10px;
    }

    .dataTables_wrapper .dataTables_info {
        clear: both;
        float: left;
        padding-top: .755em;
    }

    .dataTables_wrapper .dataTables_paginate {
        float: right;
        text-align: right;
        padding-top: .25em;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        color: #000 !important;
        border: 1px solid rgba(0, 0, 0, 0.3);
        background: linear-gradient(to bottom, rgba(230, 230, 230, 0.05) 0%, rgba(0, 0, 0, 0.05) 100%);
    }

    .hideinlgmd {
        position: absolute;
        height: 25px;
        width: 25px;
    }

    #iwtHeaderNav {
        border-bottom: none !important;
    }

    @media only screen and (max-width:769px) {


        .navbar-toggler2 {
            margin-top: 60px;
        }

        .hideinlgmd {
            display: block;
        }

        .btn-close {
            display: block;
            position: absolute;
            background-color: white;
            color: black;
            font-size: 30px;
            height: 20px;
            width: 20px;
            top: 0px;
            right: 21px;
            z-index: 1001;
        }

        li {
            margin-left: -13px !important;
        }

    }
</style>
<script>
    $(document).on('click', '.panel-heading span.clickable', function(e) {
        var $this = $(this);
        if (!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon glyphicon-minus-sign').addClass(
                'glyphicon glyphicon-plus-sign');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon glyphicon-plus-sign').addClass(
                'glyphicon glyphicon-minus-sign');
        }
    })
</script>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div>
        <!-- <div class="col-sm-12" style="padding:0;">
            <div class="pull-right"><img src="../up-images/civil-iconimgFile568246ec20aed.png" alt=""
                    class="img-responsive"></div>
        </div> -->

        <div class="panel_content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 list-group-item">
                        <div class="" id="iwtRightPannel">
                            <!--Right col-->
                            <div class="col-sm-12 right-col-fix list-group-item">
                                <div>
                                    <div class="list-group-item ">

                                        <div class="list-group-item"><b></b></div>
                                        <div class="container-fluid mob-width-right list-group " id="iwtHeaderNav">
                                            <div class="container mob-toggle-left-side ">
                                                <nav class=" navbar navbar-expand-lg flex-column ">
                                                    <div class="container-fluid ">
                                                        <button class="navbar-toggler navbar-toggler2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                                            <span class="navbar-toggler-icon"></span>
                                                        </button>

                                                        <div class="offcanvas offcanvas-end itemfromstart" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbarLabel">
                                                            <button class="btn-close btn-close1  d-lg-none" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                                                            <div class="offcanvas-body ">
                                                                <ul class=" " style="width: 100%;">
                                                                    <li class="nav-item ">
                                                                        <div class="list-group-item"><b></b></div>
                                                                        <a href="https://msbte.org.in/file/DiplomaAdmissionPresentationWebsite_200220201250.pdf" target="_blank" class="list-group-item active-rp-link">तंत्रशिक्षण पदविका प्रवेश – थोडक्यात</a>
                                                                        <a href="{{ route('about-governingbody') }}" class="list-group-item active-rp-link">Governing
                                                                            Body</a>
                                                                        <a href="{{ route('polytechnic-mandatary') }}" class="list-group-item">Mandatory Disclosure</a>
                                                                        {{-- <a href="{{ route('non-teaching-faculty') }}" class="list-group-item ">Non Teaching Staff</a> --}}
                                                                        <a href="{{ route('polytechnic-aicte-extension') }}" class="list-group-item">AICTE EOA</a>
                                                                        <a href="{{ route('polytechnic-affiliation') }}" class="list-group-item">MSBTE Affiliation</a>
                                                                        <a href="{{ route('polytechnic-affiliation_certificates') }}" class="list-group-item">Affiliation
                                                                            Certificates</a>
                                                                        <a href="{{ route('training-placement') }}" class="list-group-item">Training And Placement</a>
                                                                        <a href="{{ route('polytechnic-anti-ragging') }}" class="list-group-item">Antiragging Committee</a>
                                                                        {{-- <a href="#" class="list-group-item ">Grievance Redressal Cell </a> --}}
                                                                        <a href="{{ route('polytechnic-internal-complaint') }}" class="list-group-item">Internal Complaint
                                                                            Committee</a>
                                                                        <a href="{{ route('polytechnic-about-scst') }}" class="list-group-item">SC/ST Cell</a>
                                                                        <a href="{{ route('polytechnic-academic-calendar') }}" class="list-group-item ">Academic
                                                                            Calender</a>
                                                                        <a href="{{ route('aluminiregister') }}" class="list-group-item">Alumni Registration</a>
                                                                        <a href="{{ route('list-events') }}" class="list-group-item ">Events</a>
                                                                        <a href="{{ route('list-fees-regulating-authority') }}" class="list-group-item ">Fees Regulatiion Authority </a>

                                                                        <div class="list-group-item ">
                                                                            <a style="display: none;"></a>
                                                                            <h6 class="dropdown-toggle" style="font-size: 17px; color:white;"><b>Student Section</b></h6>
                                                                            <a href="{{ route('list-student-section-download') }}" class="list-group-item "> Download</a>
                                                                            <a href="{{ route('list-student-section-scholarship') }}" class="list-group-item "> Scholarship</a>
                                                                        </div>
                                                                        <div class="list-group-item ">
                                                                            <a style="display: none;"></a>
                                                                            <h6 class="dropdown-toggle" style="font-size: 17px; color:white;"> <b>Plan</b></h6>
                                                                            <a href="{{ route('list-expert-lecture') }}" class="list-group-item "> Expert Lecture</a>
                                                                            <a href="{{ route('list-industrial-visit-mentor') }}" class="list-group-item "> Industrial Visit and Mentor Meeting</a>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-9 col-md-9 col-sm-12 pt-5 govbody">
                        <div class="table-responsive">

                            <!-- Add this wrapper -->
                            <div class="product-type card-shadow p-4">
                                <div class="panel-heading">
                                    <center>
                                        <h3 class="panel-title pb-2" style="color:#494680; font-size:20px"><b>GOVERNING BODY</b></h3>
                                    </center>

                                </div>
                                <div class="panel-body">
                                    <table id="example" class="table display responsive nowrap table-striped table-hover table-bordered border-dark" style="width:100%">
                                        <thead class="">
                                            <tr>
                                                <th scope="col" class=" justify-content-center">
                                                    <center> SR.NO</center>
                                                </th>
                                                <th scope="col">
                                                    <center> Name</center>
                                                </th>
                                                <th scope="col">
                                                    <div class="d-flex justify-content-center">
                                                        Designation
                                                    </div>
                                                </th>
                                                {{-- <th scope="col">
                                                <div class="d-flex justify-content-center">
                                                    Address
                                                </div>
                                            </th> --}}
                                            <th scope="col">
                                                    <div class="d-flex justify-content-center">
                                                        Education
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($data_output as $data)
                                            <tr class="">
                                                <td>
                                                    <center>{{ $data->fld_bm_id }}</center>
                                                </td>
                                                <td>
                                                    {{ $data->fld_bm_name }}
                                                </td>
                                                <td>
                                                   {{ $data->Designation }}
                                                </td>
                                                {{-- <td>
                                                    <center>{{ $data->gov_address }}</center>
                                                </td> --}}
                                                <td>
                                                  {{ $data->education }}
                                                </td>

                                            </tr>
                                            @empty
                                            {{-- <h4>No Data Found For District Disaster Management Plan</h4> --}}
                                            @endforelse
                                        </tbody>
                                    </table>

                                </div>

                            </div> <!-- Close this wrapper -->

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection


    <script>
        // JavaScript to open modal for each image
        var modals = document.querySelectorAll('.modal');
        var images = document.querySelectorAll('.myImg');
        var modalImages = document.querySelectorAll('.modal-content');
        var captions = document.querySelectorAll('#caption');

        images.forEach(function(image, index) {
            image.onclick = function() {
                modals[index].style.display = "block";
                modalImages[index].src = this.src;
                captions[index].innerHTML = this.alt;
            }
        });

        var closeButtons = document.querySelectorAll('.close');
        closeButtons.forEach(function(button) {
            button.onclick = function() {
                var modal = this.parentElement;
                modal.style.display = "none";
            }
        });

        // Close modal on outside click
        window.onclick = function(event) {
            modals.forEach(function(modal) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            });
        }
    </script>