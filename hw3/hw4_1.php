<?php

class Person {
    private $first_name;
    private $last_name;
    private $height;
    private $weight;

    function __construct($first_name="Sam",$last_name="Spade"){
        $this->first_name = $first_name;
        $this->last_name = $last_name;

    }
    function get_first_name(){
        return $this->first_name;
    }
    function get_last_name(){
        return $this->last_name;
    }
    function get_height(){
        return $this->height;
    }
    function set_height($height_to_set){
        $this->height = $height_to_set;
    }

    function get_weight(){
        return $this->weight;
    }

    function set_weight($weight_to_set){
        $this->weight = $weight_to_set;
    }

    function calculate_bmi(){
        // $this->height = $height;
        // $this->weight = $weight;
        $bmi =(705 * $this->weight) / ($this->weight * $this->weight);
        return $bmi;

    }
}
?>