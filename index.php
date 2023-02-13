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
    ?>

</body>
</html>