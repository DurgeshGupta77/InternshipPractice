<?php
    class PI{
        public static $value = "3.19";
        
        // function __construct()
        // {
        //     echo "<br>";
        //     echo self::$value;
        // }

        function toPrint(){
            echo self::$value;
        }
    }

    class PrintValue extends PI{
        function toPrint(){
            return PI::$value;
        }
    }

    $pi = new PI();
    $pi->toPrint();

    $printValue = new PrintValue();
    echo "<br>";
    echo $printValue-> toPrint();
?>