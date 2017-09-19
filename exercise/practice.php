<?php

class Calculator {
    public function add($x, $y)
    {
    
        return $x + $y ;

     }

     public function sub($x , $y){

         return $x - $y;
     }

    public function multiply($x , $y)
    {
         return $x * $y;

          }
}

         $myphp = new Calculator();
         echo $myphp->add(25,50). "\n";
         echo $myphp->sub(60,30) ."\n";
         echo $myphp->multiply(8,10)."\n";






