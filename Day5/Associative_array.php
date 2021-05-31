<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//aSSOCIATIVE Array
//key = value
//method 1

$a [0]=10;
$a['c']="computer";
$a['php']="web developer";
$a[10]="Ten";
$a[50]=50.50;
//method 2
//always use this method to crate an array
$a = array(
    0=>10,
"c"=>"computer",
"php"=>"web developer",
    10=>"Ten",
    50=>50.50
);

//print value

echo"C for ".$a['C'];

foreach ($a as $value){
    echo"<br>Value is $value";
}
foreach ($a as $key=>$value){
    echo"<br>Key is <b>$key";
}


