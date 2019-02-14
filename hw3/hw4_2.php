<?php
require_once("hw4_1.php");

$david = new Person("John","Doe");
$david->set_height(66);
$david->set_weight(180);
echo "<p>Hello " . $david->get_first_name() ." " . 
$david->get_last_name() . "... your bmi is " . $david ->calculate_bmi();

?>