<?php
    include_once 'model/ConDB.php';
    include_once 'model/funcntionDB.php';
    $obj_name = new PHONE();
    $rs2 = $obj_name->getPHONE();

    foreach ($rs2 as $result2){
        include "view/viewshow.php";
    }
?>