<?php


function factorialOfNumber($input){
    $res=$input;
    for ($i=$input-1; $i >=1 ; $i--) { 
      $values=$res*$i;
      $res=$values;

    }
    echo $res;
}
factorialOfNumber(6);