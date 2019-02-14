<?php
require_once("h4_3.php");
require_once("hw4_1.php");

$darren = new BritishPerson("Darren", "Wogman");
$darren ->set_height_weight(150,80);

echo "<p>Hello " . $darren->get_full_name() . "... your bmi is " . $darren ->calculate_bmi();
?>