<?php
    class Animals{
        public $name;
        public $age;
        public $color;

        function set_name($name){
            $this->name = $name;
        }

        private function set_age($age){
            $this->age = $age;
        }

        protected function set_color($color){
            $this->color = $color;
        }
    }

    $Tiger = new Animals();
    $Tiger->set_name('Bengali Tiger');
    // $Tiger->set_age(15); Shows Error bcz private function can not be accessed
    //outside class scope
    // $Tiger->set_color('red'); Shows Error bcz private function can not be accessed
    //outside class scope and needs to be derived by other class to use
      
?>