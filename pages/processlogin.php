<?php
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $servername = "localhost";
    $username = "steverq1_chad";
    $password = "Csci213+#003";
    $dbname = "steverq1_chad";

    $db_conn = new mysqli($servername, $username, $password, $dbname);

    $result = $db_conn->query(
        "SELECT UserEmail, UserPwd FROM Users WHERE UserEmail = '$email';"
    );
    
    if ($result) {
        $acct = $result -> fetch_assoc();
        // if (password_verify($pwd, $acct['UserPwd'])) {
        //     header("Location: ../index.php");
        // } else {
        //     header("Location: login.php?LoginFailed=''");
        // }
        echo($acct['UserEmail'].$acct['UserPwd']);
    } else {
        header("Location: login.php?LoginFailed=''");
    }

?>
