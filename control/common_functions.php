<?php

function gen_random_strings() 
{ 
  $length_of_string=10;
    // String of all alphanumeric character 
    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'; 
  
    // Shufle the $str_result and returns substring 
    // of specified length 
	$pas1=substr(str_shuffle($str_result),0, $length_of_string);
	$pas2=substr(str_shuffle($str_result),0, $length_of_string);
	$pas3=substr(str_shuffle($str_result),0, $length_of_string);
	$pas4=substr(str_shuffle($str_result),0, $length_of_string);
	$pas5=substr(str_shuffle($str_result),0, $length_of_string);
    return $pas1."-".$pas2."-".$pas3."-".$pas4."-".$pas5;
}
  

?>