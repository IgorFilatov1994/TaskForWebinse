<?php 

  //--------------------------------------------------------------------------
  // Example php script for fetching data from mysql database
  //--------------------------------------------------------------------------
  $host = "localhost";
  $user = "root";
  $pass = "";

  $databaseName = "webinse_task";
  $tableName = "test_table";

  $id = $_POST['id'];
  
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
  $result = mysql_query("DELETE FROM $tableName WHERE id_test_table='$id'");          //query
  
  echo $result;
?>