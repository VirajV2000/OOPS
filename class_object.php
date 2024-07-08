<?php
class Player {
    public $name;
    public $speed = 5;
    public $running = false;

    function __construct($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

    function run() {
        $this->running = true;
    }

    function stopRunning() {
        $this->running = false;
    }

    function getStatus() {
        $status = $this->running ? "running" : "not running";
        return "{$this->name} is {$status} with a speed of {$this->speed}.";
    }
}

echo "Let's understand classes and objects<br>";

$player1 = new Player("Viraj");
echo $player1->getName() . "<br>";
echo $player1->speed . "<br>";

$player2 = new Player("Raj");
echo $player2->getName() . "<br>";
echo $player2->speed . "<br>";

$player1->run();
echo $player1->getStatus() . "<br>";

$player2->stopRunning();
echo $player2->getStatus() . "<br>";
?>
