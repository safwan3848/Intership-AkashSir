
<?php
$connection = mysqli_connect("localhost", "root", "", "day7");
if ($_POST) {
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobile = $_POST['txt3'];
    $q = mysqli_query($connection, "insert into tbl_task(u_name,u_gender,u_mobile) value('{$name}','{$gender}','{$mobile}')")
            or die(mysqli_error($connection));
    if ($q) {
        echo "<script>alert('Record Added')</script>";
    }
}
?>
<html>
    <body>
        <form method="post">
            Name: <input type="text" name="txt1">
            <br>
            Gender:<select name="txt2">
                <option>
                    Male
                </option>
                <option>
                    Female
                </option>
            </select>
            <br>
            Mobile No:<input type="number" name="txt3">
            <br>
            <input type="submit">
            <br>
        </form>
    </body>
</html>


<a href='tableT.php'>Display Record</a>


