<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinner Menu</title>
    <link rel="stylesheet" href="../css/cafeStyles.css">
</head>
<body>

    <?php
        define("INCL_PATH", "../includes/");
        define("IMG_PATH", "../images/");
        define("DATA_PATH", "../data/");
        define("PAGE_PATH", "../pages/");

        include INCL_PATH."banner.php";

        include INCL_PATH."menu_builder.php";
        buildMenu(3);

    ?>

</body>
</html>