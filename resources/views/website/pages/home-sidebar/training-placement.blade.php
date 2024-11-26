@extends('website.layout.master')
@section('content')

<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div>
        <div class="panel_content">
            <div >
                <div class="row">
                    <div class="col-md-3 hidden-sm right-col-fix ps-2" id="iwtRightPannel">
                        @include('website.pages.home-sidebar.right-sidebar-home')
                    </div>

                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="col-lg-12 col-md-12 col-sm-12 product-type card-shadow p-4">
                            <div >
                                <div class="panel-heading">
                                    <center>
                                        <h3 class="panel-title" style="color:#494680"><strong>Training Placement</strong></h3>
                                    </center>
                                    <span class="pull-right clickable">
                                        <i class="glyphicon glyphicon-plus-sign collapse-ico"></i>
                                    </span>
                                </div>
                                <center>
                                    <div class="table-responsive p-3">
                                        <!-- Add this wrapper -->
                                        <table id="example"
                                            class="table display responsive nowrap table-striped table-hover table-bordered border-dark"
                                            style="width:100%">
                                            <thead class="">
                                                <tr>
                                                    <th scope="col" class=" justify-content-center">
                                                        <center>SR.NO</center>
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
                                                <tr class="">
                                                    <td>
                                                        <center>{{ $loop->iteration }}</center>
                                                    </td>
                                                    <td>
                                                        <center>
                                                            <a href="{{ Config::get('DocumentConstant.TRAINING_PLACEMENT') }}{{ $data->file }}"
                                                                target="_blank" class="btn btn-small " style="color:#fff;background-color:  #015198">
                                                                Download
                                                            </a>
                                                        </center>
                                                    </td>
                                                </tr>
                                                @empty
                                                {{-- <h4>No Data Found</h4> --}}
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </center>
                                {{-- <div class="panel-body">
                                    <center>
                                        @forelse($data_output as $data)

                                            <iframe src="{{ url(Config::get('DocumentConstant.ACADEMICCALENDAR_VIEW') . $data->file) }}" width="100%" height="800px"></iframe>
                                            <p>{{ url(Config::get('DocumentConstant.ACADEMICCALENDAR_VIEW') . $data->file) }}</p> <!-- Add this line for debugging -->
                                        @empty
                                            <p>No data found</p>
                                        @endforelse
                                    </center>
                                </div> --}}
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
