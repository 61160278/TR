<?php
/*
* v_report_person.php
* @author Jirayu Jaravichit
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
      function exportfile() {
            var sheet_name = "Report_Person";
            var file_name = "Report_Person_Training";

            var wb = {
                  SheetNames: [],
                  Sheets: {}
            };

            var objectMaxLength = [3, 12, 14, 21, 11, 10, 18, 12];

            var wscols = [{
                        width: objectMaxLength[0],
                  },
                  {
                        width: objectMaxLength[1]
                  },
                  {
                        width: objectMaxLength[2]
                  }, //...
                  {
                        width: objectMaxLength[3]
                  },
                  {
                        width: objectMaxLength[4]
                  },
                  {
                        width: objectMaxLength[5]
                  },
                  {
                        width: objectMaxLength[6]
                  },
                  {
                        width: objectMaxLength[7]
                  },

            ];

            var ws9 = XLSX.utils.table_to_sheet(document.getElementById('Export_Report_data'), {
                  raw: true
            });

            ws9["!cols"] = wscols;


            wb.SheetNames.push(sheet_name);
            wb.Sheets[sheet_name] = ws9;
            XLSX.writeFile(wb, file_name + ".xlsx", {
                  cellStyles: true
            });

      }
      // exportfile excel

function export_pdf(){

            var Emp_id = document.getElementById("emp_ids").value;
            console.log(Emp_id);

            $.ajax({
                  type: "POST",
                  url: "<?php echo base_url(); ?>/tr_report/TR_report/Report_person_pdf",
                  data: {
                        "Emp_id": Emp_id
                      
                  },
                  dataType: "JSON",
                  success: function(data) {
                       
                  }
                  // success function

            });

            // ajax 



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
                                          <font color="white">Report Person</font>
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


                                                <div class="col-md-1">
                                                      Emp. ID :
                                                </div>
                                                <div class="col-md-3">
                                                      <form action="<?php echo base_url() ?>tr_report/Tr_report/Show_trainingperson"
                                                            method="post">
                                                            <input class="form-control"  type="text" placeholder="Search"
                                                            id="emp_id" name="emp_id" required>

                                                </div>
                                                <!--col3-->
                                                <div class="col-md-1">
                                                      <button class="btn btn-primary btn-lg" type="submit">
                                                            <i class="fa  fa-search"></i>
                                                </div>

                                          </div>

                                    </div>
                                    <br>
                                    <div class="row">

                                          <table id="Export_Report_data" class="table table-striped table-bordered">
                                                <thead>
                                                      <?php if(sizeof($data_id) != 0){
                                                foreach($data_id->result() as $row){ ?>
                                                      <tr>
                                                            <th colspan="8">
                                                                  <h3>Training record report for Person </h3>
                                                            </th>
                                                      </tr>
                                                      <tr>
                                                            <th colspan="8">
                                                            <h3> <?php echo $row->Emp_nametitle.$row->Empname_th." ".$row->Empsurname_th; ?> </h3>
                                                            </th>
                                                      </tr>

                                                      <?php } 
                                                      }  ?>
                                                      <?php if(sizeof($Show_datapr) != 0){ ?>
                                                      <tr align="center">

                                                            <th>No.</th>
                                                            <th>Course Code</th>
                                                            <th>Training Name</th>
                                                            <th>Training Description
                                                            </th>
                                                            <th>Start-Date</th>
                                                            <th>End-Date</th>
                                                            <th>Trainer</th>
                                                            <th>Certificate</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                      <?php 
                                                     
                                                      foreach($Show_datapr as $index => $row){ ?>
                                                      <tr align="center">
                                                            <td><?php echo $index+1 ?>
                                                            </td>
                                                            <td><?php echo $row->Course_code; ?>
                                                            </td>
                                                            <td><?php echo $row->Course_name; ?>
                                                            </td>
                                                            <td><?php echo $row->Course_description; ?>
                                                            </td>
                                                            <td><?php echo $row->Start_date; ?>
                                                            </td>
                                                            <td><?php echo $row->End_date; ?>
                                                            </td>
                                                            <td><?php echo $row->trainer_titlename.$row->trainer_fname."  ".$row->trainer_Sname ?>
                                                            </td>
                                                            <td>

                                                                  <?php if($row->Certificate == 1){
                                                                        echo "O";
                                                                  }else{
                                                                        echo "-";
                                                                  } ?>

                                                            </td>
                                                      </tr>

                                                      <?php 
                                                }
                                                
                                                }   ?>


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
                                                <?php if(sizeof($Show_datapr) != 0){ ?>
                                                <img class="rounded-circle"
                                                      src="<?php echo base_url();?>elaadmin/images/Excel.png"
                                                      alt="Excel" width="55">
                                                <button type="button" class="btn btn-primary"
                                                      onclick="exportfile()">Dowload Excel</button>
                                          </div>
                                          <div class="col-md-2">
                                                <img class="rounded-circle"
                                                      src="<?php echo base_url();?>elaadmin/images/PDF.png" alt="Excel"
                                                      width="40">
                                                      <!-- <a href="<?php echo base_url()?>tr_report/TR_report/Report_person_pdf"> -->
                                                      <input class="form-control"  type="text" value="<?php echo $Emp_id; ?>"
                                                            id="emp_ids" >
                                                <button type="button" class="btn btn-primary" onclick="export_pdf()">Dowload PDF</button>
                                                <!-- </a> -->
                                          </div>

                                          <?php }  ?>
                                    </div>
                                    <br>
                              </div>
                        </div>
                        <!-- card-shadow mb-4 -->

                  </div>
                  <!-- col-lg-12 -->
            </div>
            <!-- /.container-fluid -->