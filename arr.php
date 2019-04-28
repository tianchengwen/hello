<?php
class Day16{
   public static function Find($array,$target){
      $arr=[];
      $len = count($array);
      while ($len) {
         if($target == 5){
            return $target;
         }
      }
   }
}
$aa = Day16::Find(array(1,2,3,4,5),5);
var_dump($aa);
?>