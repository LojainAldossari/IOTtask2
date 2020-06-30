<?php 

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "remote_control";
	$connect = mysqli_connect($hostname, $username, $password, $databaseName);
	
    $sql = mysqli_query($connect, "SELECT * FROM directions ORDER BY id DESC limit 1") ; 
	
	$print_data= mysqli_fetch_row ($sql);
	
	echo $print_data[1];
	echo $print_data[2];
	echo $print_data[3];
	echo $print_data[4];
	echo $print_data[5];
	
 ?>

