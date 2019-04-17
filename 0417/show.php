<?php
class Person{
  public static function calFn($n,$m){
     $number = 0;
     for($i=$n;$i<=$m;$i++){
        $number +=Number($i);
     }
     return $number;
  }
  public function Number($m){
    $number = 0;
    while ($m) {
        if($m%10 == 1){
            $number++;
        }else{
            $m /=10;
        }
    }
    return $number;
    // var_dump($number);die;
  }
}
$aa = Person::calFn(1,13);
var_dump($aa);
?>