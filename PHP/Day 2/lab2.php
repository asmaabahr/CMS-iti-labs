<?php
#task1 Make \n work in browser.
echo nl2br("Lorem ipsum dolor sit amet consectetur adipisicing elit.\n Voluptates tenetur accusamus eligendi magnam natus aperiam sed.\n \n");

#task2 Display $_SERVER in readable format.
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

#task3 Three functions from String or Arrays built in.
$name = "asmaa";
echo ucfirst($name); //function for make first letter in uppercase formate
echo "<br>";

echo str_shuffle("Today is Sunday"); //randomly shuffle characters of string
echo "<br>";

$arr = array(1,2,3,4);
array_push($arr,100);//adding element to last index of array 
print_r($arr);
echo "<br>";
echo "<br>";

#task4 get the sum and avg of an indexed array after that sort it in a reverse order
$numbers = array(12,45,10,25);
echo "sum of array elements = ". array_sum($numbers);
echo "<br>";

echo "Avg of array elements = ". array_sum($numbers)/count($numbers);
echo "<br>";

rsort($numbers);
echo "Array elements from highest to lowest: ";
print_r($numbers);
echo "<br>";

#task5 PHP script to sort the following associative array

$grads = array("Sara" => 31, "John" => 41, "Walaa" => 39,"Ramy" => 40);

asort($grads);//ascending order sort by value
print_r($grads);
echo "<br>";

ksort($grads);//ascending order sort by Key
print_r($grads);
echo "<br>";

arsort($grads);//descending order sorting by Value
print_r($grads);
echo "<br>";
krsort($grads);//descending order sorting by Key  
print_r($grads);
echo "<br>";
