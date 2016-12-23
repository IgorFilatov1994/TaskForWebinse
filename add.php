<?php 

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "root";
  $pass = "";

  $databaseName = "webinse_task";
  $tableName = "test_table";

  $fname = $_POST['fname'];
  $sname = $_POST['sname'];
  $email = $_POST['email'];
  
  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  //include 'DB.php';
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);
  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  //include 'DB.php';
  $con = mysql_connect($host,$user,$pass);
  $dbs = mysql_select_db($databaseName, $con);
	echo $link;
  //--------------------------------------------------------------------------
  // 2) Query database for data
  
  //--------------------------------------------------------------------------
  $result = mysql_query("INSERT INTO $tableName (First_name, Second_name, E_mail) VALUES ('$fname', '$sname', '$email')");          //query
  
  $result = mysql_insert_id();
  echo $result;
?>