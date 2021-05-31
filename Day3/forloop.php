<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
echo"<table border='1'>";
for($i=0;$i<1000;$i++){
    echo "<tr>";
    if($i%2==0){
        echo "<td bgcolor='red'>$i</td>";
    }
 else {
    echo "<td bgcolor='yellow'>$i</td>";    
    }
    echo "</tr>";
}
echo "</table>";
