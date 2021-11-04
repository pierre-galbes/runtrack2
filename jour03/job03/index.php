<?php

$ok=["a" ,"e", "i", "o", "u", "y","I" ];

$str = " I'm sorry Dave I'm afraid I can't do that." ;
    for ($i=0; isset($str[$i]); $i++){
    
    foreach ($ok as $value){
    if($str[$i]==$value){
        echo $str[$i];
    }    
    
    } 
}