<?php

	include("includes/db_conn.php");


	if(isset($_POST['delete']))
	{
		$id = mysqli_real_escape_string($conn, $_POST['new_task_id']);

		$delete_newtask = "DELETE FROM new_task WHERE new_task_id = '$id'";
		$run_newtask = mysqli_query($conn, $delete_newtask);


		if($run_newtask)
		{
			echo "<script>alert('Task deleted successfully')</script>";
		    echo "<script>document.location='new_task.php'</script>";
		}
	}


?>