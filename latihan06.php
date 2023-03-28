<?php
    $mhs = array(
        array("Ardika","2233445512", "Denpasar"),
        array("Adi", "20101077", "Canggu"),
        array("wahyu", "123456789", "Tabanan"),
        array("Zizi", "112233445", "Gianyar"),
    );
    header("Content-Type: application/json");
    echo json_encode($mhs);
