<?php
class Person{
 public  static function ReverseSentence($str){
   return  strrev($str);
 }
}
$student = Person::ReverseSentence('I am a student.');
echo $student;
?>