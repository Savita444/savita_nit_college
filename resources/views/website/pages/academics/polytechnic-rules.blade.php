@extends('website.layout.master')
@section('content')


<style>
     @media only screen and (max-width: 767px){
        .mobilefontsize{
            font-size: 20px;
        }
     }
</style>


<div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container">

        <div class="col-sm-12" style="padding:0;">
            <h2><strong></strong></h2>
            <div class="pull-right"><img src="{{ env('FILE_VIEW') }}/up-images/index.php" alt="" class="img-responsive">
            </div>
        </div>

    </div>
</div>
<div class="container-fluid ">
    <div class="container card-shadow">
        <div class="row" style="padding:0px">
            <div class="col-md-12 col-sm-12 p-4" id="iwtContentArea">
                <div class="row outer-white">

                    @foreach ($data_output as $rules_data)
                    <div class="col-sm-12">
                        <div>
                            <h2 class="mobilefontsize" style="color:#494680">{{ $rules_data['academics_name'] }}</h2>
                        </div>
                        <div>
                            <p style="text-align: justify">{{ $rules_data['academics_description'] }}</p>
                        </div>
                    </div>
                    @endforeach

                </div><!-- /.row -->
                <div class="row outer-white" style="margin-top:-10px">
                    <div class="col-sm-12">
                        <p style="text-align: justify;"><b style="color:black">Students from Everywhere :</b><br>
                            Thank you for your interest in Late Annasaheb patil Polytechnic. With more than 170 acres of
                            Campus, we have formed a family-oriented Institute ready to welcome and support new members
                            into our community. Founded in 2010 amid. Whether your interest is in our first step program
                            for Diploma, the Late Annasaheb patil Polytechnic admission office looks forward tohelping
                            you better understand our school and its application process. Home at Late Annasaheb patil
                            Polytechnic, we realize that quality students can come from all walks of life and from all
                            sorts of educational backgrounds. So we have created a variety of paths to admission,
                            including a series of admission programs that to learn more about all of our admissions
                            procedure, go to Admission Procedure or contact the Admission Cell or can call at
                            (0253)2024121, 9595952100, 9552551056, 9552551064</p>

                    </div>
                </div><!-- /.row -->
                <div class="row outer-white" style="margin-top:10px">






                    <!-- <div class="col-sm-12">
                            <div>
                                <h4 style="color:#494680">Branches</h4>
                            </div>
                            <div>
                                <p style="text-align: justify;">

                                    Civil Engineering<br>
                                    Computer Engineering<br>
                                    Electronics & Telecommunication Engineering<br>
                                    Automobile Engineering<br>
                                    Mechanical Engineering<br>
                                    Electrical Engineering

                                </p>
                            </div>
                        </div> -->

                    <div class="col-sm-12">
                        <div>
                            <h2 class="mobilefontsize" style="color:#494680">Eligibility for Diploma Admission </h2>
                        </div>
                        <div>
                            <p style="text-align: justify;">

                                <b style="color:black">Eligibility criteria for Maharashtra State Candidate in first
                                    year :</b><br>



                                Candidate should be an Indian National and should have passed the SSC (Std.X)
                                examination of Maharashtra State Board of Secondary and Higher Secondary Education or
                                its equivalent examination with minimum 35% marks in aggregate* with subjects
                                Math/Mathematics, General Science and English.
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="col-sm-12">
                        <div>
                            <h2 class="mobilefontsize" style="color:#494680;margin-top:10px" >Direct Second Year </h2>
                        </div>
                        <div>
                            <p style="text-align: justify;">

                                <b style="color:black; margin-top:10px">Eligibility criteria for Maharashtra State
                                    Candidates passing
                                    HSC science
                                    Vocational/Technical :</b><br>



                                Candidate should be Indian National and have passed with minimum 35% marks in HSC
                                science / HSC science with Vocational/Technical subjects with appropriate
                                specialization.
                                <br>
                                Note :-<br>
                                1) H.S.C. Science means plain H.S.C. Science<br>
                                2) H.S.C. Vocational means + 2 Level Minimum Competency Vocational course in Engineering
                                Group (MCVC)<br>
                                3) H.S.C. Technical means + 2 Level Bifocal Program in Engineering Group<br>



                                <b style="color:black;">Eligibility criteria for Maharashtra State Candidates passing
                                    ITI :</b><br>



                                Candidate should be Indian national and should have passed<br>
                                SSC (10th Std) or equivalent examination with subjects English, Maths and Science
                                And<br>
                                ITI (2 years duration) or equivalent
                                <br>

                                <b style="color:black">Eligibility criteria for Maharashtra State Candidates passing
                                    ITI (COE) :</b><br>



                                Candidate should be Indian national and should have passed<br>
                                SSC (10th Std) or equivalent examination with subjects English, Maths and Science
                                AND<br>
                                ITI (COE) with three modules (Sector Module, Advanced Module and Specialized Module) of
                                2 years duration.

                            </p>
                        </div>
                    </div>

                    <!-- <div class="col-sm-12">
                            <div>
                                <h4 style="color:#494680">Require Documents :</h4>
                            </div>
                            <div>
                                <p>


                                    Payment of fees as shown in the schedule of fees<br>
                                    Six passport size photographs<br>
                                    Institute application form<br>
                                    Original plus two Xerox copies duly attested of all the documents mentioned in the
                                    application form<br>
                                    10th ,12th ,L.C, T.C<br>
                                    Cast certificate<br>
                                    Drawing exam ,NCC,MSCIT, certificate



                                </p>
                            </div>
                        </div> -->








                </div><!-- /.row -->
                <div class="row outer-white">
                    <div class="col-sm-12">
                        <!--<P>To give the quality technical education for empowerment of the common masses.<br>-->
                        <!--</p>-->
                    </div>
                </div><!-- /.row -->
            </div>
        </div>
    </div>
</div>
@endsection