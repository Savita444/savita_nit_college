@extends('website.layout.master')
@section('content')
    <style>
       

        .clickable {
            cursor: pointer;
        }

        .panel {
            background-color: #fff;
            border: 1px solid transparent;
            border-radius: 0;
            padding-top: 20px;
            color: #494680 !important;
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
        <div >

            <!-- <div class="col-sm-12" style="padding:0;">
                <h2><strong></strong></h2>
                <div class="pull-right"><img src="../up-images/index.php" alt="" class="img-responsive"></div>
            </div> -->

       
                <div >
                    <div class="row">
                    <div class="col-md-3 hidden-sm right-col-fix ps-2" id="iwtRightPannel">
                @include('website.pages.home-sidebar.right-sidebar-home')
            </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card-shadow p-4">
                                    <div class="panel-heading">
                                        <center>
                                            <h3 class="panel-title" style="color:#494680"><b>Student Section</b></h3>
                                        </center>
                                        <hr>
                                        {{-- <span class="pull-right clickable"><i class="glyphicon glyphicon-plus-sign collapse-ico"></i></span> --}}
                                    </div>
                                    <div class="panel-body">
                                        <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">-->
                                            
                                            @if (isset($error))
                                            <div>
                                                <p class="department-error"> {{ $error }}</p>
                                            </div>
                                            @else
                                            @if ($data_output->isEmpty())
                                            <div>
                                                <p class="department-error">Data not available</p>
                                            </div>
                                            @else
                                            @foreach ($data_output as $data)
                                            @if ($data->is_active == 0)
                                            <div class="alert alert-info">
                                                <p class="department-error">Data not available</p>
                                            </div>
                                            @else
                                            <p>Downloads</p>
                                                <a href="{{ Config::get('DocumentConstant.STUDENT_DOWNLOAD_VIEW') }}{{ $data->file }}"
                                                    target="_blank"
                                                    class="" style="color:#000;">
                                                    <p align="Justify"><li>{{ strip_tags($data->title) }}</p>
                                                </a>
                                                @endif
                                                @endforeach
                                                @endif
                                                @endif     

                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           

        </div>
    </div>
@endsection
