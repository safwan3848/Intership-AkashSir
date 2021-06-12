
<?php
//DB Connection
$connection = mysqli_connect("localhost", "root", "", "day7");

$id =$_GET['deleteid'];

$q = mysqli_query($connection, "delete from tbl_task where u_id='{$id}'") or die (mysqli_error($connection));

if($q)
{
    echo "<script>alert('Record Deleted');window.location='tableT.php';</script>";
}