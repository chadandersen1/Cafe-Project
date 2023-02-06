<?php

    $menus = array(
        'breakfast',
        'lunch',
        'dinner',
    );

    echo "  <h1 class='menu_header'>Select Menu</h1>";
    foreach($menus as $meal){
        echo "  <a href='".PAGE_PATH.$meal.".php'>
                    <div id='".$meal."_select'>
                        <span><h2>$meal</h2></span>
                    </div>
                </a>";
        }

            
?>