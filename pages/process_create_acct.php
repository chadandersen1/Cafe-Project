<?php

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

    define("DATA_PATH", "../data/");
    include DATA_PATH.'dbconnection.php';

    $db_conn = new mysqli($servername, $username, $password, $dbname);

    $db_conn->query(
        "INSERT INTO Users VALUES(NULL, '$firstName', '$lastName', '$email', '$pwd');"
    );

    header("Location: login.php?ACRedirect=''");

?>
