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
            background-color: #17A2B8;

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
                                    <h1 class="m-0 font-weight-bold text-primary"><i
                                                class="fa  fa-pencil-square text-white" id="Home"></i>
                                          <font color="white">Info Training Data</font>
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
                                                                              id="grouptext" placeholder="Type"
                                                                              disabled>
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; ครั้งที่ :
                                                                  <div class="col-sm-1">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" disabled>
                                                                  </div>


                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Course Code :
                                                                  <div class="col-sm-2">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" placeholder="Code" disabled>
                                                                  </div>



                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Training Name :
                                                                  <div class="col-sm-3">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext"
                                                                              placeholder="Training Name" disabled>
                                                                  </div>

                                                            </div>
                                                            <!-- row 1 -->
                                                            <br>

                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp;Course Category :
                                                                  <div class="col-sm-2">
                                                                        <select name="example_length" disabled
                                                                              class="form-control"
                                                                              aria-controls="example"
                                                                              onChange="select_company(value)">
                                                                              <option value="0">Select</option>
                                                                              <option value="1">General</option>
                                                                              <option value="2">Technical</option>
                                                                              <option value="3">Requirement</option>
                                                                              <option value="4">Instructor</option>
                                                                        </select>
                                                                  </div>
                                                                  <div class="col-sm-2">
                                                                        <select name="example_length" disabled
                                                                              class="form-control"
                                                                              aria-controls="example"
                                                                              onChange="select_company(value)">
                                                                              <option value="0">Select</option>
                                                                              <option value="1">In-house</option>
                                                                              <option value="2">External Training
                                                                              </option>
                                                                              <option value="3">On the job training
                                                                              </option>
                                                                              <option value="4">Seminar</option>
                                                                        </select>
                                                                  </div>
                                                                  <div class="col-sm-2">
                                                                        <select name="example_length" disabled
                                                                              class="form-control"
                                                                              aria-controls="example"
                                                                              onChange="select_company(value)">
                                                                              <option value="0">Select</option>
                                                                              <option value="1">Classroom </option>
                                                                              <option value="2">E-learning</option>
                                                                              <option value="3">Self studyt</option>
                                                                              <option value="4">Both Classroom & On the
                                                                                    job training</option>
                                                                              <option value="5">On the job training
                                                                              </option>
                                                                        </select>
                                                                  </div>


                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Place :
                                                                  <div class="col-sm-3">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" placeholder="Place" disabled>
                                                                  </div>

                                                            </div>
                                                            <!-- row 2 -->
                                                            <br>
                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Start-Date :
                                                                  <div class="col-sm-2">
                                                                        <input type="date" class="form-control"
                                                                              id="grouptext" placeholder="Type" disabled>
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Start-Time :
                                                                  <div class="col-sm-2">
                                                                        <input type="time" class="form-control"
                                                                              id="grouptext" placeholder="Code" disabled>
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; End-Date :
                                                                  <div class="col-sm-2">
                                                                        <input type="date" class="form-control"
                                                                              id="grouptext" disabled>
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; End-Time :
                                                                  <div class="col-sm-2">
                                                                        <input type="time" class="form-control"
                                                                              id="grouptext"
                                                                              placeholder="Training Name" disabled>
                                                                  </div>

                                                            </div>
                                                            <!-- row 3 -->

                                                            <br>
                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Total Hours :
                                                                  <div class="col-sm-1">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" disabled>
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Trainer :
                                                                  <div class="col-sm-2">
                                                                        <select name="example_length" disabled
                                                                              class="form-control"
                                                                              aria-controls="example"
                                                                              onChange="select_company(value)">
                                                                              <option value="0">Select Trainer</option>
                                                                              <option value="1">Mr.Kenji Sleeptogether
                                                                              </option>
                                                                              <option value="2">Mr.Denial Ok
                                                                              </option>
                                                                              <option value="3">Mr.Kate J.son
                                                                              </option>
                                                                              <option value="4">Mr.Tony Roger</option>
                                                                        </select>
                                                                  </div>


                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Cost :
                                                                  <div class="col-2">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" disabled>
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Pre-test :
                                                                  <div class="col-1">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" disabled>
                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Post-test :
                                                                  <div class="col-1">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" disabled> 
                                                                  </div>

                                                            </div>
                                                            <!-- row 4 -->

                                                            <br>
                                                            <div class="row">
                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Certificate
                                                                  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                  <div class="checkbox">



                                                                        <div class="col-md-3">
                                                                              <input type="checkbox" id="checkbox2"
                                                                                    name="checkbox2" value="option2"
                                                                                    class="form-check-input" disabled>
                                                                        </div>

                                                                  </div>

                                                                  &nbsp;&nbsp;&nbsp;&nbsp; Number of people :
                                                                  <div class="col-1">
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" disabled>
                                                                  </div>

                                                            </div>
                                                            <!-- row 5 -->

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
                                                                        placeholder="Search.." aria-label="Search">                                  
                                                         
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
                                                                        <tr align="center">
                                                                              <td>1.</td>
                                                                              <td>TN00035</td>
                                                                              <td>Kanchanaphitcha Meesuk</td>
                                                                              <td>Board of Directors</td>
                                                                              <td>Human Resource</td>
                                                                              <td>6180</td>
                                                                              <td>
                                                                        <input type="text" class="form-control"
                                                                              id="grouptext" value="" disabled>
                                                                  </td>
                                                                              <td> 
                                                                              &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                              <input type="checkbox" id="checkbox2"
                                                                                    name="checkbox2" value="select"
                                                                                    class="form-check-input">

                                                                              </td>
                                                                              <td> 
                                                                              &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                              <input type="checkbox" id="checkbox2"
                                                                                    name="checkbox2" value="option2"
                                                                                    class="form-check-input">

                                                                              </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                        <tr align="center">
                                                                              <td>2.</td>
                                                                              <td>TN00036</td>
                                                                              <td>Lapatrada Puttamongkol</td>
                                                                              <td>Board of Directors</td>
                                                                              <td>Human Resource</td>
                                                                              <td>6180</td>
                                                                              <td>   <input type="text" class="form-control"
                                                                              id="grouptext" disabled></td>
                                                                              <td> 
                                                                              &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                              <input type="checkbox" id="checkbox2"
                                                                                    name="checkbox2" value="option2"
                                                                                    class="form-check-input">

                                                                              </td>
                                                                              <td> 
                                                                              &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                              <input type="checkbox" id="checkbox2"
                                                                                    name="checkbox2" value="option2"
                                                                                    class="form-check-input">

                                                                              </td>
                                                                             
                                                                             
                                                                        </tr>
                                                                        <tr align="center">
                                                                              <td>3.</td>
                                                                              <td>TN00037</td>
                                                                              <td>Jirayu Jaravichit</td>
                                                                              <td>Board of Directors</td>
                                                                              <td>Human Resource</td>
                                                                              <td>6180</td>
                                                                              <td>   <input type="text" class="form-control"
                                                                              id="grouptext" disabled></td>
                                                                              <td> 
                                                                              &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                              <input type="checkbox" id="checkbox2"
                                                                                    name="checkbox2" value="option2"
                                                                                    class="form-check-input">

                                                                              </td>
                                                                              <td> 
                                                                              &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
                                                                              <input type="checkbox" id="checkbox2"
                                                                                    name="checkbox2" value="option2"
                                                                                    class="form-check-input">

                                                                              </td>
                                                                            
                                                                            
                                                                        </tr>
                                                                     

                                                                  </tbody>
                                                            </table>
                                                      </div>
                                                </div>
                                          </div>


                                    </div>
                              </div><!-- .animated 2 -->
                        </div><!-- .content 2 -->

                  </div>

            </div>
            <!-- Start col-lg-12 -->

      </div> <!-- /.container-fluid -->


      <div class="col-md-3">
            <a href="<?php echo base_url() ?>tr_manage_training_record/Manage_training_record/index">
                  <button type="button" class="btn btn-secondary">Back</button>
            </a>
      </div>



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