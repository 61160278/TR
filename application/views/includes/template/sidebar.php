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
</style>

<!--Start  side bar -->
<aside id="left-panel" class="left-panel">
    <!-- Start tap navigator -->
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">



            <!-- Start tap menu sidebar   -->
            <ul class="nav navbar-nav">
                <li class="menu-item">
                    <a href="<?php echo base_url()?>Trs_Controller/index"><i class="menu-icon fa fa-home"
                            style="color: white"></i>Home </a>
                </li>
                <!-- Home page  -->

                <li class="menu-title"><font color="white">Menu</font></li>
                <!-- /.menu-title -->

                <li class="menu-item">
                    <a href=""><i
                            class="menu-icon fa fa-tasks" style="color: white"></i>Create</a>
                </li>
                <!-- อิอิ  -->

                <li class="menu-item">
                    <a href=""><i
                            class="menu-icon ti ti-id-badge" style="color: white"></i>ETR</a>
                </li>
                <!-- อิอิ  -->

                <li class="menu-item">
                    <a href=""><i
                            class="menu-icon fa fa-tasks" style="color: white"></i>MT</a>
                </li>
                <!-- อิอิ  -->

                <li class="menu-item">
                    <a href=""><i
                            class="menu-icon fa fa-tasks" style="color: white"></i>Report</a>
                </li>
                <!-- อิอิ  -->

                <li class="menu-item">
                    <a href=""><i
                            class="menu-icon fa fa-tasks" style="color: white"></i>Profile</a>
                </li>
                <!-- อิอิ  -->
                
                <a id="menuToggle" class="menutoggle"><i class="fa fa-angle-right"></i></a>
                <!-- link top image  -->

            </ul>
            <!-- End tap menu sidebar  -->
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    <!--End tap navigator  -->

</aside>
<!-- End side-bar -->