<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Project</title>
    <link rel="stylesheet" href="css/cafeStyles.css">
    <?php
        if(isset($_GET['ACRedirect'])) {
            print '<script type="text/javascript">alert("Account created!");</script>';
        }
    ?>
</head>
<body>
    
    <?php

        $servername = "localhost";
        $username = "steverq1_chad";
        $password = "Csci213+#003";
        $dbname = "steverq1_chad";

        $db_conn = new mysqli($servername, $username, $password, $dbname);

        $result = $db_conn->query("SELECT * FROM customer;");

        $specials = array(
            'Monday' => 'Spaghetti and meatballs',
            'Tuesday' => 'Club Sandwich',
            'Wednesday' => 'BBQ Ribs',
            'Thursday' => 'Burger',
            'Friday' => "Bacon Mac N' Cheese",
            'Saturday' => 'None',
            'Sunday' => 'None'
        );

        define("INCL_PATH", "includes/");
        define("IMG_PATH", "images/");
        define("DATA_PATH", "data/");
        define("PAGE_PATH", "pages/");

        include INCL_PATH."banner.php";
        echo "<section id='menus'>";
        include INCL_PATH."menu_selection.php";
        echo "<h1 class='special_header'>Daily Special</h1>";
        echo "<h4 id='special'>Get 15% off when you order the daily special for lunch or dinner, available Mon-Fri</h4>";
            if($specials[$currentday] != 'None'){
                echo "<h3 class='item_header'>{$specials[$currentday]}</h3>";
            }
        echo "</section>";

        while ($row = $result -> fetch_assoc()) {
            $cust_id = $row['cust_id'];
            $cust_fname = $row['cust_fname'];
            $cust_lname = $row['cust_lname'];
            $cust_email = $row['cust_email'];
            echo "<tr><td>$cust_id</td><td>$cust_fname</td><td>$cust_lname</td><td>$cust_email</td></tr>";
        }
    ?>

</body>
</html>