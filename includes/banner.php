<?php

$currentday = date('l');

echo "  <header>
            <div class='left'><img src='".IMG_PATH."sandwich_logo.jfif' alt='Temp Cafe Name Logo'></div>
            <div class='center'>
                <h1>Chad's Cafe</h1>
            </div>
            <div class='right'>
                <p id='address'>Our Address:<br/>
                123 Central Ave W,<br/> Great Falls, Montana</p>
                <p id='phone'>Phone: (406)761-3506</p>
                <p>Hours:<br/>M-Th: 7:00 AM - 9:00 PM<br/>
                F-Su: &nbsp;7:00 AM - 10:00PM </p>";
if($_SESSION["name"] == NULL) {
    echo "      <p><a href='".PAGE_PATH."create_acct.php'>Create Account</a> | <a href='".PAGE_PATH."login.php'>Login</a></p>";
} else {
    echo "       <p>Welcome, ".$_SESSION["name"]."!</p>";
};
echo "       </div>
        </header>";
?>