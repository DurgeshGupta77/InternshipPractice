<?php
    abstract class Greet{
        protected abstract function addressPerson($name);
    }

    class Greetings extends Greet{
        public function addressPerson($name, $seperator = ".", $initials = "Dear"){
            if($name == "John Doe"){
                $prefix = "Mr";
            }
            elseif($name == "Aayush Thapa"){
                $prefix = "Mrs";
            }
            else{
                $prefix = "Mr/Mrs";
            }
            return "{$initials} {$prefix}{$seperator} {$name}";
        }
    }

    $greetings = new Greetings();
    echo $greetings->addressPerson("Aayush Thapa");
?>