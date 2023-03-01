<?php

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

    $servername = "localhost";
    $username = "steverq1_chad";
    $password = "Csci213+#003";
    $dbname = "steverq1_chad";

    $db_conn = new mysqli($servername, $username, $password, $dbname);

    $db_conn->query(
        "INSERT INTO Users VALUES(NULL, '$firstName', '$lastName', '$email', '$pwd');"
    );

    header("Location: ../index.php?ACRedirect=''");

?>
