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
                                    <h1 class="m-0 font-weight-bold text-primary"><i
                                                class="fa  fa-pencil-square text-white" id="Home"></i>
                                          <font color="white">Manage Training Record</font>
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
                                                                  <a
                                                                        href="<?php echo base_url() ?>tr_manage_training_record/Manage_training_record/create_training_data">
                                                                        <button type="button"
                                                                              class="btn btn-success">Create
                                                                              Training Data
                                                                              <i
                                                                                    class="fa fa-plus text-black"></i></button>
                                                                  </a>
                                                            </div>
                                                      </div>
                                                      <div class="card-body">
                                                            <table id="bootstrap-data-table"
                                                                  class="table table-striped table-bordered">
                                                                  <thead>
                                                                        <tr align="center">

                                                                              <th>No.</th>
                                                                              <th>Course Code</th>
                                                                              <th>Training Name</th>
                                                                              <th>Training Description</th>
                                                                              <th>Start-Date</th>
                                                                              <th>End-Date</th>
                                                                              <th>Trainer</th>
                                                                              <th>Action</th>

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
                                                                              <td>Mr.Kenji Sleeptogether</td>
                                                                              <td>
                                                                              <a
                                                                        href="<?php echo base_url() ?>tr_manage_training_record/Manage_training_record/info_training_data">
                                                                                    <button type="button"
                                                                                          class="btn btn-info"><i
                                                                                                class="fa fa-info-circle "></i></button></a>
                                                                                                <a
                                                                        href="<?php echo base_url() ?>tr_manage_training_record/Manage_training_record/edit_training_data">
                                                                                    <button type="button"
                                                                                          class="btn btn-warning"><i
                                                                                                class="fa fa-edit "
                                                                                                ></i></button></a>
                                                                                    <button type="button"
                                                                                          class="btn btn-danger"><i
                                                                                                class="ti ti-trash "
                                                                                                data-toggle="modal"
                                                                                                data-target="#DeleteModal"></i></button>
                                                                              </td>
                                                                        </tr>
                                                                        <tr align="center">
                                                                              <td>2.</td>
                                                                              <td>IN-00002</td>
                                                                              <td>Leader andd Management</td>
                                                                              <td>Communication for Leader</td>
                                                                              <td>21/01/2021</td>
                                                                              <td>21/01/2021</td>
                                                                              <td>Mr.Denial Ok</td>
                                                                              <td>
                                                                                    <button type="button"
                                                                                          class="btn btn-info"><i
                                                                                                class="fa fa-info-circle "></i></button>
                                                                                    <button type="button"
                                                                                          class="btn btn-warning"><i
                                                                                                class="fa fa-edit "
                                                                                                data-toggle="modal"
                                                                                                data-target="#EditModal"></i></button>
                                                                                    <button type="button"
                                                                                          class="btn btn-danger"><i
                                                                                                class="ti ti-trash "
                                                                                                data-toggle="modal"
                                                                                                data-target="#DeleteModal"></i></button>
                                                                              </td>
                                                                        </tr>
                                                                        <tr align="center">
                                                                              <td>3.</td>
                                                                              <td>IN-00003</td>
                                                                              <td>Professional Golf Caddie</td>
                                                                              <td>Communication Efficiency</td>
                                                                              <td>05/08/2021</td>
                                                                              <td>05/08/2021</td>
                                                                              <td>Mr.Kate J.son</td>
                                                                              <td>
                                                                                    <button type="button"
                                                                                          class="btn btn-info"><i
                                                                                                class="fa fa-info-circle "></i></button>
                                                                                    <button type="button"
                                                                                          class="btn btn-warning"><i
                                                                                                class="fa fa-edit "></i></button>
                                                                                    <button type="button"
                                                                                          class="btn btn-danger"><i
                                                                                                class="ti ti-trash "></i></button>
                                                                              </td>
                                                                        </tr>
                                                                        <tr align="center">
                                                                              <td>4.</td>
                                                                              <td>EX-00004</td>
                                                                              <td>Building Good Attitude at Work</td>
                                                                              <td>Self and Work Development</td>
                                                                              <td>25/02/2022</td>
                                                                              <td>25/02/2022</td>
                                                                              <td>Mr.Tony Roger</td>
                                                                              <td>
                                                                                    <button type="button"
                                                                                          class="btn btn-info"><i
                                                                                                class="fa fa-info-circle "></i></button>
                                                                                    <button type="button"
                                                                                          class="btn btn-warning"><i
                                                                                                class="fa fa-edit"></i></button>
                                                                                    <button type="button"
                                                                                          class="btn btn-danger"><i
                                                                                                class="ti ti-trash "></i></button>
                                                                              </td>
                                                                        </tr>
                                                                        <tr align="center">
                                                                              <td>5.</td>
                                                                              <td>EX-00005</td>
                                                                              <td>Working as one team</td>
                                                                              <td>Social skill for working together</td>
                                                                              <td>07/03/2022</td>
                                                                              <td>07/03/2022</td>
                                                                              <td>Mr.Kenji Sleeptogether</td>
                                                                              <td>
                                                                                    <button type="button"
                                                                                          class="btn btn-info"><i
                                                                                                class="fa fa-info-circle "></i></button>
                                                                                    <button type="button"
                                                                                          class="btn btn-warning"><i
                                                                                                class="fa fa-edit "></i></button>
                                                                                    <button type="button"
                                                                                          class="btn btn-danger"><i
                                                                                                class="ti ti-trash "></i></button>
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
            <a href="<?php echo base_url()?>Trs_Controller/index">
                  <button type="button" class="btn btn-secondary">Back</button>
            </a>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-sm-5" role="document">
                  <div class="modal-content">
                        <div class="modal-header" style="background-color:#E74A3B;">
                              <h5 class="modal-title" id="staticModalLabel"><b>
                                          <font color="white" size="5px">Delete</font>
                                    </b></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <div class="modal-body">
                              <p>
                                    Please Confirm delete data.
                              </p>
                        </div>
                        <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary">Confirm</button>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Delete Modal -->