<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./css/reset__css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./css/about__css/About.css">
    <!-- Unna font -->
    <link rel="preconnect" href="<?php echo get_template_directory_uri(); ?>https://fonts.googleapis.com">
    <link rel="preconnect" href="<?php echo get_template_directory_uri(); ?>https://fonts.gstatic.com" crossorigin>
    <link href="<?php echo get_template_directory_uri(); ?>https://fonts.googleapis.com/css2?family=Unna:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>./images/Top__img/R.png">
    <title><?php bloginfo('Ryohei Portfolio'); ?></title>
    <?php wp_head(); ?>
</head>
<body>

<!--==============================================================
    header
============================================================== -->
<header>
    <div class="header__inner wrapper">
            <div class="header__logo">    
                <h1>
                    <a href="php echo home_url();">Ryohei Takahashi</a>
                </h1>
            </div>
            <div class="header__menu">
                <nav>
                    <ul>
                            <li><a href="php echo home_url(); ">Home</a></li>
                            <li><a href="<?php echo esc_url(home_url('/service/')); ?>">Service</a></li>
                            <li><a href="<?php echo esc_url(home_url('/about/')); ?>">About</a></li>
                            <li><a href="<?php echo esc_url(home_url('/works/')); ?>">Works</a></li>
                            <li><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="toggle_btn" id="open">
            <i></i>
            <i></i>
            <i></i>
        </div>
    </div>

<div class="sp__menu">
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Works</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</div>

