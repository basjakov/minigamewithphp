<?php
session_start();
unset($_SESSION['s_user']);
session_destroy();
header("location: http://localhost/game/minigamewithphp/login/loginform.php");
?>