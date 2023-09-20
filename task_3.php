<?php

$temp=0;
$old=0;
$new=1;
for ($i=1;$i<=10;$i++){
        echo "{$old}\n";
        $temp=$old+$new;
        $old=$new;
        $new=$temp;
    }
    echo "<br/>";
    echo "<br/>";
    echo "\n";
