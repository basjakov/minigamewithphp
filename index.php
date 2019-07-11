<?php
    require 'getdata.php';
    include 'check.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript">

    </script>
</head>

<form method="post" action="">
    <?php
    $check = new check();
    while ($r = $all->fetch()){
        ?>
            <p value="question"><?php echo htmlspecialchars($r['question']); ?></p>
             <?php echo htmlspecialchars($r['id']); ?>
            <input type="text" name="answer<?php echo $r["id"]?>"  value=""><input type="submit" name="check<?php  echo $r['id']?>">
            <?php
                if(isset($_POST["check".$r['id']])){
                    echo $check->equalcheck($_POST["answer".$r['id']],$r['trueanswer']);
                }
            echo $check->$sum;

    }

    ?>
</form>

</body>
</html>