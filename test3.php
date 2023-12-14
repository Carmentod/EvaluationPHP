<?php
echo "Tapez 1 pour  compte rebours des nombres paires et 2 pour le compte des nombres impaires!";
$option = fgets(STDIN);

    if ($option == 1) {
        while ($start = 100){
        echo $start >= 0;
        $start-2;
        }
    }
    elseif ($option == 2) {
    while ($start = 100) {
    echo $start >= 0 . "\n";
    $start --++;
    sleep (1);
    }
    }



?>