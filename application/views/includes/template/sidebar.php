<?php
/*
* sidebar
* Display sidebar template
* @input    
* @output
* @author Kunanya Singmee
* @Create Date 2564-710
*/

?>
<style>

#left-panel {
      background-color: #263238;
}
#main-menu{
      background-color: #263238;
}
#icon_sidebar{
    font-size: 25px;
   
}
</style>

<!--Start  side bar -->
<aside id="left-panel" class="left-panel">
    <!-- Start tap navigator -->
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">



            <!-- Start tap menu sidebar   -->
            <ul class="nav navbar-nav">
                <li class="menu-item">
                
                    <a href="<?php echo base_url()?>Trs_Controller/index"><i class="menu-icon fa fa-home fa-lg"
                            style="color: white" id="icon_sidebar"></i><font size="3">Home</font> </a>
                </li>
                <!-- Home page  -->

                <li class="menu-title" ><font color="white">Menu</font></li>
                <!-- /.menu-title -->

                <li class="menu-item">
                    <a href="<?php echo base_url() ?>tr_manage_training_configuration/Manage_training_configuration/index"><i
                            class="menu-icon fa fa-tasks " style="color: white" id="icon_sidebar"></i>Manage Training Configuration</a>
                </li>
                <!-- อิอิ  -->

                <li class="menu-item">
                    <a href=""><i
                            class="menu-icon fa fa-users" style="color: white" id="icon_sidebar"></i>Employee Training Record</a>
                </li>
                <!-- อิอิ  -->

                <li class="menu-item">
                    <a href="<?php echo base_url() ?>tr_manage_training_record/Manage_training_record/index"><i
                            class="menu-icon fa fa-pencil-square" style="color: white" id="icon_sidebar"></i>Manage Training Record</a>
                </li>
                <!-- อิอิ  -->

                <li class="menu-item">
                    <a href=""><i
                            class="menu-icon fa fa-book" style="color: white" id="icon_sidebar"></i>Report</a>
                </li>
                <!-- อิอิ  -->

                <li class="menu-item">
                    <a href=""><i
                            class="menu-icon ti ti-id-badge" style="color: white" id="icon_sidebar"></i>Profile</a>
                </li>
                <!-- อิอิ  -->

         
                
              



            </ul>
            <!-- End tap menu sidebar  -->
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <!--End tap navigator  -->

</aside>
<!-- End side-bar -->
