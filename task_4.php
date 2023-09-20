<?php

function fibonacci ($number){
    $old=0;
    $new=1;
    for ($i=1;$i<=$number;$i++){
        echo "{$old}\n";git branch -M main
        $temp=$old+$new;
        $old=$new;
        $new=$temp;
    }
}
fibonacci(15);