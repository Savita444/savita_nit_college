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
                            <div class="col-lg-9 col-md-9 col-sm-9 product-type card-shadow p-4"style=" width:100%">
                                <div >
                                    <div class="panel-heading">
                                        <center>
                                            <h3 class="panel-title" style="color:#494680"><b>Book Details</b></h3>
                                        </center>
                                        <span class="pull-right clickable"><i
                                                class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                                    </div>
                             <div style="padding-left: 20px;">
                                <div><b>Library Details : </b></div>
                                <div>No.of Volumes : 11,842</div>
                                <div>No.of Titles : 2202</div>
                                <div>No. Of National Journals: 18</div>
                                <div>Total Expenditure: rs. 21,40,483</div>
                                <div>Library Area: 376.39 sq-m</div>
                                <div>Reading Room Capacity: 150</div>
                             </div>
                                    <div class="panel-body">
                                        <center>
                                            <div class="table-responsive p-3"> <!-- Add this wrapper -->
                                                <table id="example"
                                                    class="table display responsive nowrap table-striped table-hover table-bordered border-dark"
                                                    style="width:100%">
                                                    <thead class="">
                                                        <tr>
                                                            <th scope="col" class=" justify-content-center">
                                                               <center> SR.NO</center>
                                                            </th>
                                                            <th scope="col" class="">
                                                              <center> Name of Department</center>
                                                            </th>
                                                            <th scope="col">
                                                                <div class="d-flex justify-content-center">
                                                                    Required As Per AICTE Norms
                                                                </div>
                                                            </th>
                                                            <th scope="col">
                                                                <div class="d-flex justify-content-center">
                                                                    Available
                                                                </div>
                                                            </th>
                                                            <th scope="col">
                                                                <div class="d-flex justify-content-center">
                                                                    Required As Per AICTE Norms
                                                                </div>
                                                            </th>
                                                            <th scope="col">
                                                                <div class="d-flex justify-content-center">
                                                                    Available
                                                                </div>
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
                                                                    <center>{{ $data->course_name }}</center>
                                                                </td>
                                                                <td>
                                                                    <center>{{ $data->aicte }}</center>
                                                                </td>
                                                                <td>
                                                                    <center>{{ $data->available }}</center>
                                                                </td>
                                                                <td>
                                                                    <center>{{ $data->aicte_norms }}</center>
                                                                </td>
                                                                <td>
                                                                    <center>{{ $data->available1 }}</center>
                                                                </td>

                                                            </tr>
                                                        @empty
                                                            {{-- <h4>No Data Found</h4> --}}
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
