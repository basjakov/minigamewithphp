<?php
     class check{

            public function equalcheck($value,$trueanswer)
            {
                    if($value == $trueanswer){
                        $sum = $sum +1;
                        return "Success its true <hr>$sum";
                    }
                   if($value != $trueanswer){
                        return "Dn dn dn dn sorry its a wrong <hr>";
                    }

            }
     }
  ?>