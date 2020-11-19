<?php 

$active = 'completed_task';
include("includes/header.php"); 
?>
<!-- Content Header Begin -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           <h1 style="margin-bottom: 30px;">
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Completed Task</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- content-header End -->

     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>                               
                    <th>Task</th>
                    <th>Task Description</th>
                    <th>Date</th> 
                    <th>Status</th>         
                </tr>
                </thead>
                <tbody>
                  <?php

                    $sql = "SELECT * FROM new_task WHERE task_status = 'Done'";
                    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));


                    if(mysqli_num_rows($query))
                    {
                        while($row = mysqli_fetch_array($query))
                        {
                  
                  ?>
                    <tr>
                      <td><?php echo $row['task_name']; ?></td>
                      <td><?php echo $row['task_desc']; ?></td>
                      <td><?php echo $row['task_date']; ?></td>              
                      <td>
                        <?php
                              if($row['task_status'] == 'Done')
                              {
                                echo "<span class='badge bg-red'>Done</span>";
                              }
                        ?>
                    </tr> 
                  <?php } } ?>
                </tbody>
                <tfoot>
                <tr>                             
                    <th>Task</th>
                    <th>Task Description</th>
                    <th>Date</th> 
                    <th>Status</th>         
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
    

<?php include("includes/footer.php"); ?>
<?php include("includes/footer_links.php"); ?>