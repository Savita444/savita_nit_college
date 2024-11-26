@extends('website.layout.master')
@section('content')
<style>
    /* Modal */
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

    @media only screen and (min-width: 769px) {
        .imgbottomspacing {
            margin-bottom: 22px;

        }
    }
</style>

<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container">
        <div class="col-sm-12" style="margin-top:20px;">
            <center>
                <h2 style="color:#494680"><strong>Gallery</strong></h2>
            </center>
        </div>
    </div>
</div>

<div class="container-fluid" style="background:#fff; padding-top:40px; padding-bottom:40px;">
    <div class="container">
        <div class="row">

            @if (isset($error))
            <div class="alert alert-danger">
                {{ $error }}
            </div>
            @else
            @if (empty($data_output))
            <div>
                <p class="department-error" style="display: flex; justify-content: center; align-items: center;">
                    Data not available
                </p>
            </div>
            @else
            @foreach ($data_output as $key => $data)
            @if ($data['is_active'] == 0) <!-- Access as associative array -->
            <div>
                <p class="department-error">Data not available</p>
            </div>
            @else
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 imgbottomspacing " style="display:flex; justify-content: center; ">
                <img id="myImg{{ $key }}" src="{{ Config::get('DocumentConstant.GALLERY_VIEW') }}{{ $data['fld_gallery_photo'] }}" class="img-thumbnail myImg" alt="Certificate Image {{ $key }}">
            </div>

            <div id="myModal{{ $key }}" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01{{ $key }}">
                <div id="caption{{ $key }}"></div>
            </div>

            @endif
            @endforeach
            @endif
            @endif


        </div>
    </div>
</div>



<script>
    // JavaScript to open modal for each image
    var modals = document.querySelectorAll('.modal');
    var images = document.querySelectorAll('.myImg');
    var modalImages = document.querySelectorAll('.modal-content');
    var captions = document.querySelectorAll('#caption');

    images.forEach(function(image, index) {
        image.onclick = function() {
            modals[index].style.display = "block";
            modalImages[index].src = this.src;
            captions[index].innerHTML = this.alt;
        }
    });

    var closeButtons = document.querySelectorAll('.close');
    closeButtons.forEach(function(button) {
        button.onclick = function() {
            var modal = this.parentElement;
            modal.style.display = "none";
        }
    });

    // Close modal on outside click
    window.onclick = function(event) {
        modals.forEach(function(modal) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        });
    }
</script>


@endsection