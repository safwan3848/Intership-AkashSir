

<!--/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//-->
<!--//count ()
//
//array_count_values
//
//array_sum
//
//array_product
//
//array_reverse
//
//in_array
//
//array_rand
//
//array_unique
//
//array_merge
//
//array_search
//
//range ()
//
//sort ()
//
//rsort
//
//asort
//
//ksort () (Key
//
//krsort ( )
//
//shuffle ( )
//
//array_key_exists (
//
//array_change_key_case
//
//array_combine
//
//end ()
//
//compact()
//
//array_flip
//
//array_diff
//
//array_intersect
//
//array_values
//
//array_push
//
//array_pop
//
//explode()
//
//implode()
//-->




<!--1.COUNT():The count() array function in PHP will count the number of elements in an
array.-->
<?php
$arr = array('php', 'c','c++',' java','Android');
echo count($arr);
//?><br><br>
               
<!--2.array_count_values
The function will return an associative array with the array values as keys,
and their count is the value. It will only list distinct values as keys, and count
all matches found for particular values in the array.-->
<?php
$arr = array(" php ","c"," php ","android","php","java");
$newarr = array_count_values ($arr);
foreach
($newarr as $key => $value) {
echo "<br/>$key - <strong>$value</strong>";
}
?><br><br>

<!--    3.array_sum
The array_sum () array function in PHP will calculate the sum of all values
within an array.
-->
<?php
$myarray = array(1,2,3,4,5);
echo array_sum ($myarray);
?><br><br>

<!--   4.array_product()
The array_product array function in PHP will find the product of the
target array by multiplying each value as it evaluates the array,
compounding the values.
-->
<?php
$myarray = array(1,2,3,4,5);
echo array_product ($myarray);
//?><br><br>

<!--    5.array_reverse()
The array_reverse array function in PHP will reverse the elements in an
array.-->
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$revarr = array_reverse ($arr);
print_r($revarr);
//?><br><br>


<!--6.in_array()
The in_array array function in PHP is used when we wish to look inside of an array
to see if a certain value exists. This function will return either "true“(1) or "false"
when It runs.-->
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$temp =in_array ('php',$arr);
echo $temp;
//?><br><br>

<!--7.array_rand()
The array_rand array function in PHP will select one or more keys from an
array at random.-->
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand ($arr );//Returns Array Index
echo $arr [$indexofarray];
//?><br><br>

<!--8.Select multiple keys at random-->
<?php
$arr = array('c', 'c++', 'java', 'android', 'php');
$indexofarray = array_rand ($arr,2);//Returns Array Index
foreach
($indexofarray as $key => $value)
{
echo "<br/>$key - <strong>" . $arr [$value] . "</strong>";
}
//?><br><br>


<!--9.array_unique()
The array_unique array function in PHP will remove all duplicate
values from within an array.-->
<?php
$arr = array('c', 'c++','android', 'java', 'android', 'php');
print_r(array_unique($arr));
//?><br><br>


<!--10.array_merge()
The array_merge array function in PHP will merge multiple
arrays.-->
<?php
$arr1 = array('c','c ++','android',' php');
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge ($arr1,$arr2);
print_r($NewArr);
//?><br><br>

<!--11.array_search()
The array_search array function in PHP will search in an array for a specific
value. If found it will return the corresponding key for that value. It is a good
way to check to see if a value exists in an array.-->
<?php
$myarr = array('c', 'c++','android', 'java', 'php');
$check =array_search ('android', $myarr);
echo $check; // retuen index
//?><br><br>


<!--12.range ( )
The range() array function in PHP will create a new array using a specified
range. You can use letter or number ranges.-->
<?php
$arr = range("11", "20");
foreach($arr as $key => $value)
{
echo "<br/> $key - $value";
}
//?><br><br>


<!--13.sort ( )
The sort() array function in PHP will sort an array by its values from lowest to
highest. It will sort letters and numbers in an ascending order.-->
<?php
$arr = array(80,60,50,40,8,74);
sort($arr);
print_r($arr);
?><br><br>

<!--14.rsort()
The rsort array function in PHP will sort an array in reverse or descending order.
This function behaves opposite the sort() function.-->
<?php
$arr = array(80,60,50,40,8,74);
rsort($arr);
print_r ($arr);
?><br><br>

<!--15.asort()
The asort array function in PHP will sort all of the elements in an array in
ascending order according to the values. The indexes will be preserved.-->
<?php
$arr = array(80,60,50,40,8,74);
asort($arr);
print_r($arr);
?> <br><br>
 
<!--16.ksort( ) (Key sort)
The ksort array function in PHP will sort an array in ascending order according to
the keys.--> 
<?php
$arr = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");
ksort($arr);
foreach($arr as $key => $value) {
echo "<br />$key -$value";
}
?>
<br><br>

<!--17.krsort ( ) Key Reverse Sort
The krsort array function in PHP will sort an array in reverse
according to the keys.-->
<?php
$arr = array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");
krsort($arr);
foreach($arr as $key => $value) {
echo "<br />$key - $value";
}
?><br><br>


<!--18.shuffle ( )
The shuffle() array function in PHP will randomly shuffle the
order of the elements in an array.-->
<?php
$myArray = array("Football", "Baseball", "Hockey", "Tennis","Boxing");
shuffle($myArray ); // Shuffle the array
foreach($myArray as $key => $value) {
echo "<br /> $value";
}
?><br><br>

<!--19.array_key_exists()
The array_key_exists array function in PHP will return either "true" or "false"
when it runs.
It takes two parameters to operate. The first parameter is the key that you wish to
find out if it exists, and the second parameter is the target array to search in for
that key or index.-->
<?php
$arr = array("a" => "apple", "b" => "banana");
echo array_key_exists ('a' ,$arr);
?><br><br>

<!--20.array_change_key_case()
The array_change_key_case () function is used to change all keys of a given array to lower
case or upper case.
array_change_key_case input_array , input_case
Either CASE_UPPER or CASE_LOWER.
Default value : CASE_LOWER-->
<?php
$arr =array(
"Banana" => "Yellow",
"Apple" => "Red",
"Mango" => "Green");
$uppercase = array_change_key_case ($arr,CASE_UPPER);
print_r($uppercase);
?><br><br>

<!--21.array_combine
The array_combine () function is used to creates an array by using one
array for keys and another for its values.
array_combine array_keys , array_values-->
<?php
$arr1 = array("Banana" , "Apple" , "Mango");
$arr2 = array("Yellow","Red ", "Green");
$NewVar = array_combine ($arr1, $arr2);
print_r($NewVar);
?><br><br>

<!--Note : Both Array Elements Must be Equal-->

<!--22.end ()
The end() array function in PHP will return the value of the last element in an
array.
-->
<?php
$myarr = array('c', 'c++','android', 'java', 'php');
echo end($myarr);
?><br><br>

<!--23.compact()
Create an array from variables and their values:-->
<?php
$name = " akash";
$subject = " php";
$arr = compact("name", "subject");
print_r($arr);
?><br><br>


<!--24.array_flip
Flip all keys with their associated values in an array:-->
<?php
$arr = array("a" => "akash", "b" => "banana", "c" => "computer");
$fliparray = array_flip ($arr);
print_r($fliparray);
?><br><br>


<!--25.array_diff()
Compare the values of two arrays, and return the differences:-->
<?php
$a=array("akash"," c","c++"," php ","android");
$b=array("akash ","c"," php");
$diff =array_diff ($a, $b);
print_r($diff);
?><br><br>

<!--26.array_intersect()
The array function in PHP will create a new array from comparing arrays
against each other to see if any values match.
It will return an associative array with all of the matches found in the arrays
you compare.-->
<?php
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect ($arr1,$arr2));
?><br><br>


<!--27.array_values()
The array_values array function in PHP will return a new array made
up of the values from a target array.
The resulting array will be a numerically indexed array.-->
<?php
$arr = array ("i"=>"c","want"=>"c++","learn"=>"php");
$myarr = array_values ($arr);
foreach($myarr as $key => $value) {
echo " <br />$key  - $value";
}
?><br><br>

<!--28.array_push()
The array_push () function inserts one or more elements to the end of a
Numerical array.
array_push (array,value1,value2..)-->
<?php
$a=array("c","c++");
array_push($a,"java", "php");
print_r ($a);
?><br><br>


<!--29.array_pop()
The array_pop () function deletes the last element of an
array_pop array-->
<?php
$a = array("c", "c++","c++", "Java", "PHP", "ASP");
array_pop($a ); //Remove
print_r($a);
array_pop($a);//remove
print_r($a);
?><br><br>

<!--30.explode()
Explode function is used to break a string into an array.
String to Array
explode($delimiter, $string);-->
//<?php
//$mystring = "I Love PHP Language";
//$arr = exlode ("",$mystring);
//print_r($arr);
//?>
Array ( [0] => I [1] => Love [2] => PHP [3] => Language )
<br><br>

<!--
31.implode()
Php implode function is used to convert an array into string. It return output as
a string.
Array to String-->
<?php
$arr = array("i ","love"," php ","language");
$mystring = implode (" ", $arr);
echo $mystring;
?><br><br>
