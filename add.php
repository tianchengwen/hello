<?php
class Day13{
    public static function Add($num1,$num2){
        $sum=0;
        $sum=$num1^$num2;
        return $sum;
    }
}
$num = Day13::Add(5,10);
var_dump($num);
?>