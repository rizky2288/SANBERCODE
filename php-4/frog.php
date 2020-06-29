<?php
// require("animal.php");
class Frog extends Animal{
    public $name;
    public $legs = 4;
    public $cold_blooded = "false";
  
  function __construct($name) {
      $this->name = $name;
  }

  function jump(){
      echo "hop hop <br>";
  }
    
  function setName($name){
      $this->name = $name;
  }
  
  function getName(){
      return $this->$name;
  }
  
  function setLegs($legs){
      $this->legs = $legs;
  }
  
  function getLegs(){
      return $this->$legs;
  }
  
  function setColdBlooded($cold_blooded){
      $this->cold_blooded = $cold_blooded;
  }
  
  function getColdBlooded(){
      return $this->$cold_blooded;
  }
  }
?>