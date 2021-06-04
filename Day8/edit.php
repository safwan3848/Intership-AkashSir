<?php

$connection = mysqli_connect("localhost","root","","db_intership");

if (!isset($_GET['id']) || empty($_GET['id'])){
    header("location:C:\xampp\htdocs\Day7\table.php");
}
$edit_id = $_GET ['id'];
//select data from table
$editq = mysqli_query($connection,"select * from tbl_user where user_id='{$edit_id}'") or die (mysqli_errno($connection));
$editdata = mysqli_fetch_array($editq);
//print_r($editdata);

if($_POST){
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];
    
    $uq = mysqli_query($connection,"update tbl_user set user_name='{$txt1}', user_gender='{$txt2}', user_mobile='{$txt3}' where user_id='{4edit_id}'") or die (mysqli_error($connection));
    
if($up){
    echo "<script>alert('Record Updated');
        window.location='C:\xampp\htdocs\Day7\table.php';</script>";
}    
    
} 
          
?>
<html>
    <body>
        <form>
            name:<input type="text" name="txt1" value="<?php echo $editdata['user_name']; ?>"><br>
            gender:male<input type="radio" <?php if($editdata['user_gender']=="male"){ echo "checked";} ?> value="male" name="txt2">
            female: <input type="radio" value="female" name="txt2" <?php if($editdata['user_gender']=="female"){ echo "checked";} ?>><br>
            mobile: <input type="number" name="txt3" value="<?php echo $editdata['user_mobile']; ?>"><br>
            <input type="submit" >
        </form>
    </body>
</html>