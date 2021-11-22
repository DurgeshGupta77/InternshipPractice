<?php
    class Fru{
        public $name;
        public $color;

        const LEAVING_MESSAGE = "Learning PHP...will switch to Node.js Soon!";
        const INTRO_MESSAGE = "What's you doing?";

        function __construct($name, $color){
            $this->name = $name;
            $this ->color = $color;
        }

        public function getDetails(){
            echo "I have bought {$this->name} fruit and the color is {$this->color}";
        }

        protected function getPrice(){
            echo "{$this->name} of {$this->color} fruit has been called from inside an protected function";
            
            echo "<br>";            
            //Printing Constants using self keyword
            echo self::LEAVING_MESSAGE;
        }

        final public function getAnything(){
            echo "{$this->name} of {$this->color} fruit has been called from inside an final function";
        }
    }

    class Strawberry extends Fru{
        public function message(){
            echo "I am confused. Am I a fruit or a berry!";
            echo "<br>";
            
            //Printing Constants
            echo Fru::INTRO_MESSAGE;

            echo "<br>";

            //Calling Protected Function from inside the derived class.
            $this->getPrice();
        }

        // public function getAnything(){} It gives error bcz of final keyword
    }

    $strawberry = new Strawberry('Strawberry', 'red');
    $strawberry->getDetails();
    echo '<br>';
    $strawberry->message();
?>