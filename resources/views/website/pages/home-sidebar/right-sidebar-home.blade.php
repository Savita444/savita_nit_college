<style>
    .SSP>h5 {
        /* text-align: center; */
        /* border-bottom:1px solid white; */
        text-decoration: underline white;

    }

    .hideinlgmd {
        position: absolute;
        height: 25px;
        width: 25px;
    }
    .hidden{
        display: none;
    }

    #iwtHeaderNav {
        border-bottom: none !important;
    }


    @media only screen and (max-width:769px) {


        .navbar-toggler2 {
            margin-top: 60px;
        }


        .hideinlgmd {
            display: block;
        }

        .btn-close {
            display: block;
            position: absolute;
            background-color: white;
            color: black;
            font-size: 30px;
            height: 20px;
            width: 20px;
            top: 0px;
            right: 21px;
            z-index: 1001;
        }

        li {
            margin-left: -13px !important;
        }

    }
</style>
<!--Right col-->
<div class="col-sm-12 right-col-fix ">

    <div class="">
        <div class="right-col-fix " id="iwtRightPannel">
            <div class="">
                <div class="container-fluid mob-width-right list-group " id="iwtHeaderNav">
                    <div class="container mob-toggle-left-side ">
                        <nav class=" navbar navbar-expand-lg flex-column ">
                            <div class="container-fluid">
                                <button class="navbar-toggler navbar-toggler2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="offcanvas offcanvas-end itemfromstart " tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbarLabel">
                                    <button class="btn-close btn-close1  d-lg-none" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                                    <div class="offcanvas-body  ">
                                        <ul class=" " style="width: 100%;">
                                            <li class="nav-item list-group-item">
                                               <div class="list-group-item" style="display: none;"><b></b></div>
                                                <a href="https://msbte.org.in/file/DiplomaAdmissionPresentationWebsite_200220201250.pdf" target="_blank" class="list-group-item active-rp-link">तंत्रशिक्षण पदविका प्रवेश – थोडक्यात</a>
                                                <a href="{{ route('about-governingbody') }}" class="list-group-item active-rp-link">Governing
                                                    Body</a>
                                                <a href="{{ route('polytechnic-mandatary') }}" class="list-group-item">Mandatory Disclosure</a>
                                                {{-- <a href="{{ route('non-teaching-faculty') }}" class="list-group-item ">Non Teaching Staff</a> --}}
                                                <a href="{{ route('polytechnic-aicte-extension') }}" class="list-group-item">AICTE EOA</a>
                                                <a href="{{ route('polytechnic-affiliation') }}" class="list-group-item">MSBTE Affiliation</a>
                                                <a href="{{ route('polytechnic-affiliation_certificates') }}" class="list-group-item">Affiliation
                                                    Certificates</a>
                                                <a href="{{ route('training-placement') }}" class="list-group-item">Training And Placement</a>
                                                <a href="{{ route('polytechnic-anti-ragging') }}" class="list-group-item">Antiragging Committee</a>
                                                {{-- <a href="#" class="list-group-item ">Grievance Redressal Cell </a> --}}
                                                <a href="{{ route('polytechnic-internal-complaint') }}" class="list-group-item">Internal Complaint
                                                    Committee</a>
                                                <a href="{{ route('polytechnic-about-scst') }}" class="list-group-item">SC/ST Cell</a>
                                                <a href="{{ route('polytechnic-academic-calendar') }}" class="list-group-item ">Academic
                                                    Calender</a>
                                                <a href="{{ route('aluminiregister') }}" class="list-group-item">Alumni Registration</a>
                                                <a href="{{ route('list-events') }}" class="list-group-item ">Events</a>
                                                <a href="{{ route('list-fees-regulating-authority') }}" class="list-group-item ">Fees Regulatiion Authority </a>

                                                <div class="list-group-item ">
                                                    <a style="display: none;"></a>
                                                    <h6 class="dropdown-toggle" style="font-size: 17px; color:white;"><b>Student Section</b></h6>
                                                    <a href="{{ route('list-student-section-download') }}" class="list-group-item "> Download</a>
                                                    <a href="{{ route('list-student-section-scholarship') }}" class="list-group-item "> Scholarship</a>
                                                </div>
                                                <div class="list-group-item ">
                                                    <a style="display: none;"></a>
                                                    <h6 class="dropdown-toggle" style="font-size: 17px; color:white;"> <b>Plan</b></h6>
                                                    <a href="{{ route('list-expert-lecture') }}" class="list-group-item "> Expert Lecture</a>
                                                    <a href="{{ route('list-industrial-visit-mentor') }}" class="list-group-item "> Industrial Visit and Mentor Meeting</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

            </div>
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