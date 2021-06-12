<?php

//DB Connection
$connection = mysqli_connect("localhost", "root", "", "day7");
//Query
$q = mysqli_query($connection, "select * from tbl_task") or die(mysqli_error($connection));
//below function will fetch data as Numerical Array
$row = mysqli_fetch_row($q);
//Debug
print_r($row);
echo $row[0] . $row[1] . $row[2] . $row[3];
//Numerical and Associative
$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);
echo $row[0] . $row[1] . $row[2] . $row[3];
echo $row['u_id'] . $row['u_name'] . $row['u_gender'] . $row['u_mobile'];
?>