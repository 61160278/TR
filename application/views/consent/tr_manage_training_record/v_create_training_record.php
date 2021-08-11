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
            background-color: #00B050;

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


function waringCourse(){
$('#warningModal').modal('show');
}
            
      function add_training_recrod() {

            var tr_course_code = document.getElementById("tr_course_code").value;
            var place_training = document.getElementById("place_training").value;
            var start_date = document.getElementById("start_date").value;
            var start_time = document.getElementById("start_time").value;
            var end_date = document.getElementById("end_date").value;
            var end_time = document.getElementById("end_time").value;
            var total_h = document.getElementById("total_h").value;
            var cost = document.getElementById("cost").value;
            var pre_score = document.getElementById("pre_score").value;
            var post_score = document.getElementById("post_score").value;
            var trainer = document.getElementById("trainer").value;
            var checkbox = document.getElementById("checkbox");
            if(checkbox.checked == true){
                  checkboxs = 1;  
            }else{
                  checkboxs = 0;  
            }
           
// console.log(checkboxs)

            $.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>/tr_manage_training_record/Manage_training_record/add_training",
                  data: {
                        "tr_course_code": tr_course_code,
                        "place_training": place_training,
                        "start_date": start_date,
                        "start_time": start_time,
                        "end_date": end_date,
                        "end_time": end_time,
                        "total_h": total_h,
                        "cost": cost,
                        "pre_score": pre_score,
                        "post_score": post_score,
                        "trainer" : trainer,
                        "checkboxs" : checkboxs

                  },
                  dataType: "JSON",
                  success: function(data) {
                        // console.log(status)
                        window.location.href =
                              "<?php echo base_url();?>/tr_manage_training_record/Manage_training_record/create_training_data";
                  }
                  // success function

            });

            // ajax 
      } //function add_courses



      function get_course() {
            tr_course_code = document.getElementById("tr_course_code").value;
            var coursename = "";

            $.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>/tr_manage_training_record/Manage_training_record/search_by_course_code",
                  data: {
                        "tr_course_code": tr_course_code
                  },
                  dataType: "JSON",
                  success: function(data, status) {

                        if (data.length == 0) {

                              document.getElementById("Show_course_name").value =
                                    "ไม่พบข้อมูลดังกล่าวข้อมูล";
                              document.getElementById("Show_course_type").value = "-";
                              document.getElementById("Show_course_category1").value = "-";
                              document.getElementById("Show_course_category2").value = "-";
                              document.getElementById("Show_course_category3").value = "-";

                        } else {
                              coursename = data[0].Course_name
                              document.getElementById("Show_course_name").value = coursename;

                              coursename = data[0].Course_type
                              document.getElementById("Show_course_type").value = coursename;

                              coursename = data[0].Course_category1
                              document.getElementById("Show_course_category1").value = coursename;

                              coursename = data[0].Course_category2
                              document.getElementById("Show_course_category2").value = coursename;

                              coursename = data[0].Course_category3
                              document.getElementById("Show_course_category3").value = coursename;

                              console.log(999)
                              console.log(coursename)
                        }

                        // if-else
                  }
            });
            // ajax
      }
      

      function check_training() {
            var tr_course_code = document.getElementById("tr_course_code").value;
            var Show_course_name = document.getElementById("Show_course_name").value;
console.log(5)
            if (tr_course_code != "0" && tr_course_code != "" && Show_course_name != "ไม่พบข้อมูลดังกล่าวข้อมูล") {
                  add_training_recrod();
                  return true;

            } else {
                 
                  alert("Please fill in the correct information.");
                  return false;
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
                                    <h1 class="m-0 font-weight-bold text-primary"><i
                                                class="fa  fa-pencil-square text-white" id="Home"></i>
                                          <font color="white">Create Training Data</font>
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
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Type of Training :
                                                                  <div class="col-sm-1">
                                                                        <input type="text" class="form-control"
                                                                              id="Show_course_type" disabled>
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; ครั้งที่ :
                                                                  <div class="col-sm-1">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" disabled>
                                                                  </div>


                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Course Code :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="tr_course_code" placeholder="Code"
                                                                              onkeyup="get_course()">
                                                                  </div>



                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Training Name :
                                                                  <div class="col-sm-3">
                                                                        <input type="text" class="form-control"
                                                                              id="Show_course_name"
                                                                              placeholder="Training Name">
                                                                  </div>

                                                            </div>
                                                            <!-- row 1 -->
                                                            <br>

                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp;Course Category :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="Show_course_category1" disabled>
                                                                  </div>
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="Show_course_category2" disabled>
                                                                  </div>
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="Show_course_category3" disabled>
                                                                  </div>


                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Place :
                                                                  <div class="col-sm-3">
                                                                        <input type="text" class="form-control"
                                                                              id="place_training" placeholder="Place">
                                                                  </div>

                                                            </div>
                                                            <!-- row 2 -->
                                                            <br>
                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Start-Date :
                                                                  <div class="col-sm-2">
                                                                        <input type="date" class="form-control"
                                                                              id="start_date">
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Start-Time :
                                                                  <div class="col-sm-2">
                                                                        <input type="time" class="form-control"
                                                                              id="start_time">
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; End-Date :
                                                                  <div class="col-sm-2">
                                                                        <input type="date" class="form-control"
                                                                              id="end_date">
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; End-Time :
                                                                  <div class="col-sm-2">
                                                                        <input type="time" class="form-control"
                                                                              id="end_time">
                                                                  </div>

                                                            </div>
                                                            <!-- row 3 -->

                                                            <br>
                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Total Hours :
                                                                  <div class="col-sm-1">
                                                                        <input type="text" class="form-control"
                                                                              id="total_h" disabled>
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Trainer :
                                                                  <div class="col-sm-2">
                                                                       
                                                                        <select name="example_length"
                                                                              class="form-control"
                                                                              aria-controls="example" id="trainer">
                                                                              <option value="0">Select Trainer</option>
                                                                              <?php foreach($ins as $row) {?>
                                                                              <option
                                                                                    value="<?php echo $row->trainer_id; ?>">
                                                                                    <?php echo $row->trainer_titlename.$row->trainer_fname."  ".$row->trainer_Sname ?>
                                                                              </option>
                                                                              <?php } ?>
                                                                        </select>
                                                                  </div>


                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Cost :
                                                                  <div class="col-2">
                                                                        <input type="text" class="form-control"
                                                                              id="cost">
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Pre-test Score:
                                                                  <div class="col-1">
                                                                        <input type="text" class="form-control"
                                                                              id="pre_score">
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Post-test Score :
                                                                  <div class="col-1">
                                                                        <input type="text" class="form-control"
                                                                              id="post_score">
                                                                  </div>

                                                            </div>
                                                            <!-- row 4 -->

                                                            <br>
                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Certificate
                                                                  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <div class="checkbox">
                                                                        <div class="col-md-3">
                                                                              <input type="checkbox" id="checkbox"
                                                                                    class="form-check-input">
                                                                        </div>

                                                                  </div>



                                                            </div>
                                                            <!-- row 5 -->
                                                            <br>
                                                            <button type="button" class="btn btn-primary"
                                                                  onclick="check_training()">Save</button>
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

                                                      <div class="row">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <input class="form-control col-md-2" type="text"
                                                                  placeholder="Employee ID" aria-label="Search">


                                                            &nbsp;&nbsp;

                                                            <button type="button" class="btn btn-success">Add Member
                                                                  <i class="fa fa-plus text-black"></i></button>


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

                                                                        </tr>
                                                                  </thead>
                                                                  <tbody>


                                                                  </tbody>
                                                            </table>
                                                      </div>
                                                </div>
                                          </div>


                                    </div>
                              </div><!-- .animated 2 -->
                        </div><!-- .content 2 -->

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
<div class="modal fade" id="warningModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                            Please fill in the correct information.
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary">Confirm</button>
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



      