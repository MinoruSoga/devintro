<?php
  class Calculator{

    // public $n1;
    // public $n2;
    // public $calcu;

    public function calculate($n1,$n2, $calcu) // set $calcu as parameter
    {
        switch($calcu)
        {
        case "Addition": // here you have to use colons not semi-colons
            $compute = $n1 + $n2; 
            break;
        case "Subtraction":
            $compute = $n1 - $n2; 
            break;
        case "Multiplication":
            $compute = $n1 * $n2; 
            break;
        case "Division":
            $compute = $n1 / $n2; 
            break;
        }
        return $compute; // returning variable
    }
  }
?>