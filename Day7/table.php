<?php
//DB Connection
//DB Connection
$connection = mysqli_connect("localhost","root","","db_intership");
//Query
$q = mysqli_query($connection,"select * from tbl_user") or die(mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>GENDER</th>";
echo "<th>MOBILE</th>";
echo "</tr>";
while ($row = mysqli_fetch_array($q)){
    
    echo "<tr>";
    echo "<td>{$row['user_id']}</td>";
    echo "<td> {$row['user_name']}</td>";
    echo "<td> {$row['user_gender']}</td>";
    echo "<td> {$row['user_mobile']}</td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href='C:\xampp\htdocs\Day7\insert1.php'>Add Record</a>";

