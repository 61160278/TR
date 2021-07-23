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
                                                <div class="card border border-primary">
                                                      <div class="card-body">


                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; รหัสประจำตัวพนักงาน :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" placeholder="AD00037"
                                                                              disabled>
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



                                    </div>
                              </div>
                              <!-- content 1 -->

                              <div class="content">
                                    <div class="animated fadeIn">
                                          <div class="row">

                                                <div class="col-md-12">
                                                      <div class="card">
                                                            <h3>Tabs</h3>
                                                            <ul class="nav nav-tabs">
                                                                  <li class="active"><a href="#">Home</a></li>
                                                                  <li><a href="#">Menu 1</a></li>

                                                            </ul>
                                                            <div class="card-header">


                                                                  <strong class="card-title">Data Table</strong>


                                                            </div>
                                                            <div class="card-body">
                                                                  <table id="bootstrap-data-table"
                                                                        class="table table-striped table-bordered">
                                                                        <thead>
                                                                              <tr>
                                                                                    <th>Name</th>
                                                                                    <th>Position</th>
                                                                                    <th>Office</th>
                                                                                    <th>Salary</th>
                                                                              </tr>
                                                                        </thead>
                                                                        <tbody>

                                                                              <tr>
                                                                                    <td>Cara Stevens</td>
                                                                                    <td>Sales Assistant</td>
                                                                                    <td>New York</td>
                                                                                    <td>$145,600</td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td>Hermione Butler</td>
                                                                                    <td>Regional Director</td>
                                                                                    <td>London</td>
                                                                                    <td>$356,250</td>
                                                                              </tr>
                                                                              <tr>
                                                                                    <td>Lael Greer</td>
                                                                                    <td>Systems Administrator</td>
                                                                                    <td>London</td>
                                                                                    <td>$103,500</td>
                                                                              </tr>

                                                                        </tbody>
                                                                  </table>
                                                            </div>
                                                      </div>
                                                </div>


                                          </div>
                                    </div><!-- .animated -->
                              </div><!-- .content -->

                        </div>
                        <div class="col-md-3">
                              <a href="<?php echo base_url() ?>tr_manage_training_record/Manage_training_record/index">
                                    <button type="button" class="btn btn-secondary">Back</button>
                              </a>
                        </div>
                  </div>
                  <!-- Start col-lg-12 -->

            </div> <!-- /.container-fluid -->