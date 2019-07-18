<?php
/**
 * Created by PhpStorm.
 * User: arman.antonyan
 * Date: 18/07/2019
 * Time: 14:43
 */

        try{
            $pdo = new PDO("mysql:host=localhost;dbname=php","root","");
            $show = "select * from users";
            $all = $pdo->query($show);
        }catch (Exception $e){
            echo "faild".$e->getMessage(PDO::FETCH_ASSOC);
        }
        $pdo=null;

