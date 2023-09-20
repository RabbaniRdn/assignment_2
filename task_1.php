<?php

/*
============================
 output of while loop
============================
*/

echo "output of while loop\n";
function evenNumber ($start,$end){
    for($start;$start<=$end;$start++){
        if($start%2==0){
            echo "{$start}\n";
        }

    }
}
echo evenNumber(1,20);
echo "<br/>";
echo "<br/>";




/*
==============================
 output of while loop
==============================
*/

echo "\n";
echo "output of while loop\n";

function evenNumber1 ($start,$end){
    while($start<=$end){
        if($start%2==0){
            echo "{$start}\n";
        }
        $start++;

    }
}
echo evenNumber1(1,20);
echo "<br/>";
echo "<br/>";





/*
==============================
 output of while loop
==============================
*/


echo "\n";
echo "output of do while loop\n";

function evenNumber2 ($start,$end){
   do{
        if($start%2==0){
            echo "{$start}\n";
        }
        $start++;
    }
    while($start<=$end);
    
}
echo evenNumber2(1,20);
echo "<br/>";
echo "<br/>";
echo "\n";