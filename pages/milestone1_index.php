<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Project</title>
    <link rel="stylesheet" href="../css/cafeStyles.css">
</head>
<body>
    
    <?php
        define("INCL_PATH", "../includes/");
        include INCL_PATH."banner.php";

        $currentday = date('l');

        $specials = array(
            'Monday' => 'Spaghetti and meatballs',
            'Tuesday' => 'Club Sandwich',
            'Wednesday' => 'BBQ Ribs',
            'Thursday' => 'Burger',
            'Friday' => "Bacon Mac N' Cheese",
            'Saturday' => 'None',
            'Sunday' => 'None',
        );

        $menu_items = array(
            'breakfast' => array(
                'option1' => array(
                    'item' => 'Omelette',
                    'desc' => 'A three-egg ham, bacon, steak (+0.50) or meatless cheddar cheese omelette. Extra toppings (0.50 ea):
                        Tomato, Onion, Mushroom, Black Olives, Jalepeno, Spinach, Bell Pepper',
                    'price' => 9.00
                    
                ),

                'option2' => array(
                    'item' => 'Pancakes/Waffles',
                    'desc' => 'A stack of four pancakes, waffles, or both. Comes with a selection of syrups and optional whipped cream and fruit.
                        Add blueberries or chocolate chips for .50 ea.',
                    'price' => 7.00

                ),

                'option3' => array(
                    'item' => 'Breakfast A La Carte',
                    'desc' => 'Your choice of two or three items from the following: Three pieces of bacon, three sausage links, two breakfast patties,
                        two eggs your way, two pancakes/waffles, two biscuits with gravy, hashbrowns, fruit (orange slices, strawberries, and melon).',
                    'price' => array(
                        'price1' => 7.00,
                        'price2' => 9.00
                    )
                )

            ),

            'lunch' => array(
                'option1' => array(
                    'item' => 'Club sandwich',
                    'desc' => 'Turkey, bacon, lettuce, tomato, and mayo on bread of your choice, optionally toasted. Comes with your choice of fries,
                        kettle-cooked chips, or soup.',
                    'price' => 8.00
                    
                ),

                'option2' => array(
                    'item' => 'Creatively named burger',
                    'desc' => 'A four oz hamburger with american cheese, lettuce, onion, tomato, and our burger sauce. Comes with your choice of sides.',
                    'price' => 10.00

                ),
            ),

            'dinner' => array(
                'option1' => array(
                    'item' => 'Spaghetti and meatballs',
                    'desc' => 'Freshly made pasta topped with meatballs and marinara sauce.',
                    'price' => 11.00    
                ),

                'option2' => array(
                    'item' => 'BBQ Ribs',
                    'desc' => 'A rack of 5 ribs covered in our homemade BBQ sauce.',
                    'price' => 9.00
                ),

                'option3' => array(
                    'item' => "Bacon Mac N' Cheese",
                    'desc' => 'Freshly made macaroni with a blend of cheeses and bacon.',
                    'price' => 7.50
                ),
            )
        );


    ?>

    <section id="menus">
        <?php
            foreach($menu_items as $key => $meal){
                $i = 0;
                echo "<div class='menu_div'>";
                echo "<h1 class='menu_header'>".$key."</h1>";
                foreach($meal as $option){
                    $i += 1;
                    echo "  <div class='menu_item'>
                                <h3 class='item_header'>{$option['item']}</h3>
                                <p>{$option['desc']}</p>";
                    if(is_array($prices = $option['price'])) {
                        echo "  <p class='price'>".number_format($prices['price1'], 2)." | ".number_format($prices['price2'], 2)."</p>";
                    } else {
                        echo "  <p class='price'>".number_format($prices, 2)."</p>";
                    }
                    echo "</div>";
                    if($i == 2) {
                        echo "<img src='".IMG_PATH.$key."_img.jpg' class='menu_img' />";
                    }
                }
                echo "</div>";
            }
            echo "<br />";
            echo "<h4 id='special'>Get 15% off when you order the daily special for lunch or dinner, available Mon-Fri</h4>";
            if($specials[$currentday] != 'None'){
                echo "<h1 class='menu_header'>Daily Special</h1>";
                echo "<h3 class='item_header'>{$specials[$currentday]}</h3>";
            }
            echo "<br />"
        ?>
    </section>
</body>
</html>