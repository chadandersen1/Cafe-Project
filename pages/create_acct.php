<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/accountPages.css">
    <script src="../scripts/validation.js"></script>
</head>
<body>
    <div>
        <h2>Create Account</h2>
        <form onsubmit="return validatepw()" action="process.php" method="POST">

            <label for="fname">First name:</label><br />
            <input type="text" id="fname" name="fname" size=35 required><br />
            <label for="lname">Last name:</label><br />
            <input type="text" id="lname" name="lname" size=35 required><br />
            <label for="email">Email:</label><br />
            <input type="email" id="email" name="email" size=35 required><br />
            <label for="pwd">Password:</label><br />
            <input type="password" id="pwd" name="pwd" size=35 required><br />
            <p id="pwd_reqs">Password must contain:</p>
            <ul>
                <li id="length_req">At least 8 characters</li>
                <li id="upper_req">One uppercase letter</li>
                <li id="lower_req">One lowercase letter</li>
                <li id="digit_req">One digit</li>
                <li id="special_req">One special character from: +-$#</li>
            </ul>
            <input type="submit">
        </form>
    </div>
</body>
</html>