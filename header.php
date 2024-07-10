<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adrian Garner's Portfolio</title>

<?php wp_head();?>


</head>
<body>
    
<header>

<div class="container">

<?php

    wp_nav_menu(

        array(

                'theme_location' => 'top-menu',
                
        )
    );

?>

</div>

</header>
