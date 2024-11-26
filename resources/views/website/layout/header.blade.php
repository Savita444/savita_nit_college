<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> NIT</title>
    <link rel="icon" href="{{ asset('public\assets\Akole_Poly\logo.gif.jpg') }}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('public/assets/visitors/hm/design/style.css') }}" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .heading1 {
            font-size: 19px;
            line-height: 23px;
            font-family: 'Lato', sans-serif;
            text-transform: uppercase;
            color: #1b2834;
            font-weight: 900;
        }


        .navbar {
            --bs-navbar-padding-y: 0rem;
        }

        .row>* {
            padding-right: 0px !important;
        }

        .rowrspace>* {
            padding-right: 0px !important;
        }

        .topoftop:hover {
            color: white !important;
        }

        .nav-link:hover::before,
        .nav-link.active::before {
            width: 80%;
            visibility: visible;

        }

        .mob-display {
            display: none;
        }

        .web-display {
            display: block;

        }

        .red-watch-bg {
            width: 100%;
            background-color: #015198;
            position: relative;
            height: 40px;
        }

        .nav-item a {
            font-weight: 600 !important;
        }

        li .dropdown-item {
            font-weight: normal !important;
        }

        .dropdown-menu {
            padding: 10px;

        }



        .spaceacademic {
            width: 280px !important;
        }



        .alumnispace {
            width: 200px !important;
        }

        .dropdown-menu li a {
            font-weight: normal !important;
            color: #1b2834;
            /* padding: 30px; */
        }

        .dropdown-menu ul li:hover {
            background-color: #015198;
            color: #fff;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            background-color: #015198;
            color: #fff;
        }



        li #footer-links {
            color: #494680;
            font-size: 13px;
            display: block;
            font-weight: 600 !important;
        }

        a:hover {
            color: #1b2834 !important;
        }

        a:hover:active {
            color: #1b2834 !important;
        }

        .nav-link1::before {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            background-color: blue !important;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            visibility: hidden;
            transition: 0.3s ease-in-out;
            color: black;
        }

        .aaaa .aaab:hover {
            color: #fff !important;
            background-color: #015198 !important;
            padding: 5px 17px;
        }

        .aaaa .aaab:hover {
            color: #fff !important;
            background-color: #015198 !important;

            /* padding: 5px 17px; */
        }


        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            padding-top: 70px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation */
        .modal-content,
        #caption {
            -webkit-animation-name: zoom;
            -webkit-animation-duration: 0.6s;
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
            from {
                -webkit-transform: scale(0)
            }

            to {
                -webkit-transform: scale(1)
            }
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }

            .dropdown-toggle::after {
                float: right !important;
            }

            .padding-right {
                padding-right: 10px !important;
            }

            .navbar-toggler1 {
                /* Top: -84 !important; */
                margin-bottom: 400px;
            }
        }



        @media only screen and (max-width: 767px) {

            .nav-link1::before {
                content: "";
                position: absolute;
                width: 0;
                height: 2px;
                background-color: #fff !important;
                bottom: 20px;
                left: 50%;
                transform: translateX(-50%);
                visibility: hidden;
                transition: 0.3s ease-in-out;
                color: black;
            }



            .aaaa .aaab:hover {
                color: black !important;
                background-color: white !important;
                padding: 5px 17px;
            }

            .padding-right {
                padding-right: 10px !important;
            }


            .main-header {
                font-size: 14px;
            }

            .heading1 {
                font-size: 11px;
                line-height: 20px;
                text-transform: uppercase;
                color: #1b2834;
                font-weight: 900;
            }

            .mob-width {
                width: 40px;
            }


            .nitlogo {
                padding-left: 25px !important;

            }

            .aff-hide {
                display: none !important;
            }

            .mob-display {
                display: block;
                margin-top: -20px !important
            }

            .web-display {
                display: none;
            }

            .red-watch-bg {
                width: 100%;
                background-color: #015198;
                position: relative;
                height: 40px;
            }

            .nav-item a {
                font-weight: 600 !important;
            }

            li .dropdown-item {
                font-weight: normal !important;
            }

            .dropdown-menu {
                padding: 10px;
                overflow: hidden;
            }

            .dropdown-menu li a {
                font-weight: normal !important;
                color: #1b2834;

            }

            .dropdown-menu ul li:hover {
                background-color: #015198;
                color: #fff;
            }

            .dropdown-item.active,
            .dropdown-item:active {
                background-color: #015198;
                color: #fff;
            }


            li #footer-links {
                color: #494680;
                font-size: 13px;
                display: block;
                font-weight: 600 !important;
            }

            a:hover {
                color: #1b2834 !important;
            }

            a:hover:active {
                color: #1b2834 !important;
            }

            /* .shiftright{
                margin-top: 10px;
            } */

        }



        @media only screen and (max-width: 767px) {
            .main-header {
                font-size: 14px;
            }

            .navbar-nav>li>a {
                /* padding-top: 5px; */
                padding-bottom: 5px;
            }

            .heading1 {
                font-size: 11px;
                line-height: 20px;
                text-transform: uppercase;
                color: #1b2834;
                font-weight: 900;
            }

            .itemfromstart {
                justify-content: start !important;

            }

            .img-fluid {
                width: 70px;

            }

            .nitlogo {
                padding-left: 25px !important;

            }

            /* .shiftright{
                margin-top: 10px;
            } */

            .padding-right {
                padding-right: 10px !important;
            }


            .mob-display {
                display: block;
            }

            .web-display {
                display: none;
            }

            .navbar-toggler {
                position: absolute;
                z-index: 1001;
                left: 147px;
                cursor: pointer;
                background-color: white;
                box-shadow: 0 0 20px black;
            }

            .navbar-collapse {
                position: fixed;
                margin-top: 251px;
                left: -100%;
                width: 50%;
                height: 100%;
                background: white;
                z-index: 1001;
                transition: left 0.3s;
            }


            .navbar-collapse .navbar-toggler {
                left: 0;
            }

            .navbar-collapse.show {
                left: 0;
            }

            .mob-toggle-right-side {
                display: flex;
                align-items: center !important;
            }

            .mob-width-left {
                width: 80%;
            }

            .mob-width-right {
                width: 20%;
            }

            #iwtHeaderNav {
                border-bottom: none;
            }


            .navbar-collapse .navbar-toggler {
                /* right: 10%; */
                left: 0;
            }


            @media only screen and (min-width: 768px) and (max-width: 19000px) {

                .alumnispace {
                    width: 200px !important;
                }

                .sticky {
                    position: sticky;
                    top: 0 !important;
                    width: 100%;
                    z-index: 1001;
                }

                .shiftright {
                    display: flex;
                    justify-content: end;
                }

            }

            .AICTE {
                margin-left: -68px !important;
            }

            .mob-toggle-right-side {
                display: flex;
                align-items: center !important;
            }

            .mob-width-left {
                width: 80%;

            }

            .mob-width-right {
                width: 20%;
            }

            #iwtHeaderNav {
                border-bottom: none;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 1024px) {
            body {
                font-size: 16px;
            }

            .main-header {
                text-align: center;

            }

            .sticky {
                position: sticky;
                top: 0 !important;
                width: 100%;
                z-index: 1001;
            }

            .shiftright {
                display: flex;
                justify-content: end;
            }

        }

        @media only screen and (min-width: 768px) {

            /* Hide close button on larger screens */
            .btn-close {
                display: none;
            }

            .sticky {
                position: sticky;
                top: 0 !important;
                width: 100%;
                z-index: 1001;
            }

            .shiftright {
                display: flex;
                justify-content: end;
            }


        }

        @media only screen and (max-width: 767px) {

            /* Show close button on mobile devices */
            .btn-close1 {
                display: block;
                position: absolute;
                background-color: #e6f3ff;
                color: black;
                font-size: 30px;
                height: 15px;
                width: 10px;
                top: 25px;
                right: 21px;
                z-index: 1001;
            }


            .offcanvas-body {
                background-color: #e6f3ff;
            }

            .padding-right {
                padding-right: 10px !important;
            }

            /* .shiftright{
                margin-top: 10px;
            } */


        }


        .admissionbutton {
            /* background-color: #004A7F; */
            -webkit-border-radius: 10px;
            border-radius: 10px;
            box-shadow: none !important;
            border: none;
            /* color:white !important; */
            cursor: pointer;
            display: inline-block;
            font-family: Arial;
            font-size: 20px;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            /* -webkit-animation: glowing 1500ms infinite;
  -moz-animation: glowing 1500ms infinite;
  -o-animation: glowing 1500ms infinite; */
            animation: glowing 1500ms infinite;
        }

        @-webkit-keyframes glowing {
            0% {
                background-color: #e60000;
                -webkit-box-shadow: 0 0 3px #e60000;
            }

            50% {
                background-color: #ff3333;
                -webkit-box-shadow: 0 0 40px #ff3333;
            }

            100% {
                background-color: #e60000;
                -webkit-box-shadow: 0 0 3px #e60000;
            }
        }

        @-moz-keyframes glowing {
            0% {
                background-color: #e60000;
                -moz-box-shadow: 0 0 3px #e60000;
            }

            50% {
                background-color: #ff3333;
                -moz-box-shadow: 0 0 40px #ff3333;
            }

            100% {
                background-color: #e60000;
                -moz-box-shadow: 0 0 3px #e60000;
            }
        }

        @-o-keyframes glowing {
            0% {
                background-color: #e60000;
                box-shadow: 0 0 3px #e60000;
            }

            50% {
                background-color: #ff3333;
                box-shadow: 0 0 40px #ff3333;
            }

            100% {
                background-color: #e60000;
                box-shadow: 0 0 3px #e60000;
            }
        }

        @keyframes glowing {
            0% {
                background-color: #e60000;
                box-shadow: 0 0 3px #e60000;
            }

            50% {
                background-color: #ff3333;
                box-shadow: 0 0 40px #ff3333;
            }

            100% {
                background-color: #e60000;
                box-shadow: 0 0 3px #e60000;
            }
        }
    </style>
</head>

<body>
    <script>
        $(document).ready(function() {

            // For the Second level Dropdown menu, highlight the parent	
            $(".dropdown-menu")
                .mouseenter(function() {
                    $(this).parent("li").addClass("active");
                });
            $(".dropdown-menu")
                .mouseleave(function() {
                    $(this).parent("li").removeClass("active");
                });

        });
        $(document).on("show", ".accordion", function(e) {
            //$(".accordion-heading i").toggleClass(" ");
            $(e.target).prev(".accordion-heading").addClass("accordion-opened");
        });

        $(document).on("hide", ".accordion", function(e) {
            $(this).find(".accordion-heading").not($(e.target)).removeClass("accordion-opened");
            //$(".accordion-heading i").toggleClass("fa-chevron-right fa-chevron-down");
        });
    </script>
    {{-- ======================Start Top Header==================== --}}
    <div class="container-fluid px-3" id="iwtHeaderTopNav">
      
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 " style="line-height: 25px;">
                    <div class="col-lg-12 col-md-12 col-sm-8">
                        <span style="font-size: 13px;">Institute Address : <a class="topoftop" href="https://maps.app.goo.gl/sSqdKCwiLyZYPtup8" target="_blank">Cannol
                                Road,Behind Hydro-division(MERI),Nashik-422003</a></span>
                    </div>
                    <div class="col-sm-4">
                        
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 shiftright" style="justify-content: end;">
                    <span style="font-size:11px !important;">Email : <a class="topoftop" href="mailto:info@nitnasik.com"> principal@nitnasik.com</a> </span> <span style="padding-left:5px;padding-right:5px;">|</span>
                    <span style="font-size:11px !important;">Contact Number : <a class="topoftop" href="tel:9552551056">9552551056</a>&nbsp;</span>

                    <!-- <a href="tel:8149822404">8149822404</a>&nbsp;
                    <a href="tel:9890269439">9890269439</a> -->
                </div>
                
            </div>
        </div>
    {{-- =========================End Top Header======================== --}}
    {{-- ======================Start Sub Header==================== --}}
    <div class="mob-toggle-right-side" id="iwtHeaderNav">
        <div class="container-fluid pt-2 pb-1 mob-width-left">
            <div class="container-fluid main-header">
                <div class="row align-items-center d-flex justify-content-center">
                    <div class="col-lg-1 col-md-1 col-sm-0"></div>
                    <div class="col-lg-1 col-md-1 col-sm-1 col-3 gunju1 ">
                        <a href="/"><img src="{{ asset('public/assets/Akole_Poly/NIT.jpg') }}" class="img-fluid  mob-width" alt="Logo" style="height:110px; "></a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-3 col-9 text-center">
                        <h3 class="heading1 d-flex justify-content-start  padding-right">NASHIK INSTITUTE OF TECHNOLOGY (NIT'S)</h3>
                        <h2 class="heading1 d-flex justify-content-start  padding-right">LATE ANNASAHEB PATIL POLYTECHNIC</h2>
                        <p class=" d-flex justify-content-star  aff-hide  padding-right"> Affiliated to MSBTE Mumbai, Approved By Govt.
                            of
                            Maharashtra AICTE</p>

                        <!-- <span class="d-lg-block d-none d-flex justify-content-center AICTE ">
                            {{-- <marquee> --}}
                            Affiliated to MSBTE Mumbai, Approved By Govt. of Maharashtra AICTE
                            {{-- </marquee> --}}
                        </span> -->

                    </div>

                    <div class="col-lg-1 col-md-1 col-3 text-center displsy-flex web-display mob-display ">
                        <img src="{{ asset('public/assets/Akole_Poly/TWOWIN2p_400x400.jpg') }}" alt="Avatar" class="img-fluid rounded-circle" style="width:100px;">
                        <p style="font-size:12px;color:red;"><b>Shri.&nbsp;Suresh&nbsp;Patil</b></p>
                    </div>
                    <!-- <div class="col-lg-1 col-md-1 "></div> -->
                    <div class="col-lg-3 col-md-3  col-3 text-center displsy-flex web-display mob-display">
                        <button class="btn  admissionbutton">
                            <a href="{{ route('enquiry') }}"><b style="z-index: 100; color:#fff">Admission
                                    Enquiry</b></a>
                        </button>
                        <!-- <b><a href="{{ route('enquiry') }}" style="color:red">Click Here For <br>Admission Enquiry <br>2024-25</a></b> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ======================End Sub Header==================== --}}
    <div id="stick" class="navbar-light bg-light">
        <div class="container-fluid mob-width-right " id="iwtHeaderNav">
            <div class="container mob-toggle-left-side ">
                <nav class=" navbar  navbar-expand-lg navbar-light  ">
                    <div class="container-fluid ">
                        <button class="navbar-toggler navbar-toggler1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end d-flex justify-contend-center itemfromstart" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <button class="btn-close btn-close1  d-lg-none" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            <div class="offcanvas-body ">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-link1 " aria-current="page" href="{{ route('/') }}">Home</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-link1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            About Us
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="aaaa"><a class="dropdown-item aaab " href="{{ route('polytechnic-president') }}">President
                                                    Desk</a>
                                            </li>
                                            <li class="aaaa"><a class="dropdown-item aaab " href="{{ route('polytechnic-principals') }}">Principal
                                                    Desk</a>
                                            </li>
                                            <li class="aaaa"><a class="dropdown-item aaab" href="{{ route('mission-and-vision') }}">Mission &
                                                    Vision</a>
                                            </li>
                                            <li class="aaaa"><a class="dropdown-item aaab" href="{{ route('about-governingbody') }}">Governing
                                                    Body</a>
                                            </li>
                                            <li class="aaaa"><a class="dropdown-item aaab" href="{{ route('about-futureplans') }}">Future
                                                    Plans</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-link1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Departments
                                        </a>
                                        <ul class="dropdown-menu">
                                            @foreach ($menuDepartment as $menuItemDepartment)
                                            <li class=" aaaa">
                                                <a class="dropdown-item aaab " href="{{ route('department-profile', ['id' => $menuItemDepartment['id']]) }}">{{ $menuItemDepartment['Department'] }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-link1" href="{{ route('achievement') }}">Achievements</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-link1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Facilities
                                        </a>
                                        <ul class="dropdown-menu">

                                            @foreach ($menuFacility as $menuFacility)
                                            <li class=" aaaa">
                                                <a class="dropdown-item aaab " href="{{ route('polytechnic-facilities', ['id' => $menuFacility['facility_id']]) }}">{{ $menuFacility['facility'] }}</a>
                                            </li>
                                            @endforeach
                                        </ul>

                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-link1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Library
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" aaaa">
                                                <a class="dropdown-item aaab " href="{{ route('library-staff')}}">Library Staff</a>
                                            </li>
                                            <li class=" aaaa">
                                                <a class="dropdown-item aaab " href="{{ route('library-books')}}">Books</a>
                                            </li>
                                            <li class=" aaaa">
                                                <a class="dropdown-item aaab " href="{{ route('library-journals-magzines')}}">Journals & Magzines</a>
                                            </li>
                                            <li class=" aaaa">
                                                <a class="dropdown-item aaab " href="{{ route('library-rules-requlations')}}">Rules & Regulations</a>
                                            </li>

                                        </ul>
                                    </li>


                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-link1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Admission
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class=" aaaa">
                                                <a class=" aaab dropdown-item  " href="{{ route('courses-offered') }}">Courses Offered</a>
                                            </li>
                                            <li class=" aaaa">
                                                <a class=" aaab dropdown-item  " href="{{ route('documents-required') }}">Documents Required</a>
                                            </li>
                                            <li class=" aaaa">
                                                <a class=" aaab dropdown-item  " href="{{ route('cap-admission-procedure-steps') }}">CAP admission Procedure Steps</a>
                                            </li>
                                            <li class=" aaaa">
                                                <a class=" aaab dropdown-item  " href="{{ route('polytechnic-rules') }}">Admission Rules And
                                                    Process</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-link1" style="width: 110px;" href="{{ route('contact-us') }}">Contact Us</a>
                                    </li>


                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-link1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Alumni
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item aaaa"><a class=" dropdown-item aaab" href="{{ route('aluminiregister') }}">Alumni Registration</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown"><a class="nav-link nav-link1" href="{{ route('polytechnic-gallery') }}">Gallery</a>
                                    </li>



                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-link1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Activities
                                        </a>
                                        <ul class="dropdown-menu">
                                            @foreach ($menu as $menuItem)
                                            <li class=" aaaa">
                                                <a class="dropdown-item aaab " href="{{ route('polytechnic-co-curricular', ['id' => $menuItem['id']]) }}">{{ $menuItem['activities'] }}</a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link nav-link1 dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Quick Links
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="aaaa">
                                                <a class="aaab dropdown-item" href="https://msbte.org.in/" target="_blank">msbte.org</a>
                                            </li>
                                            <li class="aaaa">
                                                <a class="aaab dropdown-item" href="https://www.aicte-india.org/" target="_blank">aicte-india.org</a>
                                            </li>
                                            <li class="aaaa"><a class="aaab dropdown-item" href="http://www.dtemaharashtra.gov.in/index.html" target="_blank">dtemaharashtra.gov.in</a></li>
                                            <li class="aaaa"><a class="aaab dropdown-item" href="https://scholarships.gov.in/" target="_blank">scholarships.gov.in</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>






        <!--/container-->

        <div class="mob-display" style="">
            <p class="px-2">
                {{-- <marquee> --}}
                {{-- <b>Approved By</b> :
                <b>Govt. of Maharashtra & All India Council of Technical Education (AICTE)</b>&nbsp;&nbsp;&nbsp;<b>Affiliated To</b> :
                <b>Maharashtra State Board Of Technical Education (MSBTE), Mumbai</b> --}}
                {{-- </marquee> --}}


                <span>
                    <span class="d-flex justify-content-center">
                        Affiliated to MSBTE Mumbai, Approved By Govt. of Maharashtra AICTE</span> <br>
                    <button class="btn btn-danger">
                        <b> <a href="{{ route('enquiry') }}" style="color:#fff"> Admission Enquiry</a></b></span>
                </button>
            </p>
        </div>
    </div>
    <!--/container-fluid /iwtHeaderNav-->
    <!--======================= iwtBanner =======================-->
    <!-- <img src="{{ asset('public/assets/visitors/hm/design/images/alarm-icon.png') }}" border="0" height="40px"> -->

    <div class="container-fluid red-watch-bg ">
        <div class="d-flex" style="align-items: center;">
            <img src="{{ asset('public/assets/visitors/hm/design/images/alarm-icon.png') }}" border="0" height="40px">
            <marquee>
                <h5 style="color: white; font-size:18px"><b>NASHIK INSTITUTE OF TECHNOLOGY (NIT'S)
                        LATE ANNASAHEB PATIL POLYTECHNIC</b></h5>
            </marquee>
        </div>

        <div class="fl news-text">
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

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
    <script>
        // When the user scrolls the page, execute myFunction
        window.onscroll = function() {
            myFunction()
        };

        // Get the navbar
        var navbar = document.getElementById("stick");

        // Get the offset position of the navbar
        var sticky = navbar.offsetTop;

        // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>