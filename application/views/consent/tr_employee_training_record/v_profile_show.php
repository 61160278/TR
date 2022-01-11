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
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <img
                                                                        src="<?php echo base_url();?>elaadmin/images/1.jpg"
                                                                        width="200" height="200"
                                                                        class="rounded-circle" />

                                                            </div>
                                                            <br>
                                                            <br>
                                                            <?php foreach($data_id->result() as $row){ ?>
                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; รหัสประจำตัวพนักงาน :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" value ="<?php echo $row->Emp_ID; ?>" disabled>
                                                                  </div>


                                                                  &nbsp;&nbsp;&nbsp;&nbsp; ชื่อ :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext"
                                                                              placeholder="นาย แอดมิน จัดการได้หมด"
                                                                              disabled>
                                                                  </div>



                                                                  &nbsp;&nbsp;&nbsp;&nbsp; อายุงาน :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext"
                                                                              placeholder="13 ปี 1 เดือน 5 วัน"
                                                                              disabled>
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; วุฒิการศึกษา :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" placeholder="ปริญญาโท"
                                                                              disabled>
                                                                  </div>

                                                            </div>
                                                            <!-- row 1 -->
                                                            <br>

                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; ชื่ออังกฤษ :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext"
                                                                              placeholder="Mr. Admin Jatkandaimod"
                                                                              disabled>
                                                                  </div>


                                                                  &nbsp;&nbsp;&nbsp;&nbsp; ตำแหน่ง :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" placeholder="Administrator"
                                                                              disabled>
                                                                  </div>



                                                                  &nbsp;&nbsp;&nbsp;&nbsp; แผนก :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext"
                                                                              placeholder="Human Resourse" disabled>
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Section :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" placeholder="6180"
                                                                              disabled>
                                                                  </div>
                                                                  <!-- row 2 -->

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
                                                                                          <!-- foreach -->
                                                                                          <tr align="center">
                                                                                                <td>1.</td>
                                                                                                <td>IN-00001</td>
                                                                                                <td>General Safety</td>
                                                                                                <td>General Safety</td>
                                                                                                <td>02/01/2021</td>
                                                                                                <td>02/01/2021</td>
                                                                                                <td>Mr.Kenji
                                                                                                      Sleeptogether</td>
                                                                                                <td>

                                                                                                      &nbsp;&nbsp;
                                                                                                      &nbsp;&nbsp;
                                                                                                      &nbsp;
                                                                                                      <input type="checkbox"
                                                                                                            id="checkbox2"
                                                                                                            name="checkbox2"
                                                                                                            value="option2"
                                                                                                            class="form-check-input">


                                                                                                </td>
                                                                                          </tr>
                                                                                          <!-- ปิด foreach -->
                                                                                         

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
                              </div><!-- .content -->

                        </div>

                  </div>
                  <!-- Start col-lg-12 -->
                  <div class="col-md-3">
                        <a href="<?php echo base_url() ?>tr_manage_training_record/Manage_training_record/index">
                              <button type="button" class="btn btn-secondary">Back</button>
                        </a>
                  </div>

            </div> <!-- /.container-fluid -->