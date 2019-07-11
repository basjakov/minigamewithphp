<?php

try{
    $pdo = new PDO("mysql:host=localhost;dbname=php", "root", "");
    $show="select * from quiz";
    $all = $pdo->query($show);
}catch (Exception $e){
        echo "Faild".$e->getMessage(PDO::FETCH_ASSOC);
}
$pdo=null;