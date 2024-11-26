@extends('website.layout.master')
@section('content')
<style>
    /* .imghover{
  transition: all 1s ease-in-out;
  z-index: 999;
} */
    /* .imghover:hover{
  transform: scale(1.5);
  z-index: 999;

} */


    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

    .modal {
        display: none;
        position: fixed;
        z-index: 999;
        padding-top: 70px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content,
    #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }
    }
</style>


<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="panel_content">
        <div class="row">
            <div class="col-md-3 hidden-sm right-col-fix ps-2" id="iwtRightPannel">
                @include('website.pages.home-sidebar.right-sidebar-home')
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="col-lg-9 col-md-9 col-sm-9" style="width:100%">
                    <div class="panel panel-primary product-type">
                        <div class="panel-heading">
                            <center>
                                <h3 class="panel-title pt-3 pb-1" style="color:#494680;"><b>AFFILIATION CERTIFICATES </b></h3>
                            </center>
                            <span class="pull-right clickable"><i class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                        </div>
                        <div class="panel-body">
                            <center>
                                <div class="table-responsive p-3">
                                    <div class="row">
                                        @if (isset($error))
                                            <div class="alert alert-danger">
                                                {{ $error }}
                                            </div>
                                        @else
                                            @if ($data_output->isEmpty())
                                                <div>
                                                    <p class="department-error" style="display: flex; justify-content: center; align-items: center;">
                                                        Data not available
                                                    </p>
                                                </div>
                                            @else
                                                @foreach ($data_output as $key => $data)
                                                    @if ($data->is_active == 0)
                                                        <div>
                                                            <p class="department-error">Data not available</p>
                                                        </div>
                                                    @else
                                                        <div class="col-lg-6 col-md-6 col-sm-3 pb-3 imghover">
                                                            <!-- Use unique IDs and classes for each image and modal -->
                                                            <img id="myImg{{ $key }}" src="{{ Config::get('DocumentConstant.AFFILIATION_CERTIFICATES_VIEW') }}{{ $data->fld_affiliation_image }}" class=" img-thumbnail" alt="Certificate Image {{ $key }}" height="300px" width="700px">
                                                        </div>

                                                        <div id="myModal{{ $key }}" class="modal">
                                                            <span class="close">&times;</span>
                                                            <img class="modal-content" id="img01{{ $key }}">
                                                            <!-- <div id="caption{{ $key }}"></div> -->
                                                        </div>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // JavaScript to open modal for each image
    @foreach ($data_output as $key => $data)
        var modal{{ $key }} = document.getElementById("myModal{{ $key }}");
        var img{{ $key }} = document.getElementById("myImg{{ $key }}");
        var modalImg{{ $key }} = document.getElementById("img01{{ $key }}");
        var captionText{{ $key }} = document.getElementById("caption{{ $key }}");

        img{{ $key }}.onclick = function() {
            modal{{ $key }}.style.display = "block";
            modalImg{{ $key }}.src = this.src;
            captionText{{ $key }}.innerHTML = this.alt;
        }

        var span{{ $key }} = document.getElementsByClassName("close")[{{ $key }}];
        span{{ $key }}.onclick = function() {
            modal{{ $key }}.style.display = "none";
        }
    @endforeach
</script>
@endsection