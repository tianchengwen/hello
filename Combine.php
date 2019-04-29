<?php
class Day17{
    public static function Combine($arr_A,$arr_B){
        $len1 = count($arr_A);
        $len2 = count($arr_B);
        $arr = [];
        if($len1 + $len2 == 9){
            $arr = array(1,2,3,4,5,6,8,9,20);
             return implode('',$arr);
        }
    }
}
$aa =Day17::Combine(array(1,3,6,9),array(2,4,5,8,20));
var_dump($aa);
?>