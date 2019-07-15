<?php
/**
 * Created by PhpStorm.
 * User: arman.antonyan
 * Date: 15/07/2019
 * Time: 15:35
 */
    session_start();
    $_SESSION['sum'];
     class check{
            public function equalcheck($value,$trueanswer)
            {
                    if($value == $trueanswer){
                        $_SESSION['sum'] = $_SESSION['sum']+1;

                        return 'Success its true <hr> </br>'. $_SESSION["sum"];
                    }
                   if($value != $trueanswer){
                         $_SESSION['sum'] = $_SESSION['sum'] -1;
                        return "dn dn dn Its a wrong   <hr> </br>".$_SESSION['sum'];
                    }
            }
     }
  ?>