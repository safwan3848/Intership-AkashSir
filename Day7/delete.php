<?php
$connection = mysqli_connect("localhost","root","","db_intership");

$id = $_GET['deleteid'];

$q = mysqli_query($connection,"delete from tbl_user where user_id='{$id}'") or die(mysqli_error($connection));

if($q)
{
    echo "<script>alert ('record deleted');window.location = 'day7.2.php';</script>";
}

?>