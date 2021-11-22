<?php
    trait animalDescription{
        function printAnimals(){
            $animals = array("Tiger", "Wolf", "Bear", "Dog");
            foreach($animals as $animal){
                echo "<ul><li>{$animal}</li></ul>";
                // echo "<br>";
            }
        }
    }

    trait birdDescription{
        function printBirds(){
            $birds = array("Spiny Babler", "Humming birds", "Penguins", "Crane");
            foreach($birds as $bird){
                echo "<ul><li>{$bird}</li></ul>";
                // echo "<br>";
            }
        }
    }

    class ChitwanNationalPark{
        use animalDescription, birdDescription;
    }

    $chitwanNationalPark = new ChitwanNationalPark();
    $chitwanNationalPark->printAnimals();
    $chitwanNationalPark->printBirds();
?>