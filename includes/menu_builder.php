<?php
    function buildMenu($mealTime) {

        define("DATA_PATH", "../data/");
        include DATA_PATH.'dbconnection.php';

        $db_conn = new mysqli($servername, $username, $password, $dbname);

        $result = $db_conn->query(
            "SELECT MenuItemName, MenuItemDesc, MenuItemPrice, MenuItemPrice2, MenuItemImage
            FROM MenuItem_MealTime INNER JOIN MenuItem 
            ON MenuItem_MealTime.MenuItemID = MenuItem.MenuItemID 
            WHERE MenuItem_MealTime.MealTimeID = $mealTime;"
        );

        $times = array("Breakfast", "Lunch", "Dinner");

        echo "  <section id='menus'>
                    <div class='menu_div'>
                    <h1 class='menu_header'>{$times[$mealTime-1]}</h1>";

        while ($row = $result -> fetch_assoc()) {
            $item = $row['MenuItemName'];
            $desc = $row['MenuItemDesc'];
            $price = $row['MenuItemPrice'];
            $price2 = $row['MenuItemPrice2'];
            $itemImg = $row['MenuItemImage'];
            if ($row['Calories'] < 500) {
                $isLowCal = TRUE;
            } else {
                $isLowCal = FALSE;
            }

            echo "  <div class='menu_item'>
                        <h3 class='item_header'>$item <img src='".IMG_PATH."lowcal.png'></h3>
                        <p>$desc</p>";
            if($price2 !== NULL) {
                echo "  <p class='price'>".number_format($price, 2)." | ".number_format($price2, 2)."</p>";
            } else {
                echo "  <p class='price'>".number_format($price, 2)."</p>";
            }
            echo "</div>";
            echo "<img src='".IMG_PATH.$itemImg."' class='menu_img' />";
        }

        echo "      </div>";
        include INCL_PATH."menu_selection.php";
        echo "  </section>";

    }
?>