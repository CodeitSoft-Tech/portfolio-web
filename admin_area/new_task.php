<?php 

$active = 'new_task';
include("includes/header.php"); 

?>

<!-- Content Header Begin -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1 style="margin-bottom: 30px;">
          <a class="btn btn-lg btn-primary" href="#add" data-target="#addNewTaskModal" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="glyphicon glyphicon-plus text-white"></i> Add New Task</a>
          </h1>
          </div>
          <!-- Breadcrumb -->
          <div class="col-sm-6">   
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Task</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- content-header End -->


    <!-- Content Begin -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>                
                    <th>Task</th>
                    <th>Task Description</th>
                    <th>Date</th> 
                    <th>Status</th>         
                    <th>Action</th>  
                  </tr>
                  </thead>
                  <tbody>

                    <?php

                    $sql = "SELECT * FROM new_task";
                    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));


                    if(mysqli_num_rows($query))
                    {
                        while($row = mysqli_fetch_array($query))
                        {

                  ?>
                    <!-- Data Call from Database -->
                    <tr>
                      <td><?php echo $row['new_task_id']; ?></td>
                      <td><?php echo $row['task_name']; ?></td>
                      <td><?php echo $row['task_desc']; ?></td>
                      <td><?php echo $row['task_date']; ?></td>
                      <td>
                        <?php
                              if($row['task_status'] == 'Not Done')
                              {
                                echo "<span class='badge bg-green'>Not Done</span>";
                              }

                              else
                              {
                                 echo "<span class='badge bg-red'>Done</span>";
                              }


                        ?>
                      </td>
                     
                       <td>
                        <!-- Update & Delete Modal Call -->
                        <a href="#update<?php echo $row['new_task_id'];?>" data-target="#update<?php echo $row['new_task_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="fa fa-edit text-blue"></i></a>

                        <a href="#delete<?php echo $row['new_task_id'];?>" data-target="#delete<?php echo $row['new_task_id'];?>" data-toggle="modal" style="color:#fff;" class="small-box-footer"><i class="fa fa-trash text-red"></i></a>
                         
                      </td>
                    </tr>


      <!-- Update Modal -->      
      <div id="update<?php echo $row['new_task_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Update Task Details</h4>
              </div>
              <div class="modal-body">

            <form class="form-horizontal" method="post" action="newtask_update.php" enctype='multipart/form-data'>
                    
            <div class="form-group">
              <label class="control-label col-lg-3">Task</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="new_task_id" value="<?php echo $row['new_task_id'];?>" required>  
                <input type="text" class="form-control" name="task_name" value="<?php echo $row['task_name'];?>" required>  
              </div>
            </div> 

            <div class="form-group">
              <label class="control-label col-lg-3">Task Description</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="new_task_id" value="<?php echo $row['new_task_id'];?>" required>  
              <input type="text" class="form-control" name="task_desc" value="<?php echo $row['task_desc'];?>" required>  
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-lg-3">Date</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="new_task_id" value="<?php echo $row['new_task_id'];?>" required>  
              <input type="date" class="form-control" name="task_date" value="<?php echo $row['task_date'];?>" required>  
              </div>
            </div>

             <div class="form-group">
              <label class="control-label col-lg-3">Time</label>
              <div class="col-lg-9"><input type="hidden" class="form-control" name="new_task_id" value="<?php echo $row['new_task_id'];?>" required>  
              <input type="time" class="form-control" name="task_time" value="<?php echo $row['task_time'];?>" required>  
              </div>
            </div>

                  
            <div class='form-group'>
              <label class='control-label col-lg-3'>Status</label>
              <div class='col-lg-9'>
                <select class='form-control' name='task_status' style='width: 100%;' required>
                 <option value='Not Done'>Not Done</option>
                 <option value='Done'>Done</option>
              </select>
              </div>
            </div>  
             

                  </div><br><br><br>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update Task</button>
                  </div>
                 </form>
                  </div>
              </div>
           </div>
           <!-- Update Modal End -->

            <!-- Delete  Modal -->
          <div id="delete<?php echo $row['new_task_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
              <div class="modal-content" style="height:auto">
              <div class="modal-header">
                <h4 class="modal-title">Delete Task</h4>
              </div>
              <div class="modal-body">
              <form class="form-horizontal" method="post" action="newtask_del.php">
             
                  <input type="hidden" class="form-control" name="new_task_id" value="<?php echo $row['new_task_id'];?>" required> 
                      
                    <p>Are you sure you want to remove <?php echo $row['task_name']."?"; ?></p>
              
                    </div><br>
                    <div class="modal-footer">
                     
                      <a href="delete<?php echo $row['new_task_id'];?>" style="color: #ffffff;">
                         <button type="submit" name="delete" class="btn btn-primary">
                          Yes </button></a>
                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                    </div>
              </form>
            </div>
        </div>
      </div>             
    <!-- Delete Modal End -->       
      
                  <?php } } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>No.</th>                
                    <th>Task</th>
                    <th>Task Description</th>
                    <th>Date</th> 
                    <th>Status</th>         
                    <th>Action</th> 
                  </tr>
                  </tfoot>
                </table>    
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content End -->

<?php include("includes/footer.php"); ?>


    <!-- Add Modal -->       
    <div class="modal fade" tabindex="-1" role="dialog" id="addNewTaskModal">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><i class="fa fa-plus"></i> Add New Task</h4>
      </div>
      <div class="modal-body"> 
      
      <form class="form-horizontal" role="form" action="newtask_add.php" method="POST">
      
      <div class="form-group">
        <label class="control-label col-sm-3">Task</label>
         <div class="col-sm-9">
          <input type="text" name="task_name" placeholder="Task name" class="form-control" autocomplete="off" required>
        </div>
      </div>

       <div class="form-group">
        <label class="control-label">Task Description</label>
         <div class="col-sm-9">
         <textarea name="task_desc" class="form-control" required>    
         </textarea>
      </div>

       <div class="form-group">
        <label class="control-label col-sm-3">Date</label>
         <div class="col-sm-9">
          <input type="date" name="task_date" class="form-control" autocomplete="off" required>
        </div>
      </div>

      <div class="form-group">
         <div class="col-sm-9">
             <label class="control-label col-sm-3">Time</label>
          <input type="time" name="task_time" class="form-control" autocomplete="off">
        </div>
      </div>

         <div class='form-group'>
              <label class='control-label col-sm-3'>Status</label>
              <div class='col-sm-9'>
                <select class='form-control' name='task_status' style='width: 100%;' required oninput="SetCustomValidation()" oninvalid="SetCustomValidation('Select task status')" >
                  <option disabled selected>Select task status</option>
                 <option value='Not Done'>Not Done</option>
                 <option value='Done'>Done</option>
              </select>
              </div>
            </div>  

  
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary" name="submit">Add New Task</button>
    </div>
    </form>
    </div>
    </div>
   </div>
<?php include("includes/footer_links.php"); ?>