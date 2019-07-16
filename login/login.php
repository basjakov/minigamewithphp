<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['user']) && !empty($_POST['pass'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $con = mysqli_connect('localhost', 'root', '', 'php') or die(mysqli_error());

        $query = mysqli_query($con, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
        if ($query != 0) {
            while ($row = mysqli_fetch_assoc($query)) {
                $dbuser = $row['username'];
                $dbpass = $row['password'];
            }
            if ($user == $dbuser && $pass == $dbpass) {
                    session_start();
                    $_SESSION['s_user'] = $user;
                    header("Location: http://localhost/game/minigamewithphp/index.php");
            } else {
                echo '<div class="text-center text-danger">Մուտքի տվյալների սխալ</div>';
            }
        }
    }
}