<?php

//$_GET $_POST $_REQUEST //CAPITAL
// ['controlname']

$a = $_POST['txt1'];
$b = $_POST['txt2'];


echo "Hi My Name is $a and age is $b";

for($i=1;$i<=$b;$i++)
{
    
    echo " <br>$i Happy Birthday $a";
}
