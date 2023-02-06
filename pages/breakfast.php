<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breakfast Menu</title>
    <link rel="stylesheet" href="../css/cafeStyles.css">
</head>
<body>

    <?php
        define("INCL_PATH", "../includes/");
        define("IMG_PATH", "../images/");
        define("DATA_PATH", "../data/");
        define("PAGE_PATH", "../pages/");

        include INCL_PATH."banner.php";
        include DATA_PATH."breakfast_menu.php";


        echo "  <section id='menus'>
                    <div class='menu_div'>
                    <h1 class='menu_header'>Breakfast</h1>";

        include INCL_PATH."menu_builder.php";
        echo "      </div>";
        include INCL_PATH."menu_selection.php";
        echo "  </section>";

    ?>
</body>
</html>