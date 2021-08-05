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
      $(document).ready(function() {

            $("#alert_tr_course_code").hide();
            $("#tr_course_code").keyup(function() {
                  $("#alert_tr_course_code").hide();
            });

            $("#alert_tr_course_name").hide();
            $("#tr_course_name").keyup(function() {
                  $("#alert_tr_course_name").hide();
            });

            $("#alert_tr_course_category1").hide();
            $("#tr_course_category1").change(function() {
                  $("#alert_tr_course_category1").hide();
            });

            $("#alert_tr_course_category2").hide();
            $("#tr_course_category2").change(function() {
                  $("#alert_tr_course_category2").hide();
            });

            $("#alert_tr_course_category3").hide();
            $("#tr_course_category3").change(function() {
                  $("#alert_tr_course_category3").hide();
            });

            $("#alert_tr_course_type").hide();
            $("#tr_course_type").change(function() {
                  $("#alert_tr_course_type").hide();
            });

      });
      // document ready
      function add_courses() {

            var tr_course_code = document.getElementById("tr_course_code").value;
            var tr_course_name = document.getElementById("tr_course_name").value;
            var tr_course_des = document.getElementById("tr_course_des").value;
            var tr_course_category1 = document.getElementById("tr_course_category1").value;
            var tr_course_category2 = document.getElementById("tr_course_category2").value;
            var tr_course_category3 = document.getElementById("tr_course_category3").value;
            var tr_course_type = document.getElementById("tr_course_type").value;


            $.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>/tr_manage_training_configuration/Manage_training_course/add_course",
                  data: {
                        "tr_course_code": tr_course_code,
                        "tr_course_name": tr_course_name,
                        "tr_course_des": tr_course_des,
                        "tr_course_category1": tr_course_category1,
                        "tr_course_category2": tr_course_category2,
                        "tr_course_category3": tr_course_category3,
                        "tr_course_type": tr_course_type
                  },
                  dataType: "JSON",
                  success: function(data) {
                        // console.log(status)
                        window.location.href =
                              "<?php echo base_url();?>/tr_manage_training_configuration/Manage_training_course/Course";
                  }
                  // success function

            });

            // ajax 
      } //function add_courses


      function Edit_course(Course_id) {
            var tr_course_code = document.getElementById("tr_course_code" + Course_id).value;
            var tr_course_name = document.getElementById("tr_course_name" + Course_id).value;
            var tr_course_des = document.getElementById("tr_course_des" + Course_id).value;
            var tr_course_category1 = document.getElementById("tr_course_category1" + Course_id).value;
            var tr_course_category2 = document.getElementById("tr_course_category2" + Course_id).value;
            var tr_course_category3 = document.getElementById("tr_course_category3" + Course_id).value;
            var tr_course_type = document.getElementById("tr_course_type" + Course_id).value;


            $.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>/tr_manage_training_configuration/Manage_training_course/edit_course",
                  data: {
                        "Course_id": Course_id,
                        "tr_course_code": tr_course_code,
                        "tr_course_name": tr_course_name,
                        "tr_course_des": tr_course_des,
                        "tr_course_category1": tr_course_category1,
                        "tr_course_category2": tr_course_category2,
                        "tr_course_category3": tr_course_category3,
                        "tr_course_type": tr_course_type

                  },
                  dataType: "JSON",
                  success: function(data) {
                        console.log(data)
                        window.location.href =
                              "<?php echo base_url();?>/tr_manage_training_configuration/Manage_training_course/Course";
                  }
                  // success function

            });
            // ajax 



      }
      //function Edit_course

      function Delete_course(Course_id) {

            // console.log(Course_id);

            $.ajax({
                  type: "post",
                  url: "<?php echo base_url(); ?>/tr_manage_training_configuration/Manage_training_course/delete_course",
                  data: {
                        "Course_id": Course_id
                  },
                  dataType: "JSON",
                  success: function(data) {
                        // console.log(status)
                        window.location.href =
                              "<?php echo base_url();?>/tr_manage_training_configuration/Manage_training_course/Course";
                  }

            });

      }
      //function Delete_course


      function check_course() {
            var tr_course_code = document.getElementById("tr_course_code").value;
            var tr_course_name = document.getElementById("tr_course_name").value;
            var tr_course_des = document.getElementById("tr_course_des").value;
            var tr_course_category1 = document.getElementById("tr_course_category1").value;
            var tr_course_category2 = document.getElementById("tr_course_category2").value;
            var tr_course_category3 = document.getElementById("tr_course_category3").value;
            var tr_course_type = document.getElementById("tr_course_type").value;

            if (tr_course_code != "0" && tr_course_name != "" && tr_course_category1 != "0" && tr_course_category2 !=
                  "0" && tr_course_category3 != "0" && tr_course_type != "0") {
                  add_courses();
                  return true;

            } else if (tr_course_code == "" && tr_course_name == "" && tr_course_category1 == "0" &&
                  tr_course_category2 == "0" && tr_course_category3 == "0" && tr_course_type == "0") {
                  $("#alert_tr_course_code").show();
                  $("#alert_tr_course_name").show();
                  $("#alert_tr_course_category1").show();
                  $("#alert_tr_course_category2").show();
                  $("#alert_tr_course_category3").show();
                  $("#alert_tr_course_type").show();
            } else if (tr_course_code == "") {
                  $("#alert_tr_course_code").show();
            } else if (tr_course_name == "") {
                  $("#alert_tr_course_name").show();
            } else if (tr_course_category1 == "0") {
                  $("#alert_tr_course_category1").show();
            } else if (tr_course_type == "0") {
                  $("#alert_tr_course_type").show();
            }

            


      }
      //check_data
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
                                    <h1 class="m-0 font-weight-bold text-primary"><i class="fa  fa-tasks text-white"
                                                id="Home"></i>
                                          <font color="white">Manage Training Course</font>
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
                                                                        Course
                                                                        <i class="fa fa-plus text-black"></i></button>
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
                                                                              <th>Action</th>

                                                                        </tr>
                                                                  </thead>
                                                                  <tbody>

                                                                        <?php foreach($crs as $index=>$row ){  ?>

                                                                        <tr align="center">
                                                                              <td><?php echo ($index+1) ?></td>
                                                                              <td><?php echo $row->Course_code; ?></td>
                                                                              <td><?php echo $row->Course_name; ?></td>
                                                                              <td><?php echo $row->Course_description; ?>
                                                                              </td>
                                                                              <td>
                                                                                    <button type="button"
                                                                                          class="btn btn-warning"><i
                                                                                                class="fa fa-edit "
                                                                                                data-toggle="modal"
                                                                                                data-target="#EditModal<?php echo $row->Course_id?>"></i></button>
                                                                                    <button type="button"
                                                                                          class="btn btn-danger"><i
                                                                                                class="ti ti-trash "
                                                                                                data-toggle="modal"
                                                                                                data-target="#DeleteModal<?php echo $row->Course_id?>"></i></button>
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
                        <a
                              href="<?php echo base_url() ?>tr_manage_training_configuration/Manage_training_configuration/index">
                              <button type="button" class="btn btn-secondary">Back</button>
                        </a>
                  </div>
            </div>
            <!-- col-lg-12 -->
      </div>
      <!-- /.container-fluid -->



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
                                    <label for="focusedinput" class="col-sm-3 control-label">Course Code :</label>
                                    <div class="col-sm-6">
                                          <input type="text" class="form-control" id="tr_course_code" placeholder="Code"
                                                checked required>
                                          <p id="alert_tr_course_code">
                                                <font color="red"><b>Please fill out the information completely. </b>
                                                </font>
                                          </p>
                                    </div>

                              </div>
                              <br>
                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Course Name :</label>
                                    <div class="col-sm-6">
                                          <input type="text" class="form-control" id="tr_course_name" placeholder="Name"
                                                checked required>
                                          <p id="alert_tr_course_name">
                                                <font color="red"><b>Please fill out the information completely. </b>
                                                </font>
                                          </p>
                                    </div>
                              </div>
                              <br>
                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Course Description
                                          :</label>
                                    <div class="col-10 col-md-6"><textarea name="textarea-input" id="tr_course_des"
                                                rows="9" placeholder="Description..." class="form-control"></textarea>
                                    </div>
                              </div>
                              <br>
                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Course Category :</label>
                                    <div class="col-sm-3">
                                          <select name="example_length" class="form-control" aria-controls="example"
                                                id="tr_course_category1">
                                                <option value="0">Select</option>
                                                <option value="General">General</option>
                                                <option value="Technical">Technical</option>
                                                <option value="Requirement">Requirement</option>
                                                <option value="Instructor">Instructor</option>
                                          </select>
                                    </div>
                                    <div class="col-sm-3">
                                          <select name="example_length" class="form-control" aria-controls="example"
                                                id="tr_course_category2">
                                                <option value="0">Select</option>
                                                <option value="In-house">In-house</option>
                                                <option value="External Training">External Training</option>
                                                <option value="On the job training">On the job training</option>
                                                <option value="Seminar">Seminar</option>
                                          </select>
                                    </div>
                                    <div class="col-sm-3">
                                          <select name="example_length" class="form-control" aria-controls="example"
                                                id="tr_course_category3">
                                                <option value="0">Select</option>
                                                <option value="Classroom">Classroom </option>
                                                <option value="E-learning">E-learning</option>
                                                <option value="Self study">Self study</option>
                                                <option value="Both Classroom & On the job training">Both Classroom & On
                                                      the job training</option>
                                                <option value="On the job training">On the job training</option>
                                          </select>
                                    </div>
                                    <p id="alert_tr_course_category1">
                                    <!-- <p id="alert_tr_course_category2">
                                    <p id="alert_tr_course_category3"> -->
                                          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                          &nbsp; &nbsp;
                                          &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                          &nbsp; &nbsp; &nbsp;
                                          <font color="red"><b>Please fill out the information completely. </b></font>
                                    </p>    
                                    <!-- </p>
                                    </p> -->
                              </div>
                              <br>
                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Type :</label>
                                    <div class="col-sm-3">
                                          <select name="example_length" class="form-control" aria-controls="example"
                                                id="tr_course_type">
                                                <option value="0">Select</option>
                                                <option value="Internal">Internal </option>
                                                <option value="External">External</option>
                                          </select>
                                    </div>

                              </div>
                              <p id="alert_tr_course_type">
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    <font color="red"><b>Please fill out the information completely. </b></font>
                              </p>
                        </div>
                        <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary" onclick="check_course()">Save</button>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Create Modal -->
      <?php
	$num = 1;
	foreach($crs as $index=>$row ) { ?>

      <div class="modal fade" id="EditModal<?php echo $row->Course_id?>" tabindex="-1" role="dialog"
            aria-labelledby="mediumModalLabel" aria-hidden="true">
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
                                    <label for="focusedinput" class="col-sm-3 control-label">Course Code :</label>
                                    <div class="col-sm-6">
                                          <input type="text" class="form-control"
                                                id="tr_course_code<?php echo $row->Course_id; ?>" placeholder="Code"
                                                value="<?php echo $row->Course_code; ?>">
                                    </div>

                              </div>
                              <br>
                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Course Name :</label>
                                    <div class="col-sm-6">
                                          <input type="text" class="form-control"
                                                id="tr_course_name<?php echo $row->Course_id; ?>" placeholder="Name"
                                                value="<?php echo $row->Course_name; ?>">
                                    </div>
                              </div>
                              <br>
                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Course Description
                                          :</label>
                                    <div class="col-10 col-md-6"><textarea name="textarea-input"
                                                id="tr_course_des<?php echo $row->Course_id; ?>" rows="9"
                                                placeholder="Description..."
                                                class="form-control"><?php echo $row->Course_description; ?></textarea>
                                    </div>
                              </div>
                              <br>
                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Course Category :</label>
                                    <div class="col-sm-3">
                                          <select name="example_length" class="form-control" aria-controls="example"
                                                id="tr_course_category1<?php echo $row->Course_id; ?>">
                                                <option value="0">Select</option>
                                                <?php if($row->Course_category1 == "General"){ ?>
                                                <option value="General" selected>General</option>
                                                <option value="Technical">Technical</option>
                                                <option value="Requirement">Requirement</option>
                                                <option value="Instructor">Instructor</option>
                                                <?php } else if($row->Course_category1 == "Technical") { ?>
                                                <option value="General">General</option>
                                                <option value="Technical" selected>Technical</option>
                                                <option value="Requirement">Requirement</option>
                                                <option value="Instructor">Instructor</option>
                                                <?php } else if($row->Course_category1 == "Requirement") {  ?>
                                                <option value="General">General</option>
                                                <option value="Technical">Technical</option>
                                                <option value="Requirement" selected>Requirement</option>
                                                <option value="Instructor">Instructor</option>
                                                <?php } else if($row->Course_category1 == "Instructor") {  ?>
                                                <option value="General">General</option>
                                                <option value="Technical">Technical</option>
                                                <option value="Requirement">Requirement</option>
                                                <option value="Instructor" selected>Instructor</option>
                                                <?php } ?>
                                          </select>
                                    </div>
                                    <div class="col-sm-3">
                                          <select name="example_length" class="form-control" aria-controls="example"
                                                id="tr_course_category2<?php echo $row->Course_id; ?>">
                                                <option value="0">Select</option>
                                                <?php if($row->Course_category2 == "In-house"){ ?>
                                                <option value="In-house" selected>In-house</option>
                                                <option value="External Training">External Training</option>
                                                <option value="On the job training">On the job training</option>
                                                <option value="Seminar">Seminar</option>
                                                <?php } else if($row->Course_category2 == "External Training") { ?>
                                                <option value="In-house">In-house</option>
                                                <option value="External Training" selected>External Training</option>
                                                <option value="On the job training">On the job training</option>
                                                <option value="Seminar">Seminar</option>
                                                <?php } else if($row->Course_category2 == "On the job training") {  ?>
                                                <option value="In-house">In-house</option>
                                                <option value="External Training">External Training</option>
                                                <option value="On the job training" selected>On the job training
                                                </option>
                                                <option value="Seminar">Seminar</option>
                                                <?php } else if($row->Course_category2 == "Seminar") {  ?>
                                                <option value="In-house">In-house</option>
                                                <option value="External Training">External Training</option>
                                                <option value="On the job training">On the job training</option>
                                                <option value="Seminar" selected>Seminar</option>
                                                <?php } ?>
                                          </select>
                                    </div>
                                    <div class="col-sm-3">
                                          <select name="example_length" class="form-control" aria-controls="example"
                                                id="tr_course_category3<?php echo $row->Course_id; ?>">
                                                <option value="0">Select</option>
                                                <?php if($row->Course_category3 == "Classroom"){ ?>
                                                <option value="Classroom" selected>Classroom </option>
                                                <option value="E-learning">E-learning</option>
                                                <option value="Self study">Self study</option>
                                                <option value="Both Classroom & On the job training">Both Classroom & On
                                                      the job training</option>
                                                <option value="On the job training">On the job training</option>
                                                <?php } else if($row->Course_category3 == "E-learning") { ?>
                                                <option value="Classroom">Classroom </option>
                                                <option value="E-learning" selected>E-learning</option>
                                                <option value="Self study">Self study</option>
                                                <option value="Both Classroom & On the job training">Both Classroom & On
                                                      the job training</option>
                                                <option value="On the job training">On the job training</option>
                                                <?php } else if($row->Course_category3 == "Self study") {  ?>
                                                <option value="Classroom">Classroom </option>
                                                <option value="E-learning">E-learning</option>
                                                <option value="Self study" selected>Self study</option>
                                                <option value="Both Classroom & On the job training">Both Classroom & On
                                                      the job training</option>
                                                <option value="On the job training">On the job training</option>
                                                <?php } else if($row->Course_category3 == "Both Classroom & On the job training") {  ?>
                                                <option value="Classroom">Classroom </option>
                                                <option value="E-learning">E-learning</option>
                                                <option value="Self study">Self study</option>
                                                <option value="Both Classroom & On the job training" selected>Both
                                                      Classroom & On the job training</option>
                                                <option value="On the job training">On the job training</option>
                                                <?php } else if($row->Course_category3 == "On the job training") {  ?>
                                                <option value="Classroom">Classroom </option>
                                                <option value="E-learning">E-learning</option>
                                                <option value="Self study">Self study</option>
                                                <option value="Both Classroom & On the job training">Both Classroom & On
                                                      the job training</option>
                                                <option value="On the job training" selected>On the job training
                                                </option>
                                                <?php } ?>
                                          </select>
                                    </div>

                              </div> <!-- row category -->
                              <br>
                              <div class="row">
                                    <label for="focusedinput" class="col-sm-3 control-label">Course Type :</label>
                                    <div class="col-sm-3">
                                          <select name="example_length" class="form-control" aria-controls="example"
                                                id="tr_course_type<?php echo $row->Course_id; ?>">
                                                <option value="0">Select</option>
                                                <?php if($row->Course_type == "Internal"){ ?>
                                                <option value="Internal" selected>Internal</option>
                                                <option value="External">External</option>
                                                <?php } else if($row->Course_type == "External") { ?>
                                                <option value="Internal">Internal</option>
                                                <option value="External" selected>External</option>
                                                <?php } ?>
                                          </select>
                                    </div>


                              </div>


                        </div>
                        <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <button type="button" class="btn btn-primary"
                                    onClick="Edit_course(<?php echo $row->Course_id; ?>)">Save</button>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Edit Modal -->


      <div class="modal fade" id="DeleteModal<?php echo $row->Course_id?>" tabindex="-1" role="dialog"
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
                                    onClick="Delete_course(<?php echo $row->Course_id; ?>)">Confirm</button>
                        </div>
                  </div>
            </div>
      </div>
      <!-- Delete Modal -->
      <?php 
$num++;
} //foreach?>