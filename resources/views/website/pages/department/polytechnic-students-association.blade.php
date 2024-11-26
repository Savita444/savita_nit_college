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
</div>
<div class="container-fluid">
    <div class="container card-shadow" style="margin-bottom: 95px;">
        <div class="row" style="padding:0px; margin-left:10px;">
            <div class="col-md-9 col-sm-12 text-justify" id="iwtContentArea">
                @if (isset($data_output_category) && isset($data_output_category['id']))
                <div class="" style="color:#494680; font-size:20px;">
                    <strong>{{ $data_output_category->Department }} </strong>
                </div>
                @else
                @endif

                <div class="row outer-white">
                    <div class="col-sm-12">
                        <div class="pt-2">
                            <p><strong> Students Association :</strong> </p>
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
                            <p class="" style="margin-right: 10px;">
                                Student Association is created by the students and for the students. For association
                                various committees are formed and various activities are conducted such as competitions,
                                seminars, workshops etc.
                            </p>
                        </div>

                        <div id="collapse4" class="">
                            <div class="panel-body">
                                <!-- <div class="row outer-white">
                                    <div class="col-sm-12">
                                        <div>
                                            <h3></h3>
                                        </div>
                                    </div>
                                </div>/.row -->
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
                                        <center>
                                            <div class="table-responsive pe-5" >
                                                <table id="example"
                                                    class="table display responsive nowrap table-striped table-hover table-bordered border-dark"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col" class="justify-content-center">
                                                                <center>SR.NO</center>
                                                            </th>
                                                            <th>
                                                                <center>Post Name</center>
                                                            </th>
                                                            <th>
                                                                <center>Name</center>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($data_output as $data)
                                                        <tr>
                                                            <td>
                                                                <center>{{ $loop->iteration }}</center>
                                                            </td>
                                                            <td>
                                                                <center>{{ $data->Designation }}</center>
                                                            </td>
                                                            <td>
                                                                <center>{{ $data->fld_bm_name }}</center>
                                                            </td>
                                                        </tr>
                                                        @empty
                                                        <tr>
                                                            <td colspan="3">
                                                                <center>No Data Found</center>
                                                            </td>
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

            <div class="col-md-3 hidden-sm right-col-fix pb-5" id="iwtRightPannel">
                    @include('website.pages.department.right-sidebar-department')
                </div>

        </div>
    </div>
</div>
@endsection