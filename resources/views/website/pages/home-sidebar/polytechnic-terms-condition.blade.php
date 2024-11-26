@extends('website.layout.master')
@section('content')

    <div class="container-fluid pageHeading-bg" id="iwtPageHeading">
    <div class="container">
    
    <div class="col-sm-12" style="padding:0;">
        <h2><strong></strong></h2>
        <div class="pull-right"><img src="../up-images/civil-iconimgFile568246ec20aed.png" alt="" class="img-responsive"></div>
    </div>
    
    <div class="panel_content">
        <div class="container">
            <div class="row">      
                <div class="col-md-3 hidden-sm right-col-fix" id="iwtRightPannel">
                    @include('website.pages.home-sidebar.right-sidebar-home')
                </div>          
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <div class="panel panel-primary product-type">
                            <div class="panel-heading">
                                <center><h3 class="panel-title" style="color:blue"><b>Terms And Condition</b></h3></center>
                                <span class="pull-right clickable"><i class="glyphicon glyphicon-plus-sign collapse-ico"></i></span>
                            </div>
                            <div class="panel-body">
                            <!--<div class="pull-left"><img src="../up-images/annasaheb-patil.gif" alt="" class="img-responsive" height="200" width="200">-->
            
                                     <center>

                                        <div class="table-responsive p-3"> <!-- Add this wrapper -->
                                            <table id="example"
                                                class="table display responsive nowrap table-striped table-hover table-bordered border-dark"
                                                style="width:100%">
                                                <thead class="">
                                                    <tr>
                                                        <th scope="col" class="d-flex justify-content-center">
                                                            SR.NO
                                                        </th>
                                                        <th scope="col" class="">
                                                            Name
                                                        </th>
                                                        <th scope="col">
                                                            <div class="d-flex justify-content-center">
                                                                Designation
                                                            </div>
                                                        </th>
                                                        <th scope="col">
                                                            <div class="d-flex justify-content-center">
                                                                Email
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
                                                                <center>{{ $data->fld_bm_name }}</center>
                                                            </td>
                                                            <td>
                                                                <center>{{ $data->designation_name }}</center>
                                                            </td>
                                                            <td>
                                                                <center>{{ $data->email }}</center>
                                                            </td>

                                                        </tr>
                                                    @empty
                                                        {{-- <h4>No Data Found</h4> --}}
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>



                                          <?php 
                      $count=0; 
                      $query="select * from termscondition  where syllabus_delete='0' order by term_id desc LIMIT 1";
                      $row=mysqli_query($connect,$query) or die(mysqli_error($connect));
                      
                      while($fetch=mysqli_fetch_array($row)) {
    
                      extract($fetch);
                     ?> 
       <iframe src="../images/termscondition/<?php echo $fetch['file'];?>" width="100%" height="800px"></iframe>
       
       <?php } ?>
                   </center>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </div>
    </div>
@endsection