@extends('website.layout.master')
@section('content')
<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container">

        <div class="col-sm-12 pt-4">
            <center>
                <h4 style="color:green"><strong>Facilities</strong></h4>
            </center>

            <div class="pull-right"><img src="{{ env('FILE_VIEW') }}/up-images/index.html" alt=""
                    class="img-responsive"></div>
        </div>

    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row" style="padding:0px">
            <div class="col-md-12 col-sm-12 text-justify  card-shadow" id="iwtContentArea" style=" background:#fff;">
                @if (isset($error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
                @elseif (!$data_output)
                <div>
                    <p class="department-error">Data not available</p>
                </div>
                @else
                @foreach ($data_output as $data)
                @if ($data->is_active == 1)
                <div class="row outer-white" style="padding: 10px">
                    <div class="col-sm-8">
                        <div>
                            <h4><b style="color:black !important;">{{ $data->facility }}</b></h4>
                        </div>
                        <div>
                            <p>{{ $data->facility_description }}</p>
                        </div>

                    </div>
                    <div class="col-sm-4">
                        <img src="{{ Config::get('DocumentConstant.FACILITY_VIEW') }}{{ $data->photo }}" alt=""
                            class="img-responsive img-fluid" style="height:200px; width:200px;">
                    </div>
                </div>
                @endif
                @endforeach
                @endif


                <br>



            </div>
        </div>
    </div>
</div>
@endsection