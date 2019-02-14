<?php
require_once("hw4_1.php");
class BritishPerson extends Person {
    private $first_name;
    private $last_name;
    private $height;
    private $weight;
    function __construct($first ="john", $last ="doe"){
        $this->first_name = $first;
        $this->last_name = $last;  
    }
function set_height_weight($height, $weight){
    $this->height = $height;
    $this->weight = $weight;
}
function get_full_name(){
    $full_name = $this->first_name . " " . $this->last_name;
    return $full_name;
}
function calculate_bmi(){
    $this->height = $this->height / 2.54;
    $this ->weight = $this->weight * 2.205;
    $bmi_brit = (705 * $this->weight) / ($this->weight * $this->weight);
    return $bmi_brit;

}
    
}
?>