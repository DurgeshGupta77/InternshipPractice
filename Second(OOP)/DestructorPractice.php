<?php
    class Fruita{
        public $name;
        public $color;

        function __construct($name){
            $this->name = $name;
        }

        function __destruct()
        {
            echo $this->name;
        }
    }

    $apple = new Fruita('Strawberry');    
?>