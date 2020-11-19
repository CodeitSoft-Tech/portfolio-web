<?php

	include("includes/db_conn.php");

     function showActiveTask()
	{
		global $conn;

		$sql = "SELECT * FROM new_task WHERE task_status ='Not Done'";

		$query = mysqli_query($conn, $sql)or die();

		$count = mysqli_num_rows($query);


		echo $count;

	}


	function showViewedTask()
	{
		global $conn;

		$sql = "SELECT * FROM new_task WHERE task_status ='Done'";

		$query = mysqli_query($conn, $sql)or die();

		$count = mysqli_num_rows($query);


		echo $count;

	}


?>