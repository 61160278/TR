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


function get_Emp_id() {
    Emp_id = document.getElementById("emp_id").value;
 

    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>/tr_employee_training_record/Emp_training_record/search_employee_id",
        data: {
            "Emp_id": Emp_id
        },
        dataType: "JSON",
        success: function(data, status) {
            // console.log(status)
            // console.log(data)

            if (data.length == 0) {

                document.getElementById("Showname_modol").value = "ไม่มีข้อมูล";

            } else {
                empname = data[0].Empname_eng + " " + data[0].Empsurname_eng
                document.getElementById("Showname_modol").value = empname;

                console.log(999)
                console.log(empname)
            }

            // if-else
        }
    });
    // ajax
}
// function get_Emp


function shown_profile(emp_id) {

console.log(emp_id);
// window.location.href = "<?php echo base_url(); ?>/tr_employee_training_record/Emp_training_record/Show_Profile/" + emp_id;
}




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
                                    <h1 class="m-0 font-weight-bold text-primary"><i class="fa  fa-users text-white"
                                                id="Home"></i>
                                          <font color="white">Employee Training Record</font>
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

                                                      <div class="card-body">

                                                            <div class="row form-group">
                                                                  <div class="col-sm-2">
                                                                        Employee ID :
                                                                  </div>

                                                                  <div class="col col-md-3">
                                                                        <div class="input-group">
                                                                        <input class="form-control" type="text"
                                                                                    placeholder="Search"
                                                                                    id="emp_id" > <!--<a href="<?php echo base_url() ?>tr_employee_training_record/Emp_training_record/Show_Profile">--> <font color="white"><button
                                                                                    class="btn btn-primary">
                                                                                    <i class="fa  fa-search" onClick="get_Emp_id()"></i></font> <!--</a>-->
                                                                        </div>
                                                                  </div>
                                                            </div>
                                                      </div>





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