<?php

@session_start();

include 'b.php';

$conn = dbConnett();

function a($id,$c,$conn){
    var_dump($conn);
}



function b($conn){
    var_dump($conn);
}

a('sss',12,$conn);

echo PHP_EOL;

b($conn);


