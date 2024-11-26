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
                <div>
                    <div class="row">
                        <div class="col-md-3 hidden-sm right-col-fix ps-2" id="iwtRightPannel">
                            @include('website.pages.home-sidebar.right-sidebar-home')
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                            <div class="col-lg-9 col-md-9 col-sm-12 product-type card-shadow p-4" style=" width:100%">
                                <div >
                                    <div class="panel-heading">
                                        <center>
                                            <h3 class="panel-title" style="color:#494680"><b>ANTIRAGGING COMMITTEE</b>
                                            </h3>
                                        </center>
                                        <span class="pull-right clickable"><i
                                                class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                                    </div>
                                    <div class="panel-body">
                                        <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">-->

                                        <center>
                                            <div class="table-responsive p-3" style="width:100%">
                                                <!-- Add this wrapper -->
                                                <table id="example"
                                                    class="table display responsive nowrap table-striped table-hover table-bordered border-dark">
                                                    <thead class="">
                                                        <tr>
                                                            <th scope="col" class=" justify-content-center"><center>SR.NO</center></th>
                                                            <th scope="col">
                                                                <center>Name</center>
                                                            </th>
                                                            <th scope="col">
                                                                <div class="d-flex justify-content-center">Designation
                                                                </div>
                                                            </th>
                                                            <th scope="col">
                                                                <div class="d-flex justify-content-center">Mobile Number
                                                                </div>
                                                            </th>
                                                            <th scope="col">
                                                                <div class="d-flex justify-content-center">Email</div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($data_output as $data)
                                                        <tr class="">
                                                            <td>
                                                                <center>{{ $loop->iteration }}</center>
                                                            </td>
                                                            <td>
                                                               {{ $data->fld_bm_name }}
                                                            </td>
                                                            <td>
                                                               {{ $data->designation_name }}
                                                            </td>
                                                            <td>
                                                               {{ $data->mobilenumber }}
                                                            </td>
                                                            <td>
                                                               {{ $data->email }}
                                                            </td>
                                                        </tr>
                                                        @empty
                                                        <tr>
                                                            <td colspan="4" class="text-center">No Data Found</td>
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