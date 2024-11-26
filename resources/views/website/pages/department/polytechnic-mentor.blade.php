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
        <div class="container">

            <div class="col-sm-12" style="padding:0;">
                {{-- <h4 style="color:green"><strong>Civil Engineering Mentoring</strong></h4>
        <div class="pull-right"><img src="../up-images/civil-iconimgFile568246ec20aed.png" alt="" class="img-responsive"></div> --}}
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="container card-shadow" style="margin-bottom: 145px;">
            <div class="row" style="padding:0px">
                <div class="col-md-8 col-sm-12 text-justify" id="iwtContentArea">
                    <div class="row outer-white">

                        <div class="col-sm-12" style="padding-left: 27px;">
                            <div>
                                @if (isset($data_output_category) && isset($data_output_category['id']))
                                    <div class="" style="color:#494680; font-size:20px;"><strong>{{ $data_output_category->Department }}</strong></div>
                                @else
                                @endif
                            </div>
                            <div style="margin-top:15px !important">
                                <b style="color:#545353;  ">Student Mentoring Activity:
                                </b>
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
                                <p class="" style="padding-left: 17px;">
                                    The Mentor-Student scheme is used to solve various problems, difficulties and queries of
                                    the students. Each staff is assigned as a mentor to a batch of 20 students and is
                                    responsible to counsell students about their problmes. Following table shows the Mentor
                                    assigned to students.


                                </p>
                            </div>
                            <div class="table-responsive p-3"> <!-- Add this wrapper -->
                                <table id="example" class="table display responsive nowrap table-striped table-hover table-bordered border-dark" style="width:100%">
                                    <thead class="">
                                        <tr>
                                            <th scope="col" class="justify-content-center"><center>SR.NO</center></th>
                                            <th scope="col">Class Name</th>
                                            <th scope="col">
                                                <div class="d-flex justify-content-center">Roll Number</div>
                                            </th>
                                            <th scope="col">
                                                <div class="d-flex justify-content-center">Name Of The Mentor</div>
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
                                                    <center>{{ $data->class_name }}</center>
                                                </td>
                                                <td>
                                                    <center>{{ $data->roll_no }}</center>
                                                </td>
                                                <td>
                                                    <center>{{ $data->mentor_name }}</center>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">
                                                    <center>No Data Found</center>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                
                            </div>
                        </div><!--/panel 1-->
                    </div>
                </div>
                <div class="col-md-1 hidden-sm">&nbsp;</div>
                <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
                    @include('website.pages.department.right-sidebar-department')
                </div>
            </div>
        </div>
    @endsection
