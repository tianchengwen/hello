<?php
class Person{
  public static function LastRemaining_Solution($n,$m){
       if($n<1||$m<1){
        return 1;
       }
       if($m<0){
        return 0;
       }
       $num = (($n-1+$m)+$m)*$n;
       return $num;
  }
}
$vv = Person::LastRemaining_Solution(3,5);
var_dump($vv);

?>