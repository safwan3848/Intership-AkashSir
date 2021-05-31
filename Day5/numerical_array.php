<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//method1 $a[0] = 10 ;
$a[1] = 20 ; 
$a[2] = 20.50;
$a[3] = "C";
$a[4] = "4";
//method 2
$a[] = 10 ;
$a[] = 20 ; 
$a[] = 20.50;
$a[] = "C";
$a[] = "4";
//method 3
//Always use this method to crate am array
$a = array(10,20,30,"C","C++",10.50,"php");
//print array value
echo $a[3];
//primt whole array
for($i=0;$i<= count($a);$i++)
{
    echo "</br>".$a[$i];
}
$num = array_sum($a);
echo $sum;
// 3 inbuilt function to debug an array
echo"<pre>";
print_r($a);
echo "<pre>";
echo"<pre>";
var_dump($a);
        
