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
                                                                  <button type="button" class="btn btn-success"
                                                                        data-toggle="modal"
                                                                        data-target="#CreateModal">Create
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
                                                                                    <button type="button"
                                                                                          class="btn btn-warning"
                                                                                          data-toggle="modal"
                                                                                          data-target="#EditModal"><i
                                                                                                class="fa fa-edit "></i></button>
                                                                                    <button type="button"
                                                                                          class="btn btn-danger"
                                                                                          data-toggle="modal"
                                                                                          data-target="#DeleteModal"><i
                                                                                                class="ti ti-trash "></i></button>
                                                                              </td>
                                                                        </tr>
                                                                        <tr align="center">
                                                                              <td>2.</td>
                                                                              <td>Mr.Denial Ok</td>
                                                                              <td>DENSO</td>
                                                                              <td>
                                                                                    <button type="button"
                                                                                          class="btn btn-warning"
                                                                                          data-toggle="modal"
                                                                                          data-target="#EditModal"><i
                                                                                                class="fa fa-edit "></i></button>
                                                                                    <button type="button"
                                                                                          class="btn btn-danger"
                                                                                          data-toggle="modal"
                                                                                          data-target="#DeleteModal"><i
                                                                                                class="ti ti-trash "></i></button>
                                                                              </td>
                                                                        </tr>
                                                                        <tr align="center">
                                                                              <td>3.</td>
                                                                              <td>Ms.Kate J.son</td>
                                                                              <td>DENSO</td>
                                                                              <td>
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
                                                                              <td>Mr.Tony Roger</td>
                                                                              <td>DENSO</td>
                                                                              <td>
                                                                                    <button type="button"
                                                                                          class="btn btn-warning"><i
                                                                                                class="fa fa-edit "></i></button>
                                                                                    <button type="button"
                                                                                          class="btn btn-danger"><i
                                                                                                class="ti ti-trash "></i></button>
                                                                              </td>
                                                                        </tr>
                                                                        <tr align="center">
                                                                              <td>5.</td>
                                                                              <td>Ms.Maria Del</td>
                                                                              <td>DENSO</td>
                                                                              <td>
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
            <a href="<?php echo base_url() ?>tr_manage_training_configuration/Manage_training_configuration/index">
                  <button type="button" class="btn btn-secondary">Back</button>
            </a>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="CreateModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                        <div class="modal-header" style="background-color:#00B050;">
                              <h5 class="modal-title" id="mediumModalLabel"><b>
                                          <font color="white" size="5px">Create Course</font>
                                    </b></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <div class="modal-body">

                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Course Category :</label>
                                    <div class="col-sm-2">
                                          <select name="example_length" class="form-control" aria-controls="example"
                                                onChange="select_company(value)">
                                                <option value="0">Select</option>
                                                <option value="1">Mr.</option>
                                                <option value="2">Ms.</option>

                                          </select>
                                    </div>


                              </div>
                              <br>

                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Firstname :</label>
                                    <div class="col-sm-6">
                                          <input type="text" class="form-control" id="grouptext" placeholder="FirstName">
                                    </div>

                              </div>
                              <br>
                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Surname :</label>
                                    <div class="col-sm-6">
                                          <input type="text" class="form-control" id="grouptext" placeholder="Surname">
                                    </div>
                              </div>
                              <br>
                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Institution :</label>
                                    <div class="col-sm-6">
                                          <input type="text" class="form-control" id="grouptext" placeholder="Institution">
                                    </div>
                              </div>
                              
                             

                        </div>
                        <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary">Save</button>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Create Modal -->


      <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                        <div class="modal-header" style="background-color:#FFC000;">
                              <h5 class="modal-title" id="mediumModalLabel"><b>
                                          <font color="white" size="5px">Edit Course</font>
                                    </b></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <div class="modal-body">




                        <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Course Category :</label>
                                    <div class="col-sm-2">
                                          <select name="example_length" class="form-control" aria-controls="example"
                                                onChange="select_company(value)">
                                                <option value="0">Select</option>
                                                <option value="1">Mr.</option>
                                                <option value="2">Ms.</option>

                                          </select>
                                    </div>


                              </div>
                              <br>

                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Firstname :</label>
                                    <div class="col-sm-6">
                                          <input type="text" class="form-control" id="grouptext" placeholder="FirstName">
                                    </div>

                              </div>
                              <br>
                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Surname :</label>
                                    <div class="col-sm-6">
                                          <input type="text" class="form-control" id="grouptext" placeholder="Surname">
                                    </div>
                              </div>
                              <br>
                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Institution :</label>
                                    <div class="col-sm-6">
                                          <input type="text" class="form-control" id="grouptext" placeholder="Institution">
                                    </div>
                              </div>

                        </div>
                        <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary">Save</button>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Edit Modal -->


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