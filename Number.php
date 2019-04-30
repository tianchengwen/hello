<?php
class Day18{
    public static function NumberOf1($n){
        $number = 0;
        while ($n) {
            if($n%2){
                $number++;
            }else{
                $n/2;
            }
            return $number;
        }
    }
}
$aa = Day18::NumberOf1(9);
var_dump($aa);
?>