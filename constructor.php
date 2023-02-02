<?php
  echo "Let's understand constructor<br>";
  class Employee
  {
    public $name;
    public $salary;  
    // function __construct()
    // {
    //     echo "the constructor created successfully";
    // }
    function __construct($name,$salary){
         $this->name=$name;
         $this->salary=$salary;
      }

  }
  $viraj=new Employee("viraj",2000);
  $raj=new Employee("raj",30000);
  echo "The salary of ".$viraj->name." is ".$viraj->salary."<br>";
  echo "The salary of ".$raj->name." is ".$raj->salary."<br>";
?>