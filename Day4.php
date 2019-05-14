<?php
class Day4{
    public static function calSteps($n){
        $len = strlen($n);
        var_dump($len);exit;
       for($i=1;$i<=$len;$i++){
          return $i;
       }
    }
}
$num = Day4::calSteps(6);
  var_dump($num);