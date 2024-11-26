<style>
    .footer-menu ul li {
        /* color: #494680 !important; */
    }

    /* col{
    column-gap: 20px;
} */

    #about-list {
        list-style-type: 1px;
    }

    blockquote {
        padding: 10px 20px;
        font-weight: 700;
        margin: 0 0 20px;
        font-size: 15px;
        line-height: 25px;
        border-left: 5px solid #eee;
    }

    .footer-social-icon span {
        color: #fff;
        display: block;
        font-size: 20px;
        font-weight: 700;
        font-family: 'Poppins', sans-serif;
        margin-bottom: 20px;
    }

    .footer-social-icon a {
        color: #fff;
        font-size: 16px;
        margin-right: 15px;
    }

    .footer-social-icon i {
        height: 40px;
        width: 40px;
        text-align: center;
        line-height: 38px;
        border-radius: 50%;
        margin-top: -25px !important;
    }

    .facebook-bg {
        background: #3B5998;
    }

    .twitter-bg {
        background: #55ACEE;
    }

    .fa-linkedin {
        background: #0a66c2;
    }

    .fa-instagram {
        background: rgb(233, 89, 80);
    }

    .google-bg {
        background: #DD4B39;
    }

    a:hover {
        color: black !important;
    }

    .footerdetail:hover {
        color: white !important;
    }

    hr {
        display: none;
    }



    .fortopbutton {
        justify-content: end;
        justify-self: end;
    }

    .scrolltop {
        /* position: fixed; */
        z-index: 999;
        width: 100px;
        color: white;
        display: flex;
        justify-content: end;
    }

    .fas {
        position: absolute;
        z-index: 1001;
        padding-left: 15px;
        padding-right: 15px;
        justify-content: center;
        background-color: black;
        border-radius: 50%;
        padding-bottom: 10px;
        padding-top: 10px;
        font-weight: 900;
    }

    @media (max-width: 767px) {
        .footer .container {
            text-align: center;
        }

        li {
            margin-left: 20px
        }

        .footer .row>div {
            margin-bottom: 20px;
            padding-left: 40px;
        }

        hr {
            display: block;
        }
    }

    @media (min-width: 768px) {
        .footer .container {
            text-align: left;
        }

        .leftspace {
            margin-left: 10px;
        }
    }
</style>

<div class="container">
    <div class="col-md-8 col-sm-6 about-text">
        <p><a href="http://antiragging.in/site/Affidavits_Registration.aspx"><strong><span></span></strong> </a></p>
    </div>
</div>

<div class="container-fluid footer" style="background-color:  #015198; border-top: 1px solid #e0e7ed; color: white; padding: 20px 0; padding-bottom:35px;">
    <div>
        <div class="row leftspace" style="margin-top: 20px;">

            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-2 col-md-2">
                <h5 style="color: white; font-size:20px;"><b>About Us</b></h5>
                <ul id="about-list" style="margin-top: 25px;">
                    <h6><a href="{{ route('polytechnic-president') }}" style="color: #cccccc;line-height:25px">President Desk</a></h6>
                    <h6><a href="{{ route('polytechnic-principals') }}" style="color: #cccccc;line-height:25px">Principal Desk</a></h6>
                    <h6><a href="{{ route('mission-and-vision') }}" style="color: #cccccc;line-height:25px">Mission & Vision</a></h6>
                    <h6><a href="{{ route('about-governingbody') }}" style="color: #cccccc;line-height:25px">Governing Body</a></h6>
                    <h6><a href="{{ route('about-futureplans') }}" style="color: #cccccc;line-height:25px">Future Plans</a></h6>
                </ul>
                <hr>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-6">
                <h5 style="color: white; font-size:20px;"><b>Facilities</b></h5>
                <ul style="margin-top: 25px;">
                    @foreach ($menuFacility as $menuFacilityItem)
                    <h6><a href="{{ route('polytechnic-facilities', ['id' => $menuFacilityItem['facility_id']]) }}" style="color: #cccccc; line-height:25px">{{ $menuFacilityItem['facility'] }}</a></h6>
                    @endforeach
                </ul>
                <hr>
            </div>

            <div class="col-lg-3 col-md-3">
                <h5 style="color: white; font-size:20px;"><b>Departments</b></h5>
                <ul style="margin-top: 25px;">
                    @foreach ($menuDepartment as $menuItemDepartment)
                    <h6><a href="{{ route('department-profile', ['id' => $menuItemDepartment['id']]) }}" style="color: #cccccc; line-height:25px;">{{ $menuItemDepartment['Department'] }}</a></h6>
                    @endforeach
                </ul>
                <hr>
            </div>
            <div class="col-lg-3 col-md-3">
                <div>
                    <div class="address">
                        <div>
                            <div id="fb-root"></div>
                            <script>
                                (function(d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "../../connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>
                            <div class="fb-page" data-href="#" data-width="226" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                <div class="fb-xfbml-parse-ignore">
                                    <blockquote cite="#"><a href="#" style="color: #fff;">LATE ANNASAHEB PATIL
                                            POLYTECHNIC, NIT-422003</a></blockquote>
                                    <span class="footer-social-icon">
                                        <a href="https://www.facebook.com/NITLAPP/" target="_blank"><i class="fab fa-facebook-f facebook-bg"></i></a>
                                        <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                                        <a href="#"><i class="fab fa-brands fa-linkedin"></i></a>
                                        <a href="https://www.instagram.com/nit_polytechnic_nashik/" target="_blank"><i class="fa-brands fa-instagram"></i></i></a>

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid" style="background-color: #013665">
    <div class="container" style="display: flex; justify-content:center;">
        <div class="row py-2" style="display: flex; justify-content:center;">
            <span style="color:white;">
                <span style="color:white;">Contact : </span>
                <a class="footerdetail" style="color:white" href="tel:9552551056"> 9552551056</a>&nbsp;
                <!-- <a class="footerdetail" style="color:white;" href="tel:8149822404">8149822404</a>&nbsp; -->
                <a class="footerdetail" href="mailto:info@nitnasik.com" style="color:white; margin-left:15px;">info@nitnasik.com</a>
                
                <span style="color:white; margin-left:15px;">&copy;2024 All Rights Reserved to Late Annasaheb Patil Polytechnic Developed
                    By </span>
                    <a class="footerdetail" href="https://sumagoinfotech.com/" target="_blank" style="color:white">Sumago Infotech
                    <img src="{{ asset('public/assets/up-images/slogo.png') }}" alt="" style="width:19px;"></a>&nbsp;
            </span>
        </div>
    </div>
</div>
<!-- <div class=" fortopbutton">
    <a href="#" class="scrolltop">
        <i class="fas fa-arrow-up"></i>
    </a>
</div> -->



<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- Badge Code - Do Not Change The Code -->
<script>
    document.write("<script type='text/javascript' src='https://visitorshitcounter.com/js/hitCounter.js?v=" + Date.now() +
        "'><\/script>");
</script>
<script src="{{ asset('public/assets/js/jquery.dataTables.min.js') }}"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: true,
            showNEntries: false,
            lengthChange: false,
            ordering: false,
            "ordering": false
        });
        $('#example11').DataTable({
            responsive: true,
            showNEntries: false,
            lengthChange: false,
            ordering: false,
            "ordering": false
        });

        var table2 = $('#example1').DataTable({
            "columnDefs": [{
                "targets": [1, 2],
                "orderable": true,
                
            }]
        });

        $('#order-listing').DataTable({
            searching: true,
            ordering: true,
            lengthChange: false,
            showNEntries: false,
            ordering: false
        });

        $(document).on('click', '.panel-heading span.clickable', function(e) {
            var $this = $(this);
            if (!$this.hasClass('panel-collapsed')) {
                $this.parents('.panel').find('.panel-body').slideUp();
                $this.addClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon glyphicon-minus-sign').addClass(
                    'glyphicon glyphicon-plus-sign');
            } else {
                $this.parents('.panel').find('.panel-body').slideDown();
                $this.removeClass('panel-collapsed');
                $this.find('i').removeClass('glyphicon glyphicon-plus-sign').addClass(
                    'glyphicon glyphicon-minus-sign');
            }
        });

        setTimeout(function() {
            $(".alert").alert('close');
        }, 1000); // 1000 milliseconds = 1 second
    });
</script>