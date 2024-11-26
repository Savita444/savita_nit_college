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
    background-color: #fff;
    border: 1px solid transparent;
    border-radius: 0;
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
    padding-bottom: 20px;
}

.panel-title {
    font-size: 22px;
    font-weight: 400;
    color: #494680;
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

.president-msg {
    /* margin-top: 1rem; */
    margin-bottom: 5rem;
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
    padding: 0 15px;
}

[data-aos="fade-left"] {}

[data-aos="fade-right"] {}

.row1 {
    margin-right: 0px;
    margin-left: 0px;
    width: 1100px
}
.imgborder{
    /* border: 1px solid #545353; */
    box-shadow: 0 8px 17px 2px rgba(0, 0, 0, 0.14), 0 3px 14px 2px rgba(0, 0, 0, 0.12), 0 5px 5px -3px rgba(0, 0, 0, 0.2); 
}

@media (max-width: 768px) {
    .president-msg .col img {
        height: auto;
        width: 100%;
    }

    .president-msg h5 {
        font-size: 18px;
    }
    
}
</style>
<script>
$(document).on('click', '.panel-heading span.clickable', function(e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapsed')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon glyphicon-minus-sign').addClass('glyphicon glyphicon-plus-sign');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapsed');
        $this.find('i').removeClass('glyphicon glyphicon-plus-sign').addClass('glyphicon glyphicon-minus-sign');
    }
})
</script>
<div class="container-fluid pageHeading-bg " id="iwtPageHeading">
    <div >
        <div class="row ">
            <div class="col-md-3 hidden-sm right-col-fix ps-2" id="iwtRightPannel">
                @include('website.pages.home-sidebar.right-sidebar-home')
            </div>
           <div class="col-md-9">
           <div class=" pt-2 card-shadow" style="padding:0;" data-aos="flip-left">
                <center>
                    <h2 style="color:#494680" class="pt-4"><strong>President Desk</strong></h2>
                    <!-- <h3 class="panel-title"><b>President Message</b></h3> -->
                </center>
                <br>
                                
                <!-- <div class="container about1">
                <center>
                    <h3 class="panel-title"><b>President Message</b></h3>
                </center>
            </div> -->
            <div class="president-msg">
                <div style="text-align: center;" class="pt-2" data-aos="fade-left">
                    <img style="height: 300px; width:300px;" class="imgborder" src="{{ asset('public/assets/images/img11.jpeg') }}" alt=""><br>

                    <br>
                    <h6 class="mt-2 fs-3" style="color:#494680;"><strong>Mr. Suresh A. Patil</strong></h6>
                            <span style="font-size:18px"><strong>B.Sc (Hons), L.L.B.</strong></span><br>
                            <span style="font-size:18px"><strong>President,
                            Nasik Institute of Technology</strong></span>
                    <br>
                

                        <!-- <div class="text-center pt-2" data-aos="fade-left">
                        
                            <h6 class="mt-2" style="color:#494680;"><strong>Mr. Suresh A. Patil</strong></h6>
                            <span style="font-size:15px"><strong>B.Sc (Hons), L.L.B.</strong></span><br>
                            <span style="font-size:15px"><strong>President,
                            Nasik Institute of Technology</strong></span>
                        </div> -->



                </div>
                <div data-aos="fade-right " class="px-3  pt-3" style="padding-bottom: 80px;font-size: 15px">
                    <p>Through my last 36 years of experience in various sectors like Industrial, Construction, Banking,
                        Social etc. I strongly believe that there is still a long way to go to attain the increasing
                        demand of technology Savvy minds by the industrial and for that the excellence in education and
                        training is the need of hour. NIT- Nasik Institute of Technology is taking shape to bridge the
                        gap between the future demand and supply technical human resource. Over the year it will grow in
                        to a leading educational center in Maharashtra, widely recognized for its modern state of the
                        art infrastructure, vibrant campus and academic excellence in the field of technical education.
                        The courses designed are amongst the best in the industry and is believed to equip the with
                        effective knowledge, Potentials, insights and expertise so that they can make a successful and
                        bright career. Keeping in mind the requirement of building construction industry, we have
                        designed Sandwich course in Civil Engineering to give in-depth knowledge of on site working. We
                        trust the fact that if youth is equipped with proper knowledge and skills, they can be the most
                        powerful global asset .We are proud to say that we are creating Youth anium (Intellectual Youth
                        Power).
                    </p>
                    <div style="float:right">
                            <!-- <h6 class="mt-2 fs-6" style="color:#494680;"><strong>Mr. Suresh .A. Patil</strong></h6> -->
                            <!-- <span style="font-size:15px"><strong>B.Sc (Hons), L.L.B.</strong></span><br> -->
                            <!-- <span style="font-size:15px"><strong>M.Tech., B.E., DAE.</strong></span> -->
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection