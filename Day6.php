<?php
class Day6{
    public static function calFn($m){
        $number =0;
        var_dump($m);exit;
        $arr[] = explode(' ', $m);
        print_r($arr);exit;
       $aa= array_count_values($arr);
       return $aa;
       

    }
}
$num = Day6::calFn(6);
var_dump($num);