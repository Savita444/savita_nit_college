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
   
</div>
<div class="container-fluid" style="padding-bottom:20px">
    <div class="container card-shadow">
        <div class="row" style="padding:0px">
        
            <div class="col-md-9 col-sm-12 text-justify" id="iwtContentArea" >
                @if (isset($data_output_category) && isset($data_output_category['id']))
                                <div class="" style="color:#494680; font-size:20px; padding-left:17px;">
                                    <strong>{{ $data_output_category->Department }}. Activities And Events</strong>
                                </div>
                                @else
                                @endif
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
                                        <div class="mt-2">
                                        <div style="color: #545353; padding-left:7px;">{{ $data->imageTitle }}</div>
                                        </div>

                                         <div class="col-lg-4 col-md-4 col-sm-12 mb-5" style="display: flex; justify-content:center; padding-top:20px;">
                                            <div class="card" style="width: 300px;">
                                                <img src="{{ Config::get('DocumentConstant.DEPARTMENT_EVENTS_VIEW') }}{{ $data->fld_gallery_photo }}" class="card-img-top img-fluid img-thumbnail" alt="{{ $data->Department }}" style="height: 250px;width:auto; object-fit: cover;">
                                                
                                            </div>
                                        </div>
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