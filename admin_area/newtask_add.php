<?php
  

  include("includes/db_conn.php");


             $task_name        = $_POST['task_name'];
             $task_desc        = $_POST['task_desc'];
             $task_date        = $_POST['task_date'];
             $task_time        = $_POST['task_time'];
             $task_status      = $_POST['task_status'];  

      $newtask_in = "INSERT INTO new_task(task_name, task_desc, task_date, task_time, task_status)VALUES('$task_name','$task_desc','$task_date','$task_time', '$task_status')";

      $query = mysqli_query($conn, $newtask_in)or die(mysqli_error($conn));

            if($query)
            {
              echo "<script>alert('New task added succesfully')</script>";
              echo "<script>document.location='new_task.php'</script>";
            }


?>