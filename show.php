<?php
class Person{
  public static function calFn($n,$m){
     $number = 0;
     for($i=$n;$i<=$m;$i++){
        $number +=self::Number($i);
     }
     return $number;
  }
    static function Number($m){
    $number = 0;
    while ($m) {
        if($m%10 == 1){
            $number++;
        }
            $m /=10;
        
    }
    return $number;
    // var_dump($number);die;
  }
}
    

$aa = Person::calFn(1,13);
echo "$aa";
?>