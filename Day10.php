<?php
class Day10{
    public static function FindNumsAppearOnce($array){
         $len = count($array);
         $arr= [];
         for($i=1;$i<=$len;$i++){
           if($i%2 == 0){
           $arr[] =  $i;
           }
         }
         return $arr;
    }
}
$num = Day10::FindNumsAppearOnce([2,4,3,6,3,2,5,5]);
var_dump($num);