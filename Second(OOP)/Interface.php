<?php
    interface Animal{
        public function makesound();
    }

    class Cat implements Animal{
        public function makesound(){
            echo "meow";
            echo "<br>";
        }
    }

    class Dog implements Animal{
        public function makesound()
        {
            echo "Bow Bow";
        }
    }

    $cat = new Cat();
    $dog = new Dog();

    $animals = array($cat,$dog);

    foreach($animals as $animal){
        $animal->makesound();
    }

?>