<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/accountPages.css">
    <script src="../scripts/validation.js"></script>
    <?php
        if(isset($_GET['LoginFailed'])) {
            print '<script type="text/javascript">alert("Login failed. Please try again.");</script>';
        }
    ?>
</head>
<body>
    <div>
        <h2>Login</h2>
        <form action="processlogin.php" method="POST">

            <label for="email">Email:</label><br />
            <input type="email" id="email" name="email" size=35 required><br />
            <label for="pwd">Password:</label><br />
            <input type="password" id="pwd" name="pwd" size=35 required><br />
            <input type="submit">
        </form>
    </div>
</body>
</html>