@extends('website.layout.master')
@section('content')
<style>
.panel_content {
    background-color: #eceff7;
}

.clickable {
    cursor: pointer;
}

.panel {
    background-color: #fff !important;
    border: 1px solid transparent;
    border-radius: 0;
}

.product-type,
.product-size,
.product-use {
    margin-top: 25px;
}

.product-type {
    margin-top: 45px;
}

.product-use {
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
    padding: 20px 0;
}

.panel-title {
    font-size: 22px;
    font-weight: 400;
    color: #494680;
}

.panel_product_type {
    margin-top: 20px;
    line-height: 26px;
    font-size: 18px;
    font-weight: 400;
    color: black;
}

.president-msg {
    margin: 5rem 0;
}

.president-msg .col {
    text-align: center;
}

.president-msg img {
    height: 250px;
}


.president-msg h5 {
    color: #494680;
    margin-top: 2rem;
    font-weight: bold;
}

.president-msg p {
    text-align: justify;
}

.row1 {
    margin: 0 auto;
    width: 100%;
    max-width: 1100px;
}

@media (max-width: 768px) {
    .president-msg img {
        height: auto;
        width: 100%;
    }
    .principle-row{
        padding-right:0px !important;
        margin-left:0px !important;
    }
    .row>*{
        padding-right:0px;
    }

    .president-msg h5,
    .president-msg p {
        text-align: center;
    }

    .text-center {
        text-align: center !important;
    }

    .panel_title {
        font-size: 18px;
    }

    .panel_product_type {
        font-size: 16px;
    }

    .px-5 {
        padding: 0 1.5rem !important;
    }

    .pt-1 {
        padding-top: 1rem !important;
    }

    .pb-3 {
        padding-bottom: 1rem !important;
    }

    img {
        /* width: 100%; */
        /* height: auto; */
    }
}
</style>

<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div>
        <div class="row">
            <div class="col-md-3 hidden-sm right-col-fix ps-2" id="iwtRightPannel">
                @include('website.pages.home-sidebar.right-sidebar-home')
            </div>
            <div class=" col-lg-9">
                <div class="pt-2 card-shadow"style="padding:0;" data-aos="flip-left">
                    <center>
                        <h2 style="color:#494680" class="pt-4 "><strong>Principal Desk</strong></h2>
                        <!-- <h3 class="panel-title pt-2"><b>Principal Message</b></h3> -->
                    </center>
                    <br>
               
                <div class="row  principle-row">
                    {{-- <div class="text-center" data-aos="fade-left">
                        <img src="{{ asset('public/assets/up-images/pricipal.png') }}"  alt="" width="50%">
                        <h1 class="mt-2 fs-1" style="color:#494680;"><strong>Prof.Gopal A. Wadnere</strong></h1>
                        <span style="font-size:15px"><strong>Ph.D (Mechanical Pursuing)</strong></span><br>
                        <span style="font-size:15px"><strong>M.Tech., B.E., DAE.</strong></span>
                    </div> --}}

                    
                    <div class="row ">
                        <div class="text-center pt-2" data-aos="fade-left">
                            <img src="{{ asset('public/assets/up-images/pricipal.png') }}"alt="" width="40%"><br>
                            
                            <br>
                            <h6 class="mt-2  fs-3" style="color:#494680;"><strong>Prof.Gopal A. Wadnere</strong></h6>
                            <span style="font-size:18px"><strong>Ph.D (Mechanical Pursuing)</strong></span><br>
                            <span style="font-size:18px"><strong>M.Tech., B.E., DAE.</strong></span>
                        </div>
                        <div class="px-5 pt-1 pb-3">
                            <p class="pt-3" style="color:black;"><strong>Dear Students,</strong></p>
                            <p style="font-size: 15px; text-align:justify; padding-bottom: 80px;">I welcome you to NIT'S Late Annasaheb Patil
                                Polytechnic, Nashik.
                                Education taught to teach us not only how to make a living but also how to live, hence
                                everyone in our NIT'S Campus is trying to bring to full blossoming the potential in
                                every
                                student. It is very important to learn to develop ourselves by imbibing certain
                                qualities in
                                our life. They are, a steady mind that can function without wavering in any situation, a
                                healthy body filled with a passion for life, a flexible intellect that allows space for
                                new
                                thoughts and ideas and a clear aim which gives a proper direction. Always be joyful and
                                do
                                all your work with zeal and sincerity. If you love what you are doing, you will be
                                successful in life.
                                At the Nashik Institute of Technology, everyone is committed to provide good
                                technical education along with imbibing social values.
                               So be the part of NIT Family.<br>
                            </p>
                            <div style="float:right">
                                <!-- <h6 class="mt-2" style="color:#494680;"><strong>Prof.Gopal A. Wadnere</strong></h6> -->
                                <!-- <span style="font-size:15px"><strong>Ph.D (Mechanical Pursuing)</strong></span><br>
                                <span style="font-size:15px"><strong>M.Tech., B.E., DAE.</strong></span> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background:#fff;">
    <div class="container">
        <div class="row" style="padding:0px">
            <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <h2></h2>
                    </div>
                </div>
                <div class="row outer-white">
                    <div class="col-sm-12">
                    </div>
                </div>
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <div>
                            <div class="pull-left"></div>
                        </div>
                    </div>
                </div>
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <P><br></p>
                    </div>
                </div>
            </div>
            <div class="col-md-1 hidden-sm">&nbsp;</div>
            <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
            </div>
        </div>
    </div>
</div>
@endsection