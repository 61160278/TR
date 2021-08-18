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
            background-color: #FFC000;

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
      var member = [];
      $(document).ready(function() {
            add_member_table();
      });

      function edt_training_recrod(Training_id) {
            console.log(Training_id)
            var edt_place_training = document.getElementById("edt_place_training" + Training_id).value;
            var edt_start_date = document.getElementById("edt_start_date" + Training_id).value;
            var edt_start_time = document.getElementById("edt_start_time" + Training_id).value;
            var edt_end_date = document.getElementById("edt_end_date" + Training_id).value;
            var edt_end_time = document.getElementById("edt_end_time" + Training_id).value;
            var edt_total_h = document.getElementById("edt_total_h" + Training_id).value;
            var edt_cost = document.getElementById("edt_cost" + Training_id).value;
            var edt_pre_score = document.getElementById("edt_pre_score" + Training_id).value;
            var edt_post_score = document.getElementById("edt_post_score" + Training_id).value;
            var edt_trainer = document.getElementById("edt_trainer" + Training_id).value;
            var edt_checkbox = document.getElementById("edt_checkbox" + Training_id);
            // var edt_Show_count = document.getElementById("edt_Show_count" + Training_id).value;
            // var edt_Show_course_id = document.getElementById("edt_Show_course_id" + Training_id).value;

            if (edt_checkbox.checked == true) {
                  checkboxs = 1;
            } else {
                  checkboxs = 0;
            }

            // console.log(checkboxs)

            $.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>/tr_manage_training_record/Manage_training_record/edit_training",
                  data: {
                        "Training_id": Training_id,
                        "edt_place_training": edt_place_training,
                        "edt_start_date": edt_start_date,
                        "edt_start_time": edt_start_time,
                        "edt_end_date": edt_end_date,
                        "edt_end_time": edt_end_time,
                        "edt_total_h": edt_total_h,
                        "edt_cost": edt_cost,
                        "edt_pre_score": edt_pre_score,
                        "edt_post_score": edt_post_score,
                        "edt_trainer": edt_trainer,
                        "checkboxs": checkboxs
                        // "edt_Show_count": edt_Show_count,
                        // "edt_Show_course_id": edt_Show_course_id

                  },
                  dataType: "JSON",
                  success: function(data) {
                        $("#addmember").collapse('show');
                        $("#edt_place_training" + Training_id).attr("disabled", true);
                        $("#edt_start_date" + Training_id).attr("disabled", true);
                        $("#edt_start_time" + Training_id).attr("disabled", true);
                        $("#edt_end_date" + Training_id).attr("disabled", true);
                        $("#edt_end_time" + Training_id).attr("disabled", true);
                        $("#edt_total_h" + Training_id).attr("disabled", true);
                        $("#edt_trainer" + Training_id).attr("disabled", true);
                        $("#edt_cost" + Training_id).attr("disabled", true);
                        $("#edt_pre_score" + Training_id).attr("disabled", true);
                        $("#edt_post_score" + Training_id).attr("disabled", true);
                        $("#save_data").hide();
                        console.log(data)
                  }
                  // success function

            });

            // ajax 
      } //function add_courses


      function edt_check_training(check) {
            var edt_place_training = document.getElementById("edt_place_training" + check).value;
            var edt_start_date = document.getElementById("edt_start_date" + check).value;
            var edt_start_time = document.getElementById("edt_start_time" + check).value;
            var edt_end_date = document.getElementById("edt_end_date" + check).value;
            var edt_end_time = document.getElementById("edt_end_time" + check).value;
            var edt_total_h = document.getElementById("edt_total_h" + check).value;
            var edt_trainer = document.getElementById("edt_trainer" + check).value;



            if (edt_place_training != "" && edt_start_date != "" && edt_start_time != "" && edt_end_date != "" &&
                  edt_end_time != "" && edt_trainer != "0" && edt_trainer != "") {
                  edt_training_recrod(check);

                  return true;

            } else {
                  console.log("show")
                  $("#warningModal").modal('show');
                  return false;
            }


      }
      //check_data



      function search_emp() {
            var emp_id = document.getElementById("emp_id").value;

            $.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>/tr_manage_training_record/Manage_training_record/search_emp",
                  data: {
                        "emp_id": emp_id
                  },
                  dataType: "JSON",
                  success: function(data, status) {
                        // console.log(status)
                        // console.log(data)

                        if (data.length == 0) {

                              document.getElementById("nameEmp").value = "ไม่มีข้อมูล";
                              $("#add_m").attr("disabled", true);
                        }
                        // if
                        else {
                              empname = data[0].Empname_eng + " " + data[0].Empsurname_eng
                              document.getElementById("nameEmp").value = empname;
                              var check = 0;

                              if (member.lenght != 0) {
                                    member.forEach((row, index) => {
                                          if (row == data[0].Emp_ID) {
                                                check++;
                                          }
                                    });
                                    // forEach
                                    if (check == 0) {
                                          $("#add_m").attr("disabled", false);


                                    } else {

                                          $("#add_m").attr("disabled", true);
                                    }
                              } else {
                                    $("#add_m").attr("disabled", false);
                              }

                        }
                        // else
                  }
            });
            // ajax




      } //search_emp
      var count = 0;

      function add_member() {
            var Training_id = document.getElementById("Training_id").value;
            var emp_id = document.getElementById("emp_id").value;
            var total_h = document.getElementById("edt_total_h" + Training_id).value;
            var checkbox = document.getElementById("edt_checkbox" + Training_id).checked;
            console.log(checkbox)
            var data_table = "";
            $.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>/tr_manage_training_record/Manage_training_record/search_get_emp",
                  data: {
                        "emp_id": emp_id
                  },
                  dataType: "JSON",
                  success: function(data, status) {

                        console.log(data)
                        count++;
                        var obj = data;
                        member.push(obj.Emp_ID)
                        data_table += "<tr>"
                        data_table += "<td>" + count + "</td>"
                        data_table += "<td id='emp_id_" + count + "'>" + obj.Emp_ID + "</td>"
                        data_table += "<td>" + obj.Empname_eng + " " + obj.Empsurname_eng +
                              "</td>"
                        data_table += "<td>" + obj.Position_name + "</td>"
                        data_table += "<td>" + obj.Department + "</td>"
                        data_table += "<td>" + obj.Sectioncode + "</td>"
                        data_table += "<td>" + total_h + "</td>"
                        data_table += "<td><font color='green'>Pass</font></td>"
                        if (checkbox == true) {
                              checkboxs = 1;
                              data_table += "<td>" + checkboxs + "</td>"
                        } else {
                              checkboxs = 0;
                              data_table += "<td>" + checkboxs + "</td>"
                        }

                        data_table += "</tr>"
                        $("#show_member").append(data_table);
                        $("#emp_id").val('');
                        $("#nameEmp").val('');
                        $("#add_m").attr("disabled", true);
                  }

            });
            // ajax





      }

      function add_member_table() {
            var Training_id = document.getElementById("Training_id").value;


            var data_table = "";
            $.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>/tr_manage_training_record/Manage_training_record/edt_get_member",
                  data: {
                        "Training_id": Training_id
                  },
                  dataType: "JSON",
                  success: function(data, status) {

                        console.log(data)
                        count++;

                        data.forEach((row, index) => {

                              var checkbox = 0;
                              member.push(row.Emp_ID)
                              data_table += "<tr>"
                              data_table += "<td>" + count + "</td>"
                              data_table += "<td id='emp_id_" + count + "'>" + row
                                    .Emp_ID + "</td>"
                              data_table += "<td>" + row.Empname_eng + " " + row
                                    .Empsurname_eng +
                                    "</td>"
                              data_table += "<td>" + row.Position_name + "</td>"
                              data_table += "<td>" + row.Department + "</td>"
                              data_table += "<td>" + row.Sectioncode + "</td>"
                              data_table += "<td>" + row.Total_hours + "</td>"
                              data_table += "<td><font color='green'>Pass</font></td>"
                              if (row.Certificate == "1") {
                                    checkboxs = 1;
                                    data_table += "<td>" + checkboxs + "</td>"
                              } else {
                                    checkboxs = 0;
                                    data_table += "<td>" + checkboxs + "</td>"
                              }

                              data_table += "</tr>"
                        });
                        // forEach
                        $("#show_member").html(data_table);
                        $("#emp_id").val('');
                        $("#nameEmp").val('');
                        $("#add_m").attr("disabled", true);
                  }

            });
            // ajax


      }


      function add_member_db() {
            var training = "";
            var empid = [];
            var check = 0;
            $.get("<?php echo base_url(); ?>tr_manage_training_record/Manage_training_record/get_course", function(
                  data) {
                  var obj = JSON.parse(data);
                  training = obj.Training_id;
                  console.log(obj);
                  check++;
                  if (check != 0) {
                        for (i = 1; i <= count; i++) {
                              document.getElementById("emp_id_" + i).innerHTML;
                              empid.push(document.getElementById("emp_id_" + i).innerHTML)
                        } //for

                        console.log(empid)

                        $.ajax({
                              type: "POST",
                              url: "<?php echo base_url(); ?>/tr_manage_training_record/Manage_training_record/save_member",
                              data: {
                                    "training": training,
                                    "count": count,
                                    "empid": empid
                              },
                              dataType: "JSON",
                              success: function(data) {

                                    window.location.href =
                                          "<?php echo base_url();?>/tr_manage_training_record/Manage_training_record/index";
                              }

                        });
                        // ajax


                  }
            });







      } //function add_member_db
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
                                          <font color="white">Edit Training Data</font>
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
                                                            <?php foreach($trr as $row) { ?>

                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Type of Training :
                                                                  <div class="col-sm-1">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" placeholder="Type"
                                                                              value="<?php echo $row->Course_type; ?>"
                                                                              disabled>
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; ครั้งที่ :
                                                                  <div class="col-sm-1">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" disabled
                                                                              value="<?php echo $row->Course_count; ?>">
                                                                  </div>


                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Course Code :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" placeholder="Code" disabled
                                                                              value="<?php echo $row->Course_code_id; ?>">
                                                                  </div>



                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Training Name :
                                                                  <div class="col-sm-3">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" placeholder="Training Name"
                                                                              disabled
                                                                              value="<?php echo $row->Course_name; ?>">
                                                                        <input type="text" id="Training_id" disabled
                                                                              value="<?php echo $row->Training_id; ?>"
                                                                              hidden>
                                                                  </div>

                                                            </div>
                                                            <!-- row 1 -->
                                                            <br>

                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp;Course Category :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              value="<?php echo $row->Course_category1; ?>"
                                                                              disabled>
                                                                  </div>
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              value="<?php echo $row->Course_category2; ?>"
                                                                              disabled>
                                                                  </div>
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              value="<?php echo $row->Course_category3; ?>"
                                                                              disabled>
                                                                  </div>


                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Place :
                                                                  <div class="col-sm-3">
                                                                        <input type="text" class="form-control"
                                                                              id="edt_place_training<?php echo $row->Training_id; ?>"
                                                                              value="<?php echo $row->Place_training; ?>">
                                                                  </div>

                                                            </div>
                                                            <!-- row 2 -->
                                                            <br>
                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Start-Date :
                                                                  <div class="col-sm-2">
                                                                        <input type="date" class="form-control"
                                                                              value="<?php echo $row->Start_date; ?>"
                                                                              id="edt_start_date<?php echo $row->Training_id; ?>">
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Start-Time :
                                                                  <div class="col-sm-2">
                                                                        <input type="time" class="form-control"
                                                                              value="<?php echo $row->Start_time; ?>"
                                                                              id="edt_start_time<?php echo $row->Training_id; ?>">
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; End-Date :
                                                                  <div class="col-sm-2">
                                                                        <input type="date" class="form-control"
                                                                              id="edt_end_date<?php echo $row->Training_id; ?>"
                                                                              value="<?php echo $row->End_date; ?>">
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; End-Time :
                                                                  <div class="col-sm-2">
                                                                        <input type="time" class="form-control"
                                                                              id="edt_end_time<?php echo $row->Training_id; ?>"
                                                                              value="<?php echo $row->End_time; ?>">
                                                                  </div>

                                                            </div>
                                                            <!-- row 3 -->

                                                            <br>
                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Total Hours :
                                                                  <div class="col-sm-1">
                                                                        <input type="text" class="form-control"
                                                                              id="edt_total_h<?php echo $row->Training_id; ?>"
                                                                              value="<?php echo $row->Total_hours; ?>">
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Trainer :
                                                                  <div class="col-sm-2">

                                                                        <select name="example_length"
                                                                              class="form-control"
                                                                              aria-controls="example"
                                                                              id="edt_trainer<?php echo $row->Training_id; ?>">
                                                                              <option value="0">Select Trainer</option>
                                                                              <?php foreach($ins as $row_ins) { 
                                                                                    if($row_ins ->trainer_id == $row->Trainer_id){  ?>
                                                                              <option
                                                                                    value="<?php echo $row_ins->trainer_id; ?>"
                                                                                    selected>
                                                                                    <?php echo $row_ins->trainer_titlename.$row_ins->trainer_fname."  ".$row_ins->trainer_Sname ?>
                                                                              </option>
                                                                              <?php  }  else{?>
                                                                              <option
                                                                                    value="<?php echo $row_ins->trainer_id; ?>">
                                                                                    <?php echo $row_ins->trainer_titlename.$row_ins->trainer_fname."  ".$row_ins->trainer_Sname ?>
                                                                              </option>
                                                                              <?php } ?>
                                                                              <?php } ?>
                                                                        </select>
                                                                  </div>


                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Cost :
                                                                  <div class="col-2">
                                                                        <input type="text" class="form-control"
                                                                              id="edt_cost<?php echo $row->Training_id; ?>"
                                                                              value="<?php echo $row->Cost; ?>">
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Pre-test Score :
                                                                  <div class="col-1">
                                                                        <input type="text" class="form-control"
                                                                              id="edt_pre_score<?php echo $row->Training_id; ?>"
                                                                              value="<?php echo $row->Pre_test_score; ?>">
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Post-test Score :
                                                                  <div class="col-1">
                                                                        <input type="text" class="form-control"
                                                                              id="edt_post_score<?php echo $row->Training_id; ?>"
                                                                              value="<?php echo $row->Post_test_score; ?>">
                                                                  </div>

                                                            </div>
                                                            <!-- row 4 -->

                                                            <br>
                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Certificate
                                                                  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <div class="checkbox">



                                                                        <div class="col-md-3">
                                                                              <?php if($row->Certificate == "1"){ ?>
                                                                              <input type="checkbox"
                                                                                    id="edt_checkbox<?php echo $row->Training_id; ?>"
                                                                                    name="checkbox2" checked
                                                                                    class="form-check-input">
                                                                              <?php } else{?>
                                                                              <input type="checkbox"
                                                                                    id="edt_checkbox<?php echo $row->Training_id; ?>"
                                                                                    name="checkbox2"
                                                                                    class="form-check-input">
                                                                              <?php } ?>
                                                                        </div>

                                                                  </div>



                                                            </div>
                                                            <!-- row 5 -->
                                                            <?php  } ?>
                                                            <br>
                                                            <button type="button" class="btn btn-primary" id="save_data"
                                                                  onclick="edt_check_training(<?php echo $row->Training_id; ?>)">Confirm</button>
                                                      </div>
                                                      <!-- card-body -->


                                                </div>
                                          </div>
                                    </div>



                              </div>
                        </div>
                        <!-- content 1 -->
                        <div class="collapse" id="addmember">
                              <div class="content">
                                    <div class="animated fadeIn">
                                          <div class="row">

                                                <div class="col-md-12">
                                                      <div class="card">

                                                            <div class="row">

                                                                  <div class="col-md-2">

                                                                        <input class="form-control" type="text"
                                                                              placeholder="Employee ID" id="emp_id"
                                                                              onkeyup="search_emp()">
                                                                  </div>
                                                                  <div class="col-md-2">
                                                                        <input class="form-control" type="text"
                                                                              id="nameEmp" disabled>
                                                                        &nbsp;&nbsp;
                                                                  </div>
                                                                  <div class="col-md-2">
                                                                        <button type="button" class="btn btn-success"
                                                                              id="add_m" onclick="add_member()">Add
                                                                              Member
                                                                              <i
                                                                                    class="fa fa-plus text-black"></i></button>
                                                                  </div>

                                                            </div>
                                                            <div class="card-body">
                                                                  <table id="bootstrap-data-table"
                                                                        class="table table-striped table-bordered">
                                                                        <thead>
                                                                              <tr align="center">

                                                                                    <th>No.</th>
                                                                                    <th>Employee Code</th>
                                                                                    <th>Firstname-Surname</th>
                                                                                    <th>Position</th>
                                                                                    <th>Department</th>
                                                                                    <th>Section</th>
                                                                                    <th>Hours</th>
                                                                                    <th>Status</th>
                                                                                    <th>Certificate</th>
                                                                                    <th>Action</th>

                                                                              </tr>
                                                                        </thead>
                                                                        <tbody id="show_member">
                                                                        </tbody>
                                                                  </table>
                                                            </div>
                                                      </div>
                                                </div>


                                          </div>
                                    </div><!-- .animated 2 -->
                              </div><!-- .content 2 -->
                        </div>
                  </div>
                  <div class="col-md-3">
                        <a href="<?php echo base_url() ?>tr_manage_training_record/Manage_training_record/index">
                              <button type="button" class="btn btn-secondary">Back</button>
                        </a>
                  </div>
            </div>
            <!-- Start col-lg-12 -->

      </div> <!-- /.container-fluid -->


      <!-- Modal Warning -->
      <div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                        <div class="modal-header" style="background-color:#FFC000;">
                              <h5 class="modal-title" id="mediumModalLabel">
                                    <font color="white" size="6px"><i class="fa fa-exclamation-triangle">
                                                Warning</i></font>
                              </h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                              </button>
                        </div>
                        <div class="modal-body">
                              <p>
                                    <b> Please fill in the correct information. </b>
                              </p>
                        </div>
                        <div class="modal-footer">
                              <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                        </div>
                  </div>
            </div>
      </div>
      <!-- End Modal Warning -->


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