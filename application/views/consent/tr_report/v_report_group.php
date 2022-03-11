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
      function select_depart(department_id) {



            $.ajax({
                  type: "post",
                  url: "<?php echo base_url(); ?>tr_report/Tr_report/Get_department",
                  data: {
                        "department_id": department_id

                  },
                  dataType: "JSON",
                  success: function(data, status) {
                        console.log(status)
                        console.log(data)

                  } //success
            });
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
                                    <h1 class="m-0 font-weight-bold text-primary"><i class="fa fa-book text-white"
                                                id="Home"></i>
                                          <font color="white">Report Group</font>
                                    </h1>
                              </div>
                              <!-- End panel  -->

                        </div>
                        <!-- End header  -->
                        <div class="col-md-12">
                              <div class="card-body">

                                    <br>
                                    <div class="card-text text-sm-center">
                                          <div class="row">



                                                <div class="col-md-3">
                                                      <select id="select" class="form-control " aria-controls="example"
                                                            onchange="select_depart(value)">
                                                            <option value="0" selected>Select Department</option>
                                                            <?php foreach($get_dep as $row) {?>
                                                            <option value="<?php echo $row->Department_id; ?>">
                                                                  <?php echo $row->Department; ?>
                                                            </option>
                                                            <?php } ?>
                                                      </select>

                                                </div>
                                                <!--col3-->
                                                <div class="col-md-3">
                                                      <select id="select" class="form-control " aria-controls="example"
                                                            onchange="select_depart()">
                                                            <option value="0" selected>Select Group</option>
                                                            <?php foreach($get_grp as $row) {?>
                                                            <option value="<?php echo $row->Group_id; ?>">
                                                                  <?php echo $row->Group; ?>
                                                            </option>
                                                            <?php } ?>
                                                      </select>

                                                </div>
                                                <!--col3-->
                                                <div class="col-md-3">
                                                      <select class="form-control " aria-controls="example"
                                                            onChange="select_company(value)">
                                                            <option value="">Select Section</option>
                                                            <option value="1">HR</option>
                                                            <option value="2">HRR</option>
                                                      </select>

                                                </div>
                                                <br>
                                                <br>

                                                <!--col3-->
                                                <div class="col-md-1">
                                                      <button class="btn btn-primary btn-lg" type="submit">
                                                            <i class="fa  fa-search"></i>
                                                </div>

                                          </div>

                                    </div>
                                    <br>
                                    <div class="row">

                                          <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                                <thead>
                                                      <tr align="center">
                                                            <th>No.</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Department</th>
                                                            <th>Training</th>

                                                      </tr>
                                                </thead>
                                                <tbody>

                                                      <tr align="center">
                                                            <td>1</td>
                                                            <td>Jirayu Jaravichit</td>
                                                            <td>General manager</td>
                                                            <td>HR</td>
                                                            <td>Train</td>

                                                      </tr>

                                                      <tr align="center">
                                                            <td>2</td>
                                                            <td>Jirayut Soooo</td>
                                                            <td>General manager</td>
                                                            <td>HR</td>
                                                            <td>Trainss</td>
                                                      </tr>



                                                </tbody>
                                          </table>
                                    </div>

                                    <br>
                                    <div class="row">
                                          <div class="col-md-8">
                                                <a href="<?php echo base_url()?>tr_report/TR_report/Report">
                                                      <button type="button" class="btn btn-secondary">Back</button>
                                                </a>
                                          </div>
                                          <div class="col-md-2">
                                                <img class="rounded-circle"
                                                      src="<?php echo base_url();?>elaadmin/images/Excel.png"
                                                      alt="Excel" width="55">
                                                <button type="button" class="btn btn-primary">Dowload Excel</button>
                                          </div>
                                          <div class="col-md-2">
                                                <img class="rounded-circle"
                                                      src="<?php echo base_url();?>elaadmin/images/Excel.png"
                                                      alt="Excel" width="55">
                                                <button type="button" class="btn btn-primary">Dowload PDF</button>
                                          </div>


                                    </div>
                                    <br>
                              </div>
                        </div>
                        <!-- card-shadow mb-4 -->

                  </div>
                  <!-- col-lg-12 -->
            </div>
            <!-- /.container-fluid -->