<?php

$conn= mysqli_connect("localhost","root","","ytform");
error_reporting(0);

if(isset($_REQUEST['submit']))
{
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$father=$_REQUEST['father'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$dob=$_REQUEST['dob'];
$gender=$_REQUEST['gender'];
$img=$_FILES['img']['name'];
$location="image/".$img;
copy($_FILES['img']['tmp_name'],$location);
$message=$_REQUEST['message'];
$query="insert into form(`fname`,`lname`,`father`,`phone`,`email`,`dob`,`gender`,`img`,`message`) 
values('$fname','$lname','$father','$phone','$email','$dob','$gender','$img','$message')";
$result=mysqli_query($conn,$query);

if($result)
{
    echo "Form Submitted Successfully";
}

else{
    echo "Error";
}

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Simple Form | Safwan</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 

<style>
a{
    color:white;
}
a:hover{
    color: rgb(67, 155, 255);
    transition: all .4s ease;
}
</style>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data" class="mt-5">

<table border="1" border-color="blue" bgcolor="ghostwhite" align="center" cellpadding="10" style="box-shadow: 0px 0 25px 0 rgba(1,0,0,0.2);">
    <tr>
        <td>First Name:</td>
        <td><input type="text" name="fname" required></td>
    </tr>

    <tr>
        <td>Last Name:</td>
        <td><input type="text" name="lname" ></td>
    </tr>

    <tr>
        <td>Father's Name:</td>
        <td><input type="text" name="father" ></td>
    </tr>

    <tr>
        <td>Phone No:</td>
        <td><input type="text" name="phone" required></td>
    </tr>

    <tr>
        <td>Email:</td>
        <td><input type="email" name="email" required></td>
    </tr>

    <tr>
        <td>D.O.B</td>
        <td><input type="date" name="dob" ></td>
    </tr>

    <tr>
        <td>Gender:</td>
        <td><input type="radio" name="gender" value="male" checked>Male &nbsp; &nbsp; 
    <input type="radio" name="gender" value="female" >Female
       </td>
    </tr>

    <tr>
        <td>Choose Image:</td>
        <td><input type="file" name="img" ></td>
    </tr>

    <tr>
        <td>Message:</td>
        <td><textarea name="message"></textarea></td>
    </tr>

    <tr>
        <td><input type="submit" value="Submit" name="submit" class="btn btn-primary btn-sm"></td>
        <td><input type="reset" value="Reset" name="reset"  class="btn btn-danger btn-sm text-white"></td>
    </tr>
    
    
</table>
</form>

<h4 class="text-center bg-warning text-white mt-5 p-3">Made By &hearts; <a href="https://github.com/safwan3848/Intership-AkashSir">Safwan Shaikh </a></h4>

</body>
</html>