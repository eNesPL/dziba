<?php
include 'config/config.php';
include 'init/session.php';
include 'AuthMeController.php';





if(isset($_POST['loginl']) && isset($_POST['haslol'])) {
    $log_login = $_POST['loginl'];
    $log_haslo = $_POST['haslol'];


    function check_password_db($nickname, $password,$con)
    {
        // Here u have to include your DB connection and select!
        $a = mysqli_query($con,"SELECT password FROM authme.authme where username = '$nickname'");
        if (mysqli_num_rows($a) == 1) {
            $password_info = mysqli_fetch_array($a);
            $sha_info = explode("$", $password_info[0]);
        } else
            return false;
        if ($sha_info[1] === "SHA") {
            $salt = $sha_info[2];
            $sha256_password = hash('sha256', $password);
            $sha256_password .= $sha_info[2];;
            if (strcasecmp(trim($sha_info[3]), hash('sha256', $sha256_password)) == 0)
                return true;
            else return false;
        }
    }
        $return_var = check_password_db($log_login, $log_haslo, $con);

        if (!$return_var) {
            echo("Błędne dane");
        } else {
            $_SESSION['zalogowany'] = true;
            $_SESSION['username'] = $log_login;
            header('Location: index.php');
        }



}else{

    header('Location: index.php');
}

