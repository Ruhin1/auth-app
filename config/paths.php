<?php

function public_url($path = '') {
    $baseUrl = 'http://authapp.local/public';
    return $baseUrl . '/' . ltrim($path, '/');
}

//print array and string with formet
function p($data,$op = true,string $flag = ""){
    if(is_array($data) || is_object($data)){
        echo "<br/> -------$flag--------";
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        echo "--------------- <br/>";
        if($op){
            die('code die'); 
        }
    }elseif(is_string($data)){
        echo "-------$flag--------";
        echo "<br/>$data<br/>";
        echo "---------------<br/>";
        if($op){
            die('code die'); 
        }
    }

    
}