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
        /* margin-top: 45px; */
        padding: 20px;
        
        
    }

    .product-size {
        margin-top: 25px;
    }

    .product-use {
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .panel-heading span {
        /* margin-top: -20px; */
        font-size: 15px;

    }
    .borderMV{
        border: 1px dotted black;
    }

    .panel-primary>.panel-heading {
        color: #000;
        /* background-color: #fff; */
        /* border-bottom: 1px solid #eeeeee; */
        margin-top: 20px;
        /* padding-bottom: 20px; */
    }

    .panel-title {
        font-size: 22px;
        font-weight: 400;
        color: #494680 !important;

    }

    /* .panel_product_type {

    margin-top: 20px;
} */

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
            $this.find('i').removeClass('glyphicon glyphicon-minus-sign').addClass('glyphicon glyphicon-plus-sign');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon glyphicon-plus-sign').addClass('glyphicon glyphicon-minus-sign');
        }
    })
</script>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div>

        <!-- <div class="col-sm-12" style="padding:0;">
            <h2><strong></strong></h2>
            <div class="pull-right"><img src="../up-images/index.php" alt="" class="img-responsive"></div>
        </div> -->

        <div class="panel_content" >
            <div>
                <div class="row">
                    <div class="col-md-3 hidden-sm right-col-fix ps-2" id="iwtRightPannel">
                        @include('website.pages.home-sidebar.right-sidebar-home')
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12"  >
                        <div class="col-lg-12 col-md-12 col-sm-12"style="background-color: #fff;height:96% !important;align-items: center; margin-bottom:55px ">
                            <div class="panel panel-primary product-type ">
                                <div class="panel-heading ">
                                    <h3 class="panel-title" style="color:#494680"><b>Mission</b></h3>
                                    {{-- <span class="pull-right clickable"><i class="glyphicon glyphicon-plus-sign collapse-ico"></i></span> --}}
                                    <div class="panel-body">
                                        <p align="Justify">To give the quality technical education for empowerment of the
                                            common masses.</p>
                                    </div>
                                </div>
                            </div>
                            <h1 style="border: 1px solid  black; width:auto; margin-left:15px; margin-right:15px;"></h1>                        
                            <div class="panel panel-primary product-type"
                                <div class="panel-heading">
                                    <h3 class="panel-title" style="color:#494680"><b>Vision</b></h3>
                                    {{-- <span class="pull-right clickable"><i class="glyphicon glyphicon-plus-sign collapse-ico"></i></span> --}}

                                    <div class="panel-body">
                                        <p align="Justify">Dedicated to promote the quality technical education through
                                            advanced teaching and learning process , high quality research and extension to
                                            serve the human society for sustainable development by developing community ,
                                            the ability and passion to work wisely, creatively and effectively , for the
                                            betterment of Humankind
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <br>







    </div>
</div>

<div class="container-fluid">
    <!-- padding-top:40px; padding-bottom:40px -->
    <div class="container">
        <div class="row" style="padding:0px">
            <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <div>
                            <h2 style="color:blue"></h2>
                        </div>
                        <div>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <p></p>

                    </div>
                </div><!-- /.row -->
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <div>
                            <h2 style="color:blue"></h2>
                        </div>
                        <div>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <P><br>
                        </p>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="col-md-1 hidden-sm">&nbsp;</div>
            <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">

            </div>
        </div>
    </div>
</div>
@endsection