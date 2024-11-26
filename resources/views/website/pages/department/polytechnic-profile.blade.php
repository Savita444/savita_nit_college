@extends('website.layout.master')
@section('content')

<style>
  .row>* {
            padding-right: 0px !important;
        }
        
    @media only screen and (max-width:767px) {
        .sidebar-mb {
            display: none;
        }
    }
</style>




<div class="container-fluid bg-#fff" id="iwtPageHeading">
    {{-- <div class="container">
            <div class="col-sm-12" style="padding:0;">
                <h4 style="color:green"><b>Welcome To Humanities & Science Engineering Department</b></h4>
            </div>
        </div> --}}
</div>
<div class="container-fluid" style="padding-bottom:20px">
    <div class="container card-shadow">
        <div class="row" style="padding:0px">
        
            <div class="col-md-9 col-sm-12 text-justify" id="iwtContentArea" >
                
                <div class="row outer-white">
                    <div class="col-lg-12 col-sm-12">
                        <div>
                            <div class="card-body ">
                                <div class=""></div>
                                <div>
                                    @if (isset($error))
                                    <div>
                                        {{ $error }}
                                    </div>
                                    @else
                                    @if ($data_output->isEmpty())
                                    <div>
                                        <p class="department-error">Data not available</p>
                                    </div>
                                    @else
                                    @foreach ($data_output as $data)
                                    @if ($data->is_active == 0)
                                    <div class="alert alert-info">
                                        <p class="department-error">Data not available</p>
                                    </div>
                                    @else
                                    <div style="margin-left: 20px;">
                                        <div class="" style="color:#494680; font-size:20px;">
                                            <strong> {{ $data->Department }}</strong>
                                        </div>
                                        <div style="margin-top: 10px;margin-right:15px;">
                                            <p>{{ strip_tags($data->department_description) }}</p>
                                        </div>
                                        <img id="english" src="{{ Config::get('DocumentConstant.DEPARTMENT_VIEW_PROFILE') }}{{ $data->photo }}" class=" img-thumbnail  hidden-sm" height="300px" width="700px">
                                    </div>
                                    @endif
                                    @endforeach
                                    @endif
                                    @endif
                                    <div>
                                        <h2></h2>
                                    </div>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12 right-col-fix " id="iwtRightPannel">
                @include('website.pages.department.right-sidebar-department')
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
@endsection