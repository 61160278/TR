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
      <script>
      function Delete_training(Training_id,Course_code_id) {

            console.log(Training_id);

            $.ajax({
                  type: "post",
                  url: "<?php echo base_url(); ?>/tr_manage_training_record/Manage_training_record/delete_training_data",
                  data: {
                        "Training_id": Training_id,
                        "Course_code_id" : Course_code_id
                  },
                  dataType: "JSON",
                  success: function(data) {
                        // console.log(status)
                        window.location.href =
                              "<?php echo base_url(); ?>/tr_manage_training_record/Manage_training_record/index";
                  }

            });

      }
      //function Delete_training

      function info_data(Training_id) {

            console.log(Training_id);
            window.location.href =
                  "<?php echo base_url(); ?>/tr_manage_training_record/Manage_training_record/info_training_data/" +
                  Training_id;
      }
      //function info_data

      function edit_data(Training_id) {

            console.log(Training_id);
            window.location.href =
                  "<?php echo base_url(); ?>/tr_manage_training_record/Manage_training_record/edit_training_data/" +
                  Training_id;
      }
      //function info_data
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
                                    <h1 class="m-0 font-weight-bold text-primary"><i
                                                class="fa  fa-pencil-square text-white" id="Home"></i>
                                          <font color="white">Manage Training Class</font>
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
                                                                        <?php foreach($trc as $index=>$row ){  ?>
                                                                        <tr align="center">
                                                                              <td><?php echo ($index+1) ?></td>
                                                                              <td><?php echo $row->Course_code; ?>
                                                                              </td>
                                                                              <td><?php echo $row->Course_name; ?></td>
                                                                              <td><?php echo $row->Course_description; ?>
                                                                              </td>
                                                                              <td><?php echo $row->Start_date; ?></td>
                                                                              <td><?php echo $row->End_date; ?></td>
                                                                              <td> <?php echo $row->trainer_titlename.$row->trainer_fname."  ".$row->trainer_Sname ?>
                                                                              </td>


                                                                              <td>

                                                                                    <button type="button"
                                                                                          class="btn btn-info"
                                                                                          onClick="info_data(<?php echo $row->Training_id; ?>)"><i
                                                                                                class="fa fa-info-circle "></i></button>

                                                                                    <button type="button"
                                                                                          class="btn btn-warning"
                                                                                          onClick="edit_data(<?php echo $row->Training_id; ?>)"><i
                                                                                                class="fa fa-edit "></i></button>
                                                                                    <button type="button"
                                                                                          class="btn btn-danger"><i
                                                                                                class="ti ti-trash "
                                                                                                data-toggle="modal"
                                                                                                data-target="#DeleteModal<?php echo $row->Training_id; ?>"></i></button>
                                                                              </td>
                                                                        </tr>
                                                                        <?php }   ?>


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
                  <div class="col-md-7">
                        <a href="<?php echo base_url()?>Trs_Controller/index">
                              <button type="button" class="btn btn-secondary">Back</button>
                        </a>
                  </div>
            </div>
            <!-- col-lg-12 -->
      </div>
      <!-- /.container-fluid -->

      <?php foreach($trc as $index=>$row ){  ?>
      <!-- Modal -->
      <div class="modal fade" id="DeleteModal<?php echo $row->Training_id?>" tabindex="-1" role="dialog"
            aria-labelledby="staticModalLabel" aria-hidden="true">
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
                              <button type="button" class="btn btn-primary"
                                    onClick="Delete_training(<?php echo $row->Training_id; ?>,<?php echo $row->Course_code_id; ?>)">Confirm</button>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Delete Modal -->
      <?php  } ?>