<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body>
        <div id="page-container">
            <header id="header">
                <div class="container">

                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="navbar">											<!-- Div Navbar -->
                            <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-inner">									<!-- Navbar-inner -->
                                <div class="nav-collapse collapse">						<!-- Nav-collapse -->
                                    <nav class="menu">									<!-- Main nav -->
                                        <?php
                                        wp_nav_menu(array(
                                            'container' => false,
                                            'items_wrap' => '<ul id="%1$s" class="%2$s nav">%3$s</ul>',
                                            'walker' => new twitter_bootstrap_nav_walker
                                        ));
                                        ?>
                                    </nav>												<!-- End Nav Tag -->
                                </div>													<!-- End Nav-collapse -->
                            </div>														<!-- End Navbar-inner -->
                        </div>	
                    </div>
                </div>
            </header>