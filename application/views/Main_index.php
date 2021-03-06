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
      font-size: 60px;
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
                              <h1 class="m-0 font-weight-bold text-primary"><i class="fa  fa-home text-white"
                                          id="Home"></i>
                                    <font color="white">Home</font>
                              </h1>
                        </div>
                        <!-- End panel  -->

                  </div>
                  <!-- End header  -->



                  <!-- Start content  -->
                  <div class="card-body row">

                        <!-- Start Menu Manage Training Configuration -->
                        <div class="col-xl-4 col-md-6 mb-4">
                              <a
                                    href="<?php echo base_url() ?>tr_manage_training_configuration/Manage_training_configuration/index">
                                    <div class="card border4 shadow h-100 py-2">
                                          <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                      <div class="col mr-2">
                                                            <div class="menu-icon fa fa-tasks" 
                                                                  id="icon_main_menu"></div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Manage
                                                                  Data</div>
                                                      </div>
                                                      <!-- col-2 -->
                                                </div>
                                                <!-- row -->
                                          </div>
                                          <!-- card body -->
                                    </div>
                                    <!-- card -->
                              </a>
                              <!-- a href -->
                        </div>
                        <!-- End Menu Manage Training Configuration  -->

                        <!-- Start Menu Manage Training Record -->
                        <div class="col-xl-4 col-md-6 mb-4">
                              <a href="<?php echo base_url() ?>tr_manage_training_record/Manage_training_record/index">
                                    <div class="card border4 shadow h-100 py-2">
                                          <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                      <div class="col mr-2">
                                                            <div class="menu-icon fa fa-pencil-square"
                                                                  style="color: gray-800" id="icon_main_menu"></div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Manage
                                                                  Training Class</div>
                                                      </div>
                                                      <!-- col-2 -->
                                                </div>
                                                <!-- row -->
                                          </div>
                                          <!-- card body -->
                                    </div>
                                    <!-- card -->
                              </a>
                              <!-- a href -->
                        </div>
                        <!-- End Menu Manage Training Record -->


                        <!-- Start Menu Employee Training Record -->
                        <div class="col-xl-4 col-md-6 mb-4">
                              <a href="<?php echo base_url() ?>tr_employee_training_record/Emp_training_record/Employee_training">
                                    <div class="card border4 shadow h-100 py-2">
                                          <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                      <div class="col mr-2">
                                                            <div class="menu-icon fa fa-users" style="color: gray-800"
                                                                  id="icon_main_menu"></div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Employee
                                                                  Training Record</div>
                                                      </div>
                                                      <!-- col-2 -->
                                                </div>
                                                <!-- row -->
                                          </div>
                                          <!-- card body -->
                                    </div>
                                    <!-- card -->
                              </a>
                              <!-- a href -->
                        </div>
                        <!-- End Menu Employee Training Record  -->



                        <!-- Start Menu Report -->
                        <div class="col-xl-4 col-md-6 mb-4">
                              <a href="<?php echo base_url() ?>tr_report/TR_report/Report">
                                    <div class="card border4 shadow h-100 py-2">
                                          <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                      <div class="col mr-2">
                                                            <div class="menu-icon fa fa-book" style="color: gray-800"
                                                                  id="icon_main_menu"></div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Report
                                                            </div>
                                                      </div>
                                                      <!-- col-2 -->
                                                </div>
                                                <!-- row -->
                                          </div>
                                          <!-- card body -->
                                    </div>
                                    <!-- card -->
                              </a>
                              <!-- a href -->
                        </div>
                        <!-- End Menu Report  -->


                        <!-- Start Menu Profile -->
                        <div class="col-xl-4 col-md-6 mb-4">
                              <a href="<?php echo base_url() ?>tr_profile/TR_profile/Profile">
                                    <div class="card border4 shadow h-100 py-2">
                                          <div class="card-body">
                                                <div class="row no-gutters align-items-center">
                                                      <div class="col mr-2">
                                                            <div class="menu-icon fa fa-tasks" style="color: gray-800"
                                                                  id="icon_main_menu"></div>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Profile
                                                            </div>
                                                      </div>
                                                      <!-- col-2 -->
                                                </div>
                                                <!-- row -->
                                          </div>
                                          <!-- card body -->
                                    </div>
                                    <!-- card -->
                              </a>
                              <!-- a href -->
                        </div>
                        <!-- End Menu Profile -->

                  </div>
                  <!-- card-body-row -->
            </div>
            <!-- card-shadow mb-4 -->
      </div>
      <!-- col-lg-12 -->

</div>
<!-- /.container-fluid -->