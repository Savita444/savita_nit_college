@extends('website.layout.master')
@section('content')
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td,
#customers th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}

#customers tr:nth-child(even) {
    background-color: #f2f2f2;
}

#customers tr:hover {
    background-color: #ddd;
}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
</style>
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container">

        <div class="col-sm-12" style="padding:0;">
            {{-- <h4 style="color:green"><strong>Civil Engineering Plans</strong></h4>
        <div class="pull-right"><img src="../up-images/civil-iconimgFile568246ec20aed.png" alt="" class="img-responsive"></div> --}}
        </div>

    </div>
</div>
<div class="container-fluid">
    <div class="container card-shadow">
        <div class="row" style="padding:0px">
            <div class="col-md-9 col-sm-12 text-justify" id="iwtContentArea">
                <div class="panel-group" id="accordion">
                    <div class="" id="">
                        <div id="collapse4" class="">
                            <div class="panel-body">

                                @if (isset($data_output_category) && isset($data_output_category['id']))
                                <div class="" style="color:#494680; font-size:20px; padding-left:17px">
                                    <strong>{{ $data_output_category->Department }} </strong>
                                </div>
                                @else
                                @endif

                                <div>

                                    <center>
                                        <div class="table-responsive p-3 pt-2">
                                            <!-- Add this wrapper -->

                                            <table id="example"
                                                class="table display responsive nowrap table-striped table-hover table-bordered border-dark"
                                                style="width:100%;">
                                                <thead class="">
                                                    <tr>
                                                        <th scope="col" class=" justify-content-center"><center>SR.NO</center></th>
                                            <th scope="col">
                                                <center>Name</center>
                                            </th>
                                            <th scope="col">
                                                <div class="d-flex justify-content-center">Qualification
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="d-flex justify-content-center">Designation
                                                </div>
                                            </th>
                                            <th scope="col">
                                                <div class="d-flex justify-content-center">Experiance</div>
                                            </th>
                                            <th scope="col">
                                                <div class="d-flex justify-content-center">Photo</div>
                                            </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($data_output as $data)
                                                    @if ($data->fld_staff == 2)
                                                    <tr class="">
                                                        <td>
                                                            <center>{{ $loop->iteration }}</center>
                                                        </td>
                                                        <td>
                                                            <center>{{ $data->fld_staff_name }}</center>
                                                        </td>
                                                        <td>
                                                            <center>{{ $data->fld_staff_qualification }}</center>
                                                        </td>
                                                        <td>
                                                            <center>{{ $data->Designation }}</center>
                                                        </td>
                                                        <td>
                                                            <center>{{ $data->fld_staff_experiance }}</center>
                                                        </td>
                                                        <td>
                                                            <center>
                                                                <img id="english" src="{{ Config::get('DocumentConstant.STAFF_VIEW') }}{{ $data->fld_staff_photo }}" class=" img-thumbnail  hidden-sm" height="100px" width="100px">
                                                             </center>
                                                        </td>
                                                    </tr>
                                                    @endif
                                                    @empty
                                                    <tr>
                                                        <td colspan="5" class="text-center">No Data Found</td>
                                                    </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </center>
                                </div>
                            </div>
                            <!--/panel 1-->
                            <!--accordion panel-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
                @include('website.pages.department.right-sidebar-department')
            </div>
        </div>
    </div>
</div>
@endsection