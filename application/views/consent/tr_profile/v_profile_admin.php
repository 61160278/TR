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
                                                                      
                                                                        <div class="row">
                                                                              <div class="col-md-2">
                                                                                    รหัสพนักงาน :
                                                                              </div>

                                                                              <div class="col-md-2">
                                                                              <?php echo "HR00121"; ?>
                                                                              </div>

                                                                              <div class="col-md-1" align="right">
                                                                                    ชื่อ :
                                                                              </div>

                                                                              <div class="col-md-3">

                                                                              <?php echo "นายเอกชัย นามสมมุติ"; ?>

                                                                              </div>

                                                                              <div class="col-md-2" align="right">
                                                                                    อายุงาน :
                                                                              </div>


                                                                              <div class="col-md-2">

                                                                                    <?php echo "6 ปี 4 เดือน 1 วัน"; ?>

                                                                              </div>
                                                                        </div>
                                                                        <br>
                                                                        <hr>
                                                                        <div class="row">
                                                                              <div class="col-md-2">
                                                                                    วุฒิการศึกษา :
                                                                              </div>

                                                                              <div class="col-md-1">

                                                                              <?php echo "5"; ?>


                                                                              </div>
                                                                              <div class="col-md-2" align="right">
                                                                                    ชื่ออังกฤษ :
                                                                              </div>

                                                                              <div class="col-md-3">

                                                                              <?php echo "Mr. Aekkachai Namsommud "; ?>

                                                                              </div>

                                                                              <div class="col-md-2" align="right">
                                                                                    ตำแหน่ง :
                                                                              </div>
                                                                              <div class="col-sm-2">

                                                                              <?php echo "Seniorstaff"; ?>

                                                                              </div>
                                                                        </div>
                                                                        <br>
                                                                        <hr>
                                                                        <div class="row">
                                                                              <div class="col-md-1" align="right">
                                                                                    แผนก :
                                                                              </div>
                                                                              <div class="col-md-2" align="center">
                                                                              <?php echo "Humanresourse"; ?>
                                                                              </div>
                                                                              <!-- fix -->
                                                                              <div class="col-md-2" align="right">
                                                                                    Section :
                                                                              </div>
                                                                              <div class="col-md-2">

                                                                                    <?php echo "SDM-LN0036"; ?>

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
                                                                  <div class="pull-right margin">
                                                                        <input class="form-control col-md-12"
                                                                              type="text" placeholder="Search ..."
                                                                              aria-label="Search">

                                                                  </div>
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


                                                                              <table id="bootstrap-data-table"
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
                                                                                         
                                                                                                <tr align="center">
                                                                                                <td>1.</td>
                                                                                                <td>IN-00001</td>
                                                                                                <td>General Safety</td>
                                                                                                <td>General Safety</td>
                                                                                                <td>02/01/2021</td>
                                                                                                <td>02/01/2021</td>
                                                                                                <td>Mr.Kenji
                                                                                                      Namwong</td>
                                                                                                <td>

                                                                                                    O


                                                                                                </td>
                                                                                          </tr>
                                                                                          <tr align="center">
                                                                                                <td>2.</td>
                                                                                                <td>IN-00002</td>
                                                                                                <td>Leader and
                                                                                                      Management</td>
                                                                                                <td>Communication for
                                                                                                      Leader</td>
                                                                                                <td>21/01/2021</td>
                                                                                                <td>21/01/2021</td>
                                                                                                <td>Mr.Denial Oswai</td>
                                                                                                <td>


                                                                                                     -
                                                                                                </td>
                                                                                          </tr>
                                                                                          <tr align="center">
                                                                                                <td>3.</td>
                                                                                                <td>IN-00003</td>
                                                                                                <td>Professional Skill</td>
                                                                                                <td>Communication
                                                                                                      Efficiency</td>
                                                                                                <td>05/08/2021</td>
                                                                                                <td>05/08/2021</td>
                                                                                                <td>Mr.Kate J.son</td>
                                                                                                <td>

                                                                                                     O


                                                                                                </td>
                                                                                          </tr>
                                                                                          <tr align="center">
                                                                                                <td>4.</td>
                                                                                                <td>EX-00004</td>
                                                                                                <td>Building Good
                                                                                                      Attitude at Work
                                                                                                </td>
                                                                                                <td>Self and Work
                                                                                                      Development</td>
                                                                                                <td>25/02/2022</td>
                                                                                                <td>25/02/2022</td>
                                                                                                <td>Mr.Tony Roger</td>
                                                                                                <td>


                                                                                                    
                                                                                                      O


                                                                                                </td>
                                                                                          </tr>
                                                                                          <tr align="center">
                                                                                                <td>5.</td>
                                                                                                <td>EX-00005</td>
                                                                                                <td>Working as one team
                                                                                                </td>
                                                                                                <td>Social skill for
                                                                                                      working together
                                                                                                </td>
                                                                                                <td>07/03/2022</td>
                                                                                                <td>07/03/2022</td>
                                                                                                <td>Mr.Kenji
                                                                                                      Namwong</td>
                                                                                                <td>

                                                                                                      -


                                                                                                </td>
                                                                                          </tr>
                                                                                        


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
                                    <a href="<?php echo base_url()?>Trs_Controller/index">
                                                <button type="button" class="btn btn-secondary">Back</button>
                                          </a>
                                    </div>

                              </div><!-- .content -->

                        </div>


                  </div>
                  <!-- Start col-lg-12 -->


            </div> <!-- /.container-fluid -->