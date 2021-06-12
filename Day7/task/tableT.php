<?php

//DB Connection
$connection = mysqli_connect("localhost", "root", "", "day7");
//Query
$q = mysqli_query($connection, "select * from tbl_task") or die(mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>GENDER</th>";
echo "<th>MOBILE</th>";
echo "<th>Action</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($q)) {

    echo "<tr>";
    echo "<td>{$row['u_id']}</td>";
    echo "<td> {$row['u_name']}</td>";
    echo "<td> {$row['u_gender']}</td>";
    echo "<td> {$row['u_mobile']}</td>";
    echo "<td><a href='deleteT.php?deleteid={$row['u_id']}'>Delete</td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href='insertT.php'>Add Record </a>";

