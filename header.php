<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); wp_title(); ?></title>

    <link href="<?php bloginfo('stylesheet_url'); ?>" rel='stylesheet'>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <ul class="main-nav">
                    <li class="hov"><a href="#">Home</a></li>
                    <li class="hov"><a href="#">Work</a></li>
                    <li class="hov"><a href="#">Clients</a></li>
                    <li class="hov"><a href="#">Blog</a></li>
                    <li class="hov"><a href="#">Connect</a></li>
                </ul>
            </nav>
        </header>
    </div>