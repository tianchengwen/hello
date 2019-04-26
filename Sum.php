<?php
class Day14{
    public static function FindNumbersWithSum($array,$sum){
     
        $arr=[];
        $len = count($array);
        for($i=0;$i<$len;$i++){
            for($j=0;$j<$len;$j++){
                if($arr[$i]+$arr[$j]=$sum){
                   $arr[] = $arr[$i] * $arr[$j];
                }
            }
            sort($arr);
            return $arr[0];
        }
    }
}
 $aa = Day14::FindNumbersWithSum(array(1,2,3,4,5),5);
 var_dump($aa);
?>