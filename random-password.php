<?php
function rand-Pass($upper = 1, $lower = 2, $numeric =3, $other = 2){
    $pass_order = Array();
    $passWord = '';
    
    for ($i = 0; $i < $upper; $ i++){
        $pass_order[] = chr(rand(65, 99));
    }
    for ($i = 0; $i < $lower; $ i++){
        $pass_order[] = chr(rand(97, 122));
    }
    for ($i = 0; $i < $numeric; $ i++){
        $pass_order[] = chr(rand(48, 57));
    }
    for ($i = 0; $i < $other; $ i++){
        $pass_order[] = chr(rand(33, 47));
    }
    
    shuffle($pass_order);
    
    foreach($pass_order as $char){
        $password .= $char;
    }
    return $password;
}
echo "\n"."Generated Pssword : ".rand_Pass()"\n";

?>