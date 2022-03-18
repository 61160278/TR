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
            // var Department_text = document.getElementById("select_department").textContent;
            var Section_id = document.getElementById("select_section").value;
            var group_id = document.getElementById("select_group").value;
            var temp = "";
            var count = 0;
            var e_department;
            var department_name;
            e_department = document.getElementById("select_department");
            department_name = e_department.options[e_department.selectedIndex].text;
            console.log(department_id);

            $.ajax({
                  type: "post",
                  url: "<?php echo base_url(); ?>tr_report/Tr_report/Get_department",
                  data: {
                        "department_id": department_id,
                  },
                  dataType: "JSON",
                  success: function(data, status) {
                        console.log(data);
                        data.forEach((row, i) => {
                              count++;
                              temp += '<tr align="center">';
                              temp += '<td>' + count + '</td>'; // Count
                              temp += '<td>' + row.Emp_ID + '</td>'; //Employee id
                              temp += '<td>' + row.Empname_engTitle + " " + row
                                    .Empname_eng + " " + row
                                    .Empsurname_eng + '</td>'; // Name Employee
                              temp += '<td>' + row.Position_name + '</td>'; // Position
                              temp += '<td>' + department_name +
                              '</td>'; // Name Department
                              temp += '<td>' + row.Course_code + '</td>'; // Course Code
                              temp += '<td>' + row.Course_name + '</td>'; // Course Name
                              temp += '<td>' + row.Start_date + '</td>'; // Start date
                              temp += '<td>' + row.End_date + '</td>'; // End date

                              
                              temp += '<tr>';
                        }); // forEach
                        // $('.dashboard tbody').html(temp);
                        $("#show_data").html(temp);
                        // console.log(status)
                        // console.log(data)
                        $.ajax({
                              type: "post",
                              url: "<?php echo base_url(); ?>tr_report/Tr_report/Get_Section",
                              data: {
                                    "department_id": department_id

                              },
                              dataType: "JSON",
                              success: function(data1, status) {
                                    temp = '';
                                    temp +=
                                          '<option value="0"> Select Section </option>';

                                    $.each(data1, function(index, value) {
                                          temp += '<option value="' +
                                                value.Section_id +
                                                '">' + value.Section +
                                                '</option>';


                                    });
                                    $("#select_section").html(temp);










                              } //success
                        });

                  } //success
            });
      }



      function select_section(Section_id) {
            var Department_id = document.getElementById("select_department").value;
            var temp = "";
            var count = 0;
            var e_department;
            var department_name;
            e_department = document.getElementById("select_department");
            department_name = e_department.options[e_department.selectedIndex].text;

            $.ajax({
                  type: "post",
                  url: "<?php echo base_url(); ?>tr_report/Tr_report/Get_section_by_departmentID",
                  data: {
                        "Department_id": Department_id,
                        "Section_id": Section_id

                  },
                  dataType: "JSON",
                  success: function(data, status) {
                        console.log(data)
                        data.forEach((row, i) => {
                              count++;
                              temp += '<tr align="center">';
                              temp += '<td>' + count + '</td>'; // Count
                              temp += '<td>' + row.Emp_ID + '</td>'; //Employee id
                              temp += '<td>' + row.Empname_engTitle + " " + row
                                    .Empname_eng + " " + row
                                    .Empsurname_eng + '</td>'; // Name Employee
                              temp += '<td>' + row.Position_name + '</td>'; // Position
                              temp += '<td>' + department_name +
                              '</td>'; // Name Department
                              temp += '<td>' + row.Course_code + '</td>'; // Course Code
                              temp += '<td>' + row.Course_name + '</td>'; // Course Name
                              temp += '<td>' + row.Start_date + '</td>'; // Start date
                              temp += '<td>' + row.End_date + '</td>'; // End date

                              temp += '<tr>';
                        }); // forEach
                        // $('.dashboard tbody').html(temp);
                        $("#show_data").html(temp);
                        // console.log(status)
                        // console.log(data)
                        $.ajax({
                              type: "post",
                              url: "<?php echo base_url(); ?>tr_report/Tr_report/Get_Group",
                              data: {
                                    "Section_id": Section_id

                              },
                              dataType: "JSON",
                              success: function(data1,
                                    status) {
                                    console.log(data1);
                                    temp = '';
                                    temp +=
                                          '<option value = "0">Select Group</option>';

                                    $.each(data1,
                                          function(
                                                index,
                                                value
                                          ) {
                                                temp +=
                                                      '<option value="' +
                                                      value
                                                      .Group_id +
                                                      '">' +
                                                      value
                                                      .Group +
                                                      '</option>';


                                          });
                                    $("#select_group")
                                          .html(temp);

                              } //success
                        });

                  } //success
            });
      }


      function select_group(Group_id) {
            var Department_id = document.getElementById("select_department").value;
            var Section_id = document.getElementById("select_section").value;
            var temp = "";
            var count = 0;
            var e_department;
            var department_name;
            e_department = document.getElementById("select_department");
            department_name = e_department.options[e_department.selectedIndex].text;

            $.ajax({
                  type: "post",
                  url: "<?php echo base_url(); ?>tr_report/Tr_report/Get_group_by_departmentID",
                  data: {
                        "Department_id": Department_id,
                        "Section_id": Section_id,
                        "Group_id": Group_id

                  },
                  dataType: "JSON",
                  success: function(data, status) {
                        console.log(data)
                        data.forEach((row, i) => {
                              count++;
                              temp += '<tr align="center">';
                              temp += '<td>' + count + '</td>'; // Count
                              temp += '<td>' + row.Emp_ID + '</td>'; //Employee id
                              temp += '<td>' + row.Empname_engTitle + " " + row
                                    .Empname_eng + " " + row
                                    .Empsurname_eng + '</td>'; // Name Employee
                              temp += '<td>' + row.Position_name + '</td>'; // Position
                              temp += '<td>' + department_name +
                              '</td>'; // Name Department
                              temp += '<td>' + row.Course_code + '</td>'; // Course Code
                              temp += '<td>' + row.Course_name + '</td>'; // Course Name
                              temp += '<td>' + row.Start_date + '</td>'; // Start date
                              temp += '<td>' + row.End_date + '</td>'; // End date

                              temp += '<tr>';
                        }); // forEach
                        $("#show_data").html(temp);
                        // console.log(status)
                        // console.log(data)


                  } //success
            });
      }

      function exportfile() {
            var sheet_name = "Report_Group";
            var file_name = "Report_Group_Training";

            var wb = {
                  SheetNames: [],
                  Sheets: {}
            };

            var objectMaxLength = [3, 8, 24, 20, 11, 10, 18, 12, 12];

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
                  {
                        width: objectMaxLength[8]
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
                                                      <label for="department">
                                                            Department
                                                      </label>
                                                </div>
                                                <div class="col-md-3">
                                                      <label for="department">
                                                            Section
                                                      </label>
                                                </div>
                                                <div class="col-md-3">
                                                      <label for="department">
                                                            Group
                                                      </label>
                                                </div>
                                          </div>
                                          <div class="row">



                                                <div class="col-md-3">
                                                      <select id="select_department" class="form-control "
                                                            aria-controls="example" onchange="select_depart(value)">
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
                                                      <select id="select_section" class="form-control "
                                                            aria-controls="example" onchange="select_section(value)">
                                                            <option value="0" selected>Select Section</option>

                                                      </select>

                                                </div>



                                                <div class="col-md-3">
                                                      <select id="select_group" class="form-control "
                                                            aria-controls="example" onchange="select_group(value)">
                                                            <option value="0" selected>Select Group</option>

                                                      </select>

                                                </div>
                                                <!--col3-->
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

                                          <table id="Export_Report_data" class="table table-striped table-bordered">
                                                <thead>
                                                <?php if(sizeof($get_dep) != 0){
                                                foreach($get_dep as $row){ ?>
                                                            <th colspan="9">
                                                            <?php echo $row->Department; ?>
                                                            </th>
                                                            </tr>
                                                            <tr>
                                                            <th colspan="9">
                                                                  <?php echo "Training record report for Group"; ?>
                                                            </th>
                                                            </tr>
                                                            <?php } 
                                                      }  ?>
                                                      <tr align="center">
                                                            <th>No.</th>
                                                            <th>Emp.</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Department</th>
                                                            <th>Course Code</th>
                                                            <th>Training</th>
                                                            <th>Start-time</th>
                                                            <th>End-time</th>

                                                      </tr>
                                                </thead>
                                                <tbody id="show_data">

                                                </tbody>
                                          </table>
                                    </div>
                                    <br>
                                    <div class="row">
                                          <div class="col-md-10">
                                                <a href="<?php echo base_url()?>tr_report/TR_report/Report">
                                                      <button type="button" class="btn btn-secondary">Back</button>
                                                </a>
                                          </div>
                                          <div class="col-md-2">
                                                <img class="rounded-circle"
                                                      src="<?php echo base_url();?>elaadmin/images/Excel.png"
                                                      alt="Excel" width="55">
                                                <button type="button" class="btn btn-primary" onclick="exportfile()">Dowload Excel</button>
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