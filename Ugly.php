<?php
class Person{
    public static function number($m){
        while ($m%2==0) {
            $m/=2;
            echo $m;
        }
         while ($m%3==0) {
            $m/=3;
            echo $m;
        }
         while ($m%5==0) {
            $m/=5;
            echo $m;
        }
        if($m == 1){
            echo '丑数';
        }else{
            echo "不是丑数";

        } 
   } 
}
Person::number(65);

?>