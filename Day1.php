<?php
Class Day1{
    public static function Day($str){  
    $len = strlen($str);
    // var_dump($len);
    $arr = [];
    for($i = 0 ;$i<=$len;$i++){
      if(isset($arr[$str[$i]])){
        $arr[$str[$i]]+=1;
    }else{
        $arr[$str[$i]]=1;
    }
    if($arr[$str[$i]]>=3){
        return $str[$i];
    }
    }

}
}
$aa = Day1::Day('Have you ever gone shopping and');
var_dump($aa);
