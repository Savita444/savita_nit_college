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
        </div>
    </div>
    <div class="container-fluid" style=" background:#fff; padding-top:5px; padding-bottom:40px">
        <div class="container card-shadow" style="margin-bottom: 95px;">
            <div class="row" style="padding:0px">
                <div class="col-md-9 col-sm-12 text-justify" id="iwtContentArea">
                    <div class="row outer-white">
                        <div class="col-sm-12">
                            <div>
                                @if (isset($data_output_category) && isset($data_output_category['id']))
                                    <div class="" style="color:#494680; padding:10px 0px;font-size:20px;padding-left:19px;">
                                        <strong>{{ $data_output_category->Department }} Download Time Table Here....</strong></div>
                                @else
                                @endif
                            </div>
   

                            <div>

                            </div>
                        </div>
                    </div><!-- /.row -->
                    <div class="row outer-white">
                        <div class="col-sm-12">
                            <div class="table-responsive p-3"> <!-- Add this wrapper -->
                                <table id="example" class="table display responsive nowrap table-striped table-hover table-bordered border-dark" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th scope="col" class=" justify-content-center"><center>SR.NO</center></th>
                                            <th scope="col"><div class="d-flex justify-content-center">Semester</div></th>
                                            <th scope="col">
                                                <div class="d-flex justify-content-center">Download File</div>
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
                                                    <center>{{ $data->semister }}</center>
                                                </td>
                                                <td>
                                                    <center>
                                                    <a href="{{ Config::get('DocumentConstant.TIMETABLE_DOC_VIEW') }}{{ $data->file }}" target="_blank" download class="btn btn-small" style="color:#fff;background-color:  #015198">
                                                       Download
                                                    </a>
                                                </center>
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

                          
                            <div>
                                <h3><strong></strong></h3>
                            </div>
                            <div class="table-responsive">


                                <p><strong>&nbsp;</strong></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
          
                <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
                    @include('website.pages.department.right-sidebar-department')
                </div>
            </div>
        </div>
    </div>
@endsection
