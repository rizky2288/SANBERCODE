<?php
class Animal{
    public $name;
    public $legs = 2;
    public $cold_blooded = "false";
  
  function __construct($name) {
      $this->name = $name;
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