<?php

    $randomNum = [];

    while(count($randomNum) < 15){

        $newNum = rand(1,100);
        if(!in_array($newNum, $randoNum)){
            $randomNum[] = $newNum;
        }

    }
    var_dump($randomNum);

?>