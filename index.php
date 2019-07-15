<?php
    require 'getdata.php';
    include 'check.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/timer.js"></script>
    <title>Document</title>

</head>
<body>
<div class="container game">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">

        <form method="post" action="">
            <?php

            $check = new check();
            while ($r = $all->fetch()){
                ?>
                    <p value="question"><?php echo htmlspecialchars($r['question']); ?></p>
                    <input type="text" name="answer<?php echo $r["id"]?>"  value=""><input type="submit" class="btn btn-success" name="check<?php  echo $r['id']?>" value="Check">
                    <?php
                        if(isset($_POST["check".$r['id']])){
                                echo $check->equalcheck($_POST["answer".$r['id']],$r['trueanswer'],$_SESSION["sum"]);
                        }
            }
            ?>
            </form>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
            <div class="container">
                <div id="time">0</div>
                <canvas id="stopwatch" width = 200 height = 200></canvas>
            </div>
        </div>
    </div>
</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/timer.js">

    </script>
</body>
</html>