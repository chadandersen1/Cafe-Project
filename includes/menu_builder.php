<?php
    foreach($menu_items as $item) {
        echo "  <div class='menu_item'>
                    <h3 class='item_header'>{$item['item']}</h3>
                    <p>{$item['desc']}</p>";
        if(is_array($prices = $item['price'])) {
            echo "  <p class='price'>".number_format($prices['price1'], 2)." | ".number_format($prices['price2'], 2)."</p>";
        } else {
            echo "  <p class='price'>".number_format($prices, 2)."</p>";
        }
        echo "</div>";
        echo "<img src='".IMG_PATH.$item['img']."' class='menu_img' />";
    }
?>