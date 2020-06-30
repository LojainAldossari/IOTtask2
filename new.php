<?php

// php code to Insert data into mysql database from input buttons
if(isset($_POST['forward']) or isset($_POST['backward']) or isset($_POST['forward'])
	or isset($_POST['right'])or isset($_POST['left']) or isset($_POST['stop']))

{
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "remote_control";
    
    

    $forward = $_POST['forward'];
    $backward = $_POST['backward'];
	$right = $_POST['right'];
	$left = $_POST['left'];
	$stop = $_POST['stop'];
    
    // connect to mysql database using mysqli

    $connect = mysqli_connect($hostname, $username, $password, $databaseName);
    
    // mysql query to insert data

    $query = "INSERT INTO `directions`(`forward`, `backward`, `right`, `left`, `stop`)
	VALUES ('$forward','$backward','$right', '$left', '$stop')";
    
    $result = mysqli_query($connect,$query);

    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    else{
        echo 'Data Not Inserted';
    }
    
    mysqli_free_result($result);
    header('location: control.php'); 
    mysqli_close($connect);
}

?>

<!DOCTYPE html>
<html>

<head>
<style>
.title{
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
 
  display: flex;
  justify-content: center;
  align-items: center;
  
}
.button {
  border: none;
  color: white;
  padding: 15px 28px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;   
}




.button1 {background-color: #2E8B57;} /* Green */
.button2 {background-color: #2E8B57;
		  padding: 15px 23px; }/* Green */ 
.button3 {background-color: #DC143C;
		  padding: 15px 45px; } /* Red */
		  
</style>
</head>
<body>
  

<h1 class="title">hello</h1>
<h2 class="title">this is first task in IOT</h2>


 
<div class= "center">
<form action="new.php" method="post">
<table>
<tr>
<td></td><td><button class="button button1" name="forward" value="F">Forward</button></td><td></td>
</tr>
<tr>

<td><button class="button button1" name="left" value="L" >Left</button></td>
<td><button class="button button3" name="stop" value="S">Stop</button></td>
<td><button class="button button1" name="right" value="R">Right</button></td>
</tr>
<tr>
<td></td><td><button class="button button2" name="backward" value="B">Backward</button></td><td></td>
</tr>

</form >
</div>
</table>


</body>
</html>
