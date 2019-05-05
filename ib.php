<?php
class Day19{
   public static function ib($num){
    $number = 0;
     for($i = 0;$i<=6;$i++){
        $number++;
     }
     return $number;
   }
}
$aa = Day19::ib(20);
var_dump($aa);
?>