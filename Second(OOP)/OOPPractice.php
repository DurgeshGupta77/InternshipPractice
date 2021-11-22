<?php
    class Fruits{
        public $name;
        public $color;

        function set_name($name){
            $this->name = $name;
        }

        function get_name(){
            return $this->name;
        }
    }

    $apple = new Fruits();
    $apple->set_name('Banana');
    echo $apple->get_name();
    echo "<br>";
    var_dump($apple instanceof Fruits);
?>