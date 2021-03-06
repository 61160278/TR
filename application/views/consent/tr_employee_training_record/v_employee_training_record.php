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
                                                                  <div class="col-md-1">
                                                                        Emp. ID :
                                                                  </div>
                                                                  <div class="col-md-3">
                                                                              <form action="<?php echo base_url() ?>tr_employee_training_record/Emp_training_record/Show_Profile"
                                                                                    method="post">
                                                                                    <input class="form-control"
                                                                                          type="text"
                                                                                          placeholder="Search"
                                                                                          name="emp_id" required>
                                                                        
                                                                  </div>
                                                                  <!--col3-->
                                                                  <div class="col-md-1">
                                                                  <button class="btn btn-primary btn-lg" type="submit">
                                                                              <i class="fa  fa-search"></i>
                                                                  </div>

                                                            </div>
                                                      </div>
                                                      </form>




                                                </div>
                                          </div>
                                    </div>

                                    <div class="col-md-7">
                  <a href="<?php echo base_url()?>Trs_Controller/index">
                        <button type="button" class="btn btn-secondary">Back</button>
                  </a>
            </div> <!-- div 7 -->

                              </div>
                        </div><!-- .animated -->




                        
                  </div><!-- .content -->

                  
            </div>
            <!-- card-shadow mb-4 -->
            
      </div>
      <!-- col-lg-12 -->
      </div>
      <!-- /.container-fluid -->