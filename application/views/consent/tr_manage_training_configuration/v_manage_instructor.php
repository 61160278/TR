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
            background-color: #4E73DF;
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
                                    <h1 class="m-0 font-weight-bold text-primary"><i class="fa  fa-tasks text-white"
                                                id="Home"></i>
                                          <font color="white">Manage Instructor</font>
                                    </h1>
                              </div>
                              <!-- End panel  -->

                        </div>
                        <!-- End header  -->



                        <div class="content">
                              <div class="animated fadeIn">
                                    <div class="row">

                                          <div class="col-md-12">
                                                <div class="card">
                                                      <div class="card-header">

                                                      <div class="pull-left margin">
                                                                  <input class="form-control col-md-12" type="text"
                                                                        placeholder="Search ..." aria-label="Search">

                                                            </div>
                                                            <div class="pull-right margin">
                                                                  <button type="button" class="btn btn-success">Create
                                                                        Trainer
                                                                        <i class="fa fa-plus text-black"></i></button>
                                                            </div>

                                                      </div> 
                                                      <!-- card header -->

                                                      <div class="card-body">
                                                            <table id="bootstrap-data-table"
                                                                  class="table table-striped table-bordered">
                                                                  <thead>
                                                                        <tr align="center">
                                                                              
                                                                                    <th>No.</th>
                                                                                    <th>Trainer</th>
                                                                                    <th>Institution</th>               
                                                                                    <th>Action</th>
                                                                              
                                                                        </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                        <tr align="center">
                                                                              <td>1.</td>
                                                                              <td>Mr.Kenji Sleeptogether</td>
                                                                              <td>DENSO</td>
                                                                              <td>
                                                                              <button type="button" class="btn btn-warning"><i class="fa fa-edit "></i></button>
                                                                              <button type="button" class="btn btn-danger"><i class="ti ti-trash "></i></button>
                                                                              </td>
                                                                        </tr>
                                                                        <tr align="center">
                                                                              <td>2.</td>
                                                                              <td>Mr.Denial Ok</td>
                                                                              <td>DENSO</td>
                                                                              <td>
                                                                              <button type="button" class="btn btn-warning"><i class="fa fa-edit "></i></button>
                                                                              <button type="button" class="btn btn-danger"><i class="ti ti-trash "></i></button>
                                                                              </td>
                                                                        </tr>
                                                                        <tr align="center">
                                                                              <td>3.</td>
                                                                              <td>Ms.Kate J.son</td>
                                                                              <td>DENSO</td>
                                                                              <td>
                                                                              <button type="button" class="btn btn-warning"><i class="fa fa-edit "></i></button>
                                                                              <button type="button" class="btn btn-danger"><i class="ti ti-trash "></i></button>
                                                                              </td>
                                                                        </tr>
                                                                        <tr align="center">
                                                                              <td>4.</td>
                                                                              <td>Mr.Tony Roger</td>
                                                                              <td>DENSO</td>
                                                                              <td>
                                                                              <button type="button" class="btn btn-warning"><i class="fa fa-edit "></i></button>
                                                                              <button type="button" class="btn btn-danger"><i class="ti ti-trash "></i></button>
                                                                              </td>
                                                                        </tr>
                                                                        <tr align="center">
                                                                              <td>5.</td>
                                                                              <td>Ms.Maria Del</td>
                                                                              <td>DENSO</td>
                                                                              <td>
                                                                              <button type="button" class="btn btn-warning"><i class="fa fa-edit "></i></button>
                                                                              <button type="button" class="btn btn-danger"><i class="ti ti-trash "></i></button>
                                                                              </td>
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
                  <!-- card-shadow mb-4 -->
            </div>
            <!-- col-lg-12 -->
      </div>
      <!-- /.container-fluid -->

      <div class="col-md-7">
            <a href="<?php echo base_url() ?>tr_manage_training_configuration/Manage_training_configuration/index">
                  <button type="button" class="btn btn-secondary">Back</button>
            </a>
      </div>