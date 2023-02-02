<?php
 class Player{
    public $name;
    public $speed=5;
    public $running=false;
    function set_name($name)
    {
        $this->name=$name;
    }
    function get_name()
    {
        return $this->name;
    }
    function run(){
        $this->running=true;
    }
    function stopRun(){
        $this->running=false;
    }
 }
 echo "Let's understand classes and object <br>";
 $player1=new Player();
 $player1->set_name("viraj");
 echo $player1->get_name()."<br>";
 echo $player1->speed;
 echo "<br>";
 $player2=new Player();
 $player2->set_name("raj");
 echo $player2->get_name()."<br>";
 echo $player1->speed;



?>