<?php
class Day12{
    public static function Sum_Solution($n){
        $sum = $n;
        $sum&&($sum+=($n-1));
         
          return $sum;
    }
}
$aa = Day12::Sum_Solution(5);
var_dump($aa);
?>