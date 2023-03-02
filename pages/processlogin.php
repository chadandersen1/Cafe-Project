<?php
    session_start();

    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $servername = "localhost";
    $username = "steverq1_chad";
    $password = "Csci213+#003";
    $dbname = "steverq1_chad";

    $db_conn = new mysqli($servername, $username, $password, $dbname);

    $result = $db_conn->query(
        "SELECT UserEmail, UserPwd, UserFName FROM Users WHERE UserEmail = '$email';"
    );
    
    if (mysqli_num_rows($result) !== 0) {
        $acct = $result -> fetch_assoc();
        if (password_verify($pwd, $acct['UserPwd'])) {
            $_SESSION["name"] = $acct['UserFName'];
            header("Location: ../index.php");
        } else {
            header("Location: login.php?LoginFailed=''");
        }
    } 
    else {
        header("Location: login.php?LoginFailed=''");
    }

?>
