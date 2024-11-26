@extends('website.layout.master')
@section('content')

<style>
    .row{
        margin-left: -5px !important;
    }
</style>





<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div>
        <!-- 
            <div class="col-sm-12" style="padding:0;">
                <h2><strong></strong></h2>
                <div class="pull-right"><img src="../up-images/index.php" alt="" class="img-responsive"></div>
            </div> -->
           
            
    </div>
</div>
<div class="container-fluid">
    <div>
        <div class="row" style="padding:0px">
            <div class="col-md-3 hidden-sm right-col-fix " id="iwtRightPannel">
                @include('website.pages.home-sidebar.right-sidebar-home')
            </div>
            <div class="col-md-9 col-sm-12 text-justify" id="iwtContentArea">
                <div class="row card-shadow">

                    <div class="container" >
                        <div class="row">
                            <div>
                                @if (isset($data_output_activity) && isset($data_output_activity['id']))
                                    <div class="" style="color:#494680; padding:10px 0px;font-size:20px; text-align:center;">
                                        <strong>{{ $data_output_activity->activities }} </strong></div>
                                @else
                                @endif
                            </div>
                            @if ($data_output->isEmpty())
                            <div class="col-sm-12 d-flex justify-content-center">
                                <div>
                                    <p class="department-error" style="display: flex; justify-content: center; align-items: center;">Data not available</p>
                                </div>
                            </div>
                            @else
                            @foreach ($data_output as $item)

                            <div class="col-lg-4 col-md-4 col-sm-12 mb-5" style="display: flex; justify-content:center;">
                                <div class="card" style="width: 300px;">
                                    <img src="{{ Config::get('DocumentConstant.ACTIVITY_VIEW') }}{{ $item->photo }}" class="card-img-top img-fluid img-thumbnail" alt="{{ $item->activities_name }}" style="height: 300px;width:auto; object-fit: cover;">
                                    <!-- <div class="card-body">
                                                    {{-- <h5 class="card-title" style="color: #494680;">{{ $item->activities_name }}</h5> --}}
                                                    <p class="card-text">{{ $item->activity_description }}</p>
                                                </div> -->
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>



                    <!-- /.row -->

                </div><!-- /.row -->
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <div>
                            <h2></h2>
                        </div>
                        <div>
                        </div>
                    </div>
                </div><!-- /.row -->
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <P><br>
                        </p>
                    </div>
                </div><!-- /.row -->
            </div>
            <div class="col-md-1 hidden-sm">&nbsp;</div>
            <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
            </div>
        </div>
    </div>
</div>
@endsection