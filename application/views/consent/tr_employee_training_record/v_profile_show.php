<?php
/*
* v_main_group.php
* Display v_main_group
* @input    
* @output
* @author Jirayu Jaravichit
* @Create Date 2564-07-12
*/  
?>

<head>

      <style>
      .border4 {
            border-left: 4px solid #4E73DF;
      }

      .text4 {
            color: #c1432e;
      }

      #panel_th_home {
            background-color: #17A2B8;

      }

      #icon_main_menu {
            font-size: 35px;
            text-shadow: 1px 1px 1px #000;
      }

      #Home {
            font-size: 50px;
            text-shadow: 1px 1px 1px #000;
      }

      #headdata {
            font-size: 30px;
            color: white;
            background-color: #17A2B8;

      }
      </style>
      <!-- End style CSS  -->
<script>
 $(document).ready(function() {
    $("#training_data").DataTable();
});
      </script>
      <!-- Begin Page Content -->
      <div class="container-fluid">

            <!-- Start col-lg-12 -->
            <div class="col-lg-12">

                  <!-- Start card shadow -->
                  <div class="card shadow mb-4">

                        <!-- Start header  -->
                        <div class="card-header py-3" id="panel_th_home">

                              <!-- Start panel  -->
                              <div class="col-xl-12">
                                    <h1 class="m-0 font-weight-bold text-primary"><i class="ti  ti-id-badge text-white"
                                                id="Home"></i>
                                          <font color="white">Profile</font>
                                    </h1>
                              </div>
                              <!-- End panel  -->

                        </div>
                        <!-- End header  -->



                        <div class="content">
                              <div class="animated fadeIn">
                                    <div class="row">

                                          <div class="col-md-12">
                                                <div class="card border border-secondary">
                                                      <div class="card-body">
                                                            <div class="row">
                                                                  <div class="col-md-3">
                                                                        <img src="<?php echo base_url();?>elaadmin/images/1.jpg"
                                                                              width="320" height="300"
                                                                              class="rounded-square" />
                                                                  </div>
                                                                  <div class="col-md-9">
                                                                        <br>
                                                                        <br>
                                                                        <?php foreach($data_id->result() as $row){ ?>
                                                                        <div class="row">
                                                                              <div class="col-md-2">
                                                                                    ????????????????????????????????? :
                                                                              </div>

                                                                              <div class="col-md-2">
                                                                                    <?php echo $row->Emp_ID; ?>
                                                                              </div>

                                                                              <div class="col-md-1" align="right">
                                                                                    ???????????? :
                                                                              </div>

                                                                              <div class="col-md-3">

                                                                                    <?php echo $row->Emp_nametitle.$row->Empname_th." ".$row->Empsurname_th; ?>

                                                                              </div>

                                                                              <div class="col-md-2" align="right">
                                                                                    ????????????????????? :
                                                                              </div>


                                                                              <div class="col-md-2">

                                                                                    <?php echo "4 ?????? 3 ??????????????? 2 ?????????"; ?>

                                                                              </div>
                                                                        </div>
                                                                        <br>
                                                                        <hr>
                                                                        <div class="row">
                                                                              <div class="col-md-2">
                                                                                    ???????????????????????????????????? :
                                                                              </div>

                                                                              <div class="col-md-1">

                                                                                    <?php echo $row->Degree2; ?>


                                                                              </div>
                                                                              <div class="col-md-2" align="right">
                                                                                    ?????????????????????????????? :
                                                                              </div>

                                                                              <div class="col-md-3">

                                                                                    <?php echo $row->Empname_engTitle." ".$row->Empname_eng." ".$row->Empsurname_eng; ?>

                                                                              </div>

                                                                              <div class="col-md-2" align="right">
                                                                                    ????????????????????? :
                                                                              </div>
                                                                              <div class="col-sm-2">

                                                                                    <?php echo $row->Position_name; ?>

                                                                              </div>
                                                                        </div>
                                                                        <br>
                                                                        <hr>
                                                                        <div class="row">
                                                                              <div class="col-md-1" align="right">
                                                                                    ???????????? :
                                                                              </div>
                                                                              <div class="col-md-2" align="center">
                                                                                    <?php echo $department->Department; ?>
                                                                              </div>
                                                                              <!-- fix -->
                                                                              <div class="col-md-2" align="right">
                                                                                    Section :
                                                                              </div>
                                                                              <div class="col-md-2">

                                                                                    <?php echo $row->Sectioncode_ID; ?>

                                                                              </div>
                                                                              <!-- row 2 -->
                                                                        </div>
                                                                  </div>
                                                                  <br>
                                                                  <br>

                                                                  <!-- row 1 -->
                                                                  <br>



                                                            </div>
                                                            <!-- card-body -->


                                                      </div>
                                                </div>
                                          </div>
                                          <?php } ?>


                                    </div>
                              </div>
                              <!-- content 1 -->

                              <div class="content">
                                    <div class="animated fadeIn">
                                          <div class="row">

                                                <div class="col-md-12">
                                                      <div class="card">

                                                            <div class="card-header" id="headdata">
                                                                  <strong class="card-title">History</strong>
                                                              
                                                            </div>
                                                            <div class="card-body">
                                                                  <ul class="nav nav-pills mb-3" id="pills-tab"
                                                                        role="tablist">
                                                                        <li class="nav-item">
                                                                              <a class="nav-link active"
                                                                                    id="pills-home-tab"
                                                                                    data-toggle="pill"
                                                                                    href="#pills-home" role="tab"
                                                                                    aria-controls="pills-home"
                                                                                    aria-selected="true">Training
                                                                                    History</a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                              <a class="nav-link" id="pills-profile-tab"
                                                                                    data-toggle="pill"
                                                                                    href="#pills-profile" role="tab"
                                                                                    aria-controls="pills-profile"
                                                                                    aria-selected="false">Movement</a>
                                                                        </li>

                                                                  </ul>

                                                                  <div class="tab-content" id="pills-tabContent">
                                                                        <div class="tab-pane fade show active"
                                                                              id="pills-home" role="tabpanel"
                                                                              aria-labelledby="pills-home-tab">


                                                                              <table id="training_data"
                                                                                    class="table table-striped table-bordered">
                                                                                    <thead>
                                                                                          <tr align="center">

                                                                                                <th>No.</th>
                                                                                                <th>Course Code</th>
                                                                                                <th>Training Name</th>
                                                                                                <th>Training Description
                                                                                                </th>
                                                                                                <th>Start-Date</th>
                                                                                                <th>End-Date</th>
                                                                                                <th>Trainer</th>
                                                                                                <th>Certificate</th>

                                                                                          </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                          <?php foreach($training_data->result() as $index => $row){ ?>
                                                                                          <tr align="center">
                                                                                                <td><?php echo $index+1 ?>
                                                                                                </td>
                                                                                                <td><?php echo $row->Course_code; ?>
                                                                                                </td>
                                                                                                <td><?php echo $row->Course_name; ?>
                                                                                                </td>
                                                                                                <td><?php echo $row->Course_description; ?>
                                                                                                </td>
                                                                                                <td><?php echo $row->Start_date; ?>
                                                                                                </td>
                                                                                                <td><?php echo $row->End_date; ?>
                                                                                                </td>
                                                                                                <td><?php echo $row->trainer_titlename.$row->trainer_fname."  ".$row->trainer_Sname ?>
                                                                                                </td>
                                                                                                <td>

                                                                                                      <?php if($row->Certificate == 1){
                                                                        echo "O";
                                                                  }else{
                                                                        echo "-";
                                                                  } ?>

                                                                                                </td>
                                                                                          </tr>
                                                                                          <?php }   ?>


                                                                                    </tbody>
                                                                              </table>


                                                                        </div>
                                                                        <div class="tab-pane fade" id="pills-profile"
                                                                              role="tabpanel"
                                                                              aria-labelledby="pills-profile-tab">

                                                                              <table id="bootstrap-data-table"
                                                                                    class="table table-striped table-bordered">
                                                                                    <thead>
                                                                                          <tr>
                                                                                                <th>No.</th>
                                                                                                <th>Position</th>
                                                                                                <th>Department</th>
                                                                                                <th>Section</th>
                                                                                                <th>Duration</th>
                                                                                          </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                          <tr>
                                                                                                <td>1</td>
                                                                                                <td>Staff</td>
                                                                                                <td>Human Resourse</td>
                                                                                                <td>6180</td>
                                                                                                <td>02/01/2021 -
                                                                                                      11/04/2022</td>
                                                                                          </tr>
                                                                                          <tr>
                                                                                                <td>2</td>
                                                                                                <td>Senior Staff</td>
                                                                                                <td>Human Resourse</td>
                                                                                                <td>6180</td>
                                                                                                <td>11/04/2022 - Now
                                                                                                </td>
                                                                                          </tr>


                                                                                    </tbody>
                                                                              </table>
                                                                        </div>

                                                                  </div>

                                                            </div>
                                                      </div>
                                                </div>


                                          </div>
                                    </div><!-- .animated -->

                                    <div class="col-md-3">
                                          <a
                                                href="<?php echo base_url() ?>tr_employee_training_record/Emp_training_record/Employee_training">
                                                <button type="button" class="btn btn-secondary">Back</button>
                                          </a>
                                    </div>

                              </div><!-- .content -->

                        </div>


                  </div>
                  <!-- Start col-lg-12 -->


            </div> <!-- /.container-fluid -->
            <script type="text/javascript" src="<?php echo base_url();?>DataTables/datatables.min.js"></script>