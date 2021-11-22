<?php
    abstract class Internee{
        public $name;
        public $age;

        function __construct($name,$age)
        {
            $this->name = $name;
            $this->age = $age;
        }

        abstract function qualification(): String;
    }

    class Durgesh extends Internee{
        function qualification(): string
        {
            return "The qualification of {$this->name} is BSc.(Hons.) Computer Science";
        }

        function age(){
            echo "The age of {$this->name} is {$this->age}";
        }
    }

    class Sagar extends Internee{
        function qualification(): string
        {
            return "The qualification of {$this->name} is BSc. Hons. Computer Science";
        }

        function age(){
            echo "The age of {$this->name} is {$this->age}";
        }
    }

    $durgesh = new Durgesh("Durgesh Gupta", 22);
    $sagar = new Sagar("Sagar Kunwar", 22);
    echo $durgesh->qualification();
    echo "<br>";
    echo $sagar->qualification();
    echo "<br>";
    $durgesh->age();
    echo "<br>";
    $sagar->age();
?>