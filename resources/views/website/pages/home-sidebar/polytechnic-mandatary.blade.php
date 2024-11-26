@extends('website.layout.master')
@section('content')

<style>
     .row>*{
        padding-right: 0px !important;
    }

</style>


<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div>

        <!-- <div class="col-sm-12" style="padding:0;">
            <h2><strong></strong></h2>
            <div class="pull-right"><img src="../up-images/civil-iconimgFile568246ec20aed.png" alt=""
                    class="img-responsive"></div>
        </div> -->

        <div class="panel_content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 hidden-sm right-col-fix ps-2" id="iwtRightPannel">
                        @include('website.pages.home-sidebar.right-sidebar-home')
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 ">
                        <div class="panel panel-primary product-type card-shadow p-4">
                            <div class="panel-heading">
                                <center>
                                    <h3 class="panel-title " style="color:#494680; font-size: 20px">
                                        <b>MANDATORY DISCLOSURE</b>
                                    </h3>
                                </center>
                                <!-- <span class="pull-right clickable"><i
                                        class="glyphicon glyphicon-plus-sign collapse-ico"></i></span> -->
                            </div>
                            <div class="panel-body">
                                <center>
                                    <div class="table-responsive p-3">
                                        <!-- Add this wrapper -->
                                        <table id="example"
                                            class="table table-responsive table-striped table-hover table-bordered border-dark"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center">
                                                        SR.NO
                                                    </th>
                                                    <th scope="col" class="text-center">
                                                        Download File
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($data_output as $data)
                                                <tr>
                                                    <td class="text-center">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{ Config::get('DocumentConstant.MANDATORYDISCLOSURE_VIEW') }}{{ $data->file }}"
                                                            target="_blank" class="btn btn-small download-btn1 btn-icon-only icon-ok " style="color:#fff; background-color:  #015198">
                                                            Download
                                                        </a>
                                                    </td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="2" class="text-center">No Data Found</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>

                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



@endsection