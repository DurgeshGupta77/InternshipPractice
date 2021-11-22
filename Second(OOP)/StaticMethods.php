<?php
    class Check{
        public static function name(){
            echo "Durgesh the great";
        }

        public function __construct()
        {
            echo "Calling Static Methods from Same Class";
            echo "<br>";
            self::name();
            echo "<br>";
        }
    }

    class NewCheck{
        public function printName(){
            echo "Calling Static Method from New Class";
            echo "<br>";
            Check::name();
        }
    }

    //Testing Protected Static Function
    class DomainName{
        protected static function getDomain(){
            return "durgeshgupta.gov.np";
        }
    }

    class GetTheDomain extends DomainName{
        public $domainName;
        public function __construct()
        {
            $this->domainName = DomainName::getDomain();
        }

        public function displayDomain($name){
            echo "<br>";    
            echo "The Domain Name of {$name} is ". $this->domainName  ." This domain was
            created on ".date("Y/m/d");
        }
    }

    $check = new Check();
    $newCheck = new NewCheck();
    $newCheck->printName();

    //Calling Protected Static Function
    $domain = new GetTheDomain();
    $domain->displayDomain("Durgesh Prasad Gupta");
?>