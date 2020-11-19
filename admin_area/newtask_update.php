<?php

      include("includes/db_conn.php");

           
             $new_task_id      = $_POST['new_task_id'];
             $task_name        = $_POST['task_name'];
             $task_desc        = $_POST['task_desc'];
             $task_date        = $_POST['task_date'];
             $task_time        = $_POST['task_time'];
             $task_status      = $_POST['task_status'];          
            
             

      $update_newtask = "UPDATE new_task SET task_name = '$task_name', task_desc = '$task_desc', task_date = '$task_date', task_time = '$task_time',  task_status = '$task_status' WHERE new_task_id = '$new_task_id'";

      $run_newtask = mysqli_query($conn, $update_newtask);
      

      if($run_newtask)
      {
            echo "<script>alert('Task details updated successfully')</script>";
            echo "<script>document.location='new_task.php'</script>";
      }



?>