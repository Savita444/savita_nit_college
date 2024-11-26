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
            width: 800px;
            /*-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
            /*box-shadow: 0 1px 1px rgba(0,0,0,.05);*/
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
        <div class="container">

            <div class="col-sm-12" style="padding:0;">
                <h2><strong></strong></h2>
                <div class="pull-right"><img src="../up-images/civil-iconimgFile568246ec20aed.png" alt=""
                        class="img-responsive"></div>
            </div>

            <div class="panel_content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
                            @include('website.pages.home-sidebar.right-sidebar-home')
                        </div>  
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <div class="col-lg-9 col-md-9 col-sm-9">
                                <div class="panel panel-primary product-type">
                                    <div class="panel-heading">
                                        <center>
                                            <h3 class="panel-title" style="color:blue"><b>Service Rules</b></h3>
                                        </center>
                                        <span class="pull-right clickable"><i
                                                class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                                    </div>
                                    <div class="panel-body">
                                        <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">-->

                                        <center>

                                            @if ($data_output)
                                                <iframe src="../images/servicerule/<?php echo $data_output['file']; ?>" width="100%"
                                                    height="800px"></iframe>
                                            @else
                                                <p>No data found</p>
                                            @endif
                                        </center>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid" style=" background:#fff; padding-top:40px; padding-bottom:40px">
        <div class="container">
            <div class="row" style="padding:0px">
                <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
                    <div class="row outer-white">
                        <div class="col-sm-12">

                            <p></p>
                            <div>
                                <h2 style="color:blue"></h2>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="panel-group" id="accordion">
                        <!--accordion panel-->

                        <!--panel 1-->
                        <div class="" id="">
                            <div class="">
                                <h4 class="">

                                </h4>
                            </div>

                            <div id="" class="">
                                <div class="">
                                    <div class="row outer-white">
                                        <div class="col-sm-12">
                                            <div>
                                                <h3></h3>
                                            </div>
                                            <div>
                                                <p></p>
                                                <ul class="arrow-blue">
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="row outer-white">
                                        <div class="col-sm-12">
                                            <!--<img src="../up-images/engineering-mechanics-labimgFile56d40781da7f6.jpg" alt="Engineering Mechanics Laboratory" class="img-responsive" style="margin:0 auto">-->
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="row outer-white">
                                        <div class="col-sm-12">
                                            <div>
                                                <h2></h2>
                                            </div>
                                            <div>



                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    <!--<div class="row outer-white">
                <div class="col-sm-12">
                    
                    
                </div>
        </div><!-- /.row -->
                                </div>
                            </div>

                        </div><!--/panel 1-->
                        <!--accordion panel-->

                        <!--panel 1-->
                        <div class="" id="">


                            <div id="">
                                <div class="">

                                    <div class="">
                                        <div class="">

                                            <div>
                                                <p></p>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="">
                                        <div class="">
                                            <!--<img src="../up-images/mechanics-of-structures-labimgFile56d4079d1461d.jpg" alt="Mechanics of Structures Laboratory" class="img-responsive" style="margin:0 auto">------->
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="">
                                        <div class="">
                                            <div>
                                                <h2></h2>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="">
                                        <div class="">
                                            <div>
                                                <h3></h3>
                                            </div>
                                            <div class="">
                                                <p><strong> </strong></p>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                </div>
                            </div>

                        </div><!--/panel 1-->
                        <!--accordion panel-->

                        <!--panel 1-->
                        <div class="" id="">
                            <div class="">

                            </div>

                            <div id="" class=" ">
                                <div class="">
                                    <div class="">
                                        <div class="">

                                            <div>

                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="row outer-white">
                                        <!--<div class="col-sm-12">
                    <img src="../up-images/geo-tech-labimgFile56d407cee9833.jpg" alt="Geo Tech. & Concrete Technology Engineering La" class="img-responsive" style="margin:0 auto">
                </div>--->
                                    </div><!-- /.row -->
                                    <div class="row outer-white">
                                        <div class="col-sm-12">

                                            <div>
                                            </div>
                                        </div>
                                    </div><!-- /.row -->
                                    <div class="row outer-white">
                                        <div class="col-sm-12">


                                        </div>
                                    </div><!-- /.row -->
                                </div>
                            </div>

                        </div><!--/panel 1-->
                    </div>
                </div>
                <div class="col-md-1 hidden-sm">&nbsp;</div>
                <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
                    <!-- <div
        style="margin-top: -40px;
    margin-bottom: 12px;
    text-align: center;
    border-radius: 0px 0px 10px 10px;
    background-color:   #015198;
    color: rgb(255, 255, 255);">
        <i>Last updated on : 01-08-2016 12:32 PM</i>
        </div> -->
                    <!--Right col-->

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function getsource(path) {

            var frame = document.getElementById('curriculamframe');

            frame.src = path;

        }
    </script>
@endsection
