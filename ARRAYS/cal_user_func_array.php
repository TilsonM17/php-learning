<?php

echo call_user_func_array(function($n1,$n2){
    echo $n1,PHP_EOL;
    echo $n2;
},[1,4,8,5,12,78,65,40]);