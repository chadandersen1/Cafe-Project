<?php

    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = password_hash($_POST['pwd'], PASSWORD_DEFAULT);

    $CSVStr = "$firstName, $lastName, $email, $pwd".PHP_EOL;

    $usersFile = fopen("../data/users.txt", "a");
    fwrite($usersFile, $CSVStr);
    fclose($usersFile);

    header("Location: ../index.php?ACRedirect=''");

?>
