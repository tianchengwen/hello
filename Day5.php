<?php
class Day5{
   public static function obk($array){
   $jishu = array();
   $owshu = array();
   foreach ($array as $key => $v) {
      if($v % 2 == 1) 
        {
           array_push($jishu,$v);
        }
      else{
        array_push($owshu,$v);
      }  
   }
   $ww = array_merge($jishu,$owshu);
      return $ww;
 }
}
$aa = Day5::obk([1,2,3,4,5,6]);
echo '<pre/>';
print_r($aa);