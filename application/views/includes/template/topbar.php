<?php
/*
* topbar
* Display topbar template
* @input    
* @output
* @author Kunanya Singmee
* @Create Date 2563-09-3
*/

?>
<style>
#head{
    background-color: #4E73DF
}


</style>

<!-- right Panel -->
<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header class="header" id="head">
        <!-- Start div top-right  -->
        <div class="top-left">
            <!-- Start div navbar-header -->
            <div class="navbar-header" id = "head">
                <a class="navbar-brand" href="<?php echo base_url()?>Trs_Controller/index">
                    <img src="<?php echo base_url();?>elaadmin/images/LOGO_49.png" alt="Logo" height="80%">
                </a>
                <a id="menuToggle" class="menutoggle"><font color="white"><i class="fa fa-bars"></i></font></a>
            </div>
            <!-- End div navbar-header -->
        </div>
        <!-- End div top-right -->

        <!-- Start div top-right -->
        <div class="top-right">
            <!-- Start header menu  -->
            <div class="header-menu" >
                <!-- Start header-left -->
                <div class="header-left" >
                    <!-- Start user dropdow -->
                    <div class="user-area dropdown float-right">
                        <!-- Start image  -->
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" >
                            <img class="user-avatar rounded-circle"
                                src="<?php echo base_url();?>elaadmin/images/Kenad.jpg" alt="User Avatar">
                        </a>
                        <!-- End image   -->

                        <!-- Start profile  -->
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href=""><i
                                    class="fa fa-power -off"></i>Logout</a>
                        </div>
                        <!-- End profile  -->
                    </div>
                    <!-- End user dropdown -->

                </div>
                <!-- End header-left -->
            </div>
            <!-- End header menu  -->
        </div>
        <!-- End div top-right -->
    </header>
    <!-- /#header -->

    <!-- Content -->
    <div class="content">
        