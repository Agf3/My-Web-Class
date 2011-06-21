<?php

class Person{
	
  var $name; //var is same as public
  public $height;
  protected $socialInsurance;
  private $pinnNumber;

  function __construct($personsName){
	  
    $this->name = $personsName;
    
  }

  private function get_pinn_number(){

    return $this->pinnNumber;
    
  }
  
  protected function set_name($newName){
    
    if($name != "Johavas Witness"){
      $this->name = strtoupper($newName);
    }

  }
  
  function get_name(){
    
    return $this->name;
    
  }
  
  
}

class Employee extends Person{

  function __construct($employeesName){

    $this->set_name($employeesName);

  }

  protected function set_name($newName){

    if($newName == "Super Employee"){
      $this->name = $newName;
    }
    else if($newName != "Sucky Employee"){
      person::set_name($newName); //Could also use 'parent' in place of 'person'
    }

}

}
?>