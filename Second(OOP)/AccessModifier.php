<?php
    class Animal{
        public $name;
        private $age;
        protected $color;
    }

    $Tiger = new Animal();
    echo $Tiger->name = "Bengali Tiger";//Must be OK
    echo "<br>";
    echo $Tiger->age = 12;//Must be Error
    echo "<br>";
    echo $Tiger->color = "Red with Black Stripes";//Must be Error
?>