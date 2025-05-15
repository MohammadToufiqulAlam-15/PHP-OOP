<?php 

class car{

 //Constructor
 //Execute automatically
 //can't return 
 
    public function __construct($a,$b,$c){
        $num1=50;
        $num2=50;
        echo $num1 + $num2+ $a+$b+$c;
    }

}

$obj=new car(10,20,30);

?>