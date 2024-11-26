@extends('website.layout.master')
@section('content')
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div >
        <!-- <div class="col-sm-12" style="padding:0;">
            <h2><strong></strong></h2>
            <div class="pull-right"><img src="../up-images/civil-iconimgFile568246ec20aed.png" alt=""
                    class="img-responsive"></div>
        </div> -->
        <div class="panel_content">
            <div >
                <div class="row">
                    <div class="col-md-3 hidden-sm right-col-fix ps-2" id="iwtRightPannel">
                        @include('website.pages.home-sidebar.right-sidebar-home')
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="col-lg-9 col-md-9 col-sm-9 product-type card-shadow" style=" width:100%">
                            <div >
                                <div class="panel-heading">
                                    <center>
                                        <h3 class="panel-title pt-2" style="color:#494680"><b>MSBTE AFFILIATION</b></h3>
                                    </center>
                                    <span class="pull-right clickable"><i
                                            class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                                </div>
                                <div class="panel-body">
                                    <center>
                                        <div class="table-responsive p-3 ">
                                            <!-- Add this wrapper -->
                                            <table id="example"
                                                class="table display responsive nowrap table-striped table-hover table-bordered border-dark"
                                                style="width:100%">
                                                <thead class="">
                                                    <tr>
                                                        <th scope="col" class=" justify-content-center">
                                                            <center> SR.NO</center>
                                                        </th>
                                                        <th scope="col" class="">
                                                            <center>Name</center>
                                                        </th>
                                                        <th scope="col">
                                                            <div class="d-flex justify-content-center">
                                                                Download File
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($data_output as $data)
                                                    <tr>
                                                        <td>  <center>{{ $loop->iteration }}</center></td>
                                                      
                                                        <td>
                                                            <center>{{ $data->title }}</center>
                                                        </td>
                                                        <td>
                                                            <center><a
                                                                    href="{{ Config::get('DocumentConstant.AFFILIATION_MSBTE_VIEW') }}{{ $data->file }}"
                                                                    target="_blank" class="btn btn-small download-btn1 btn-icon-only icon-ok " style="color:#fff;background-color:  #015198">
                                                                    Download
                                                                </a></center>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="3">No Data Found</td>
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
</div>
@endsection