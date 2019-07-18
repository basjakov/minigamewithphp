<?php
    try{
        $pdo = new PDO("mysql:host=localhost;dbname=php", "root", "");
        $insert = "insert into users(username,password,name,lastname) values(".$_POST['user'].", ".$_POST['pass'].",".$_POST['name'].",".$_POST['lastname'].")";
        if($pdo->exec($insert) == true){
            echo "asdasds";
        }
    }catch (Exception $e){
            echo "database error".$e->getMessage();
    }