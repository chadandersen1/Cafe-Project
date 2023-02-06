<?php

$menu_items = array(
                'option1' => array(
                    'item' => 'Omelette',
                    'desc' => 'A three-egg ham, bacon, steak (+0.50) or meatless cheddar cheese omelette. Extra toppings (0.50 ea):
                        Tomato, Onion, Mushroom, Black Olives, Jalepeno, Spinach, Bell Pepper',
                    'price' => 9.00,
                    'img' => 'breakfast_img.jpg'
                    
                ),

                'option2' => array(
                    'item' => 'Pancakes/Waffles',
                    'desc' => 'A stack of four pancakes, waffles, or both. Comes with a selection of syrups and optional whipped cream and fruit.
                        Add blueberries or chocolate chips for .50 ea.',
                    'price' => 7.00,
                    'img' => 'waffles.jpeg'
                ),

                'option3' => array(
                    'item' => 'Breakfast A La Carte',
                    'desc' => 'Your choice of two or three items from the following: Three pieces of bacon, three sausage links, two breakfast patties,
                        two eggs your way, two pancakes/waffles, two biscuits with gravy, hashbrowns, fruit (orange slices, strawberries, and melon).',
                    'price' => array(
                        'price1' => 7.00,
                        'price2' => 9.00
                    ),
                    'img' => 'bigbreakfast.jpg'
                )

);

?>