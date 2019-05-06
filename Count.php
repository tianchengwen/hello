<?php
class Day20{
    public static function CountSteps($x,$y){
        $number = 0;
       for($i =0 ;$i<=$x;$i++){
        for($j=0;$j<=$y;$j++){
           $number++;
        }
       }
       return $number;
    }
}
$count = Day20::CountSteps(1,1);
var_dump($count);
?>