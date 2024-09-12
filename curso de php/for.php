<?php
   for ($i=0;$i<=10;$i++){
        echo "bucle \n";
            if ($i===6){
                echo "bucle interrumpido \n";
                break;
            }
   }

   for ($i=0;$i<=10;$i++){
    if ($i == 0){
        echo "por 0 no \n"; 
            continue;
    }
    echo "9 x $i=" . 9 * $i . "\n";   
}
    echo "hemos salido del bucle";
