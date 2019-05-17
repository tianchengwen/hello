<?php
class Day7{
    public static function GetUglyNumber_Solution($num){
        while ($num%2) {
            if($num/2 == 1){
            return 丑数;
            }
        }
        while ($num%3) {
            if($num/3 ==1){
            return 丑数;
            }
        }
        while ($num%5) {
            if($num/5 == 1){
            return 丑数;
            }
        }
        
    }
}
$num = Day7::GetUglyNumber_Solution(5);
var_dump($num);