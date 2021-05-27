<?php 

    $arr2=[
       "nname"=>"zhangsan",
       "age"=>11,
       "email"=>"zhangsan@qq.com"
  
    ];


    $arr3=[
       "p1"=>["zzz","cccc"],
       "p2"=>["aaa","bbbb"],
    ];
     

    echo'<pre>';print_r($arr3);echo "</pre>";
    $v = array_values($arr3);
    echo '<pre>';print_r($v);echo '</pre>';





 ?>