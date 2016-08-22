<?php

    $json = file_get_contents('http://www.apilayer.net/api/live?access_key=ff3d944a135811ebe4f49bf467a895be&format=1&currencies=RUB');
    $obj = json_decode($json,true);
    echo (int)$obj['quotes']['USDRUB'] +1;

?>
