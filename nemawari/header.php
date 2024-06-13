<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?>KOHEI NEMAWARI PORTFOLIO SITE</title>
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- フォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&family=M+PLUS+Rounded+1c:wght@100;300&family=Open+Sans:wght@700&family=Piazzolla:wght@700&display=swap" rel="stylesheet">
    <!-- ファビコン -->
    <link rel="icon" href="images/favicon/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo esc_url(get_theme_file_uri("images/favicon/favicon.png")); ?>">


    
    <!-- css -->
    <!-- <link rel="stylesheet" href="stylesheets/destyle.css">
    <link rel="stylesheet" href="stylesheets/style1.css"> -->

    <!-- js -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" 
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" 
            crossorigin="anonymous">
    </script> -->
    <!-- ScrollReveal -->
    <!-- <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/index.js"></script> -->
    <!-- Google tag (gtag.js)　アナリティクス -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-7R6T3X7DXK"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-7R6T3X7DXK');
    </script> -->
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div id="header-block">
            <div class="header-menu">
                <ul class="hm-1">
                    <li><a href="<?php echo esc_url(home_url()); ?>">TOP</a></li>
                    <li><a href="<?php echo esc_url(home_url("/lineup")); ?>">WORKS</a></li>
                    <li><a href="<?php echo esc_url(home_url("/about")); ?>">ABOUT</a></li>
                    <li><a href="<?php echo esc_url(home_url("/carrer")); ?>">CAREER</a></li>
                    <li><a href="<?php echo esc_url(home_url("/contact")); ?>">CONTACT</a> </li>
                </ul>
            </div>
        </div>
        <div id="header-block-r">
            <span class="nav_toggle">
                <i></i>
                <i></i>
                <i></i>
            </span>
            <nav class="nav">
                <ul>
                    <li><a href="<?php echo esc_url(home_url()); ?>">TOP<span class="name-r">トップページ</span></a></li>
                    <li><a href="<?php echo esc_url(home_url("/lineup")); ?>">WORKS<span class="name-r">制作実績</span></a></li>
                    <li><a href="<?php echo esc_url(home_url("/about")); ?>">ABOUT<span class="name-r">自分について</span></a></li>
                    <li><a href="<?php echo esc_url(home_url("/carrer")); ?>">CAREER<span class="name-r">学習歴</span></a></li>
                    <li><a href="<?php echo esc_url(home_url("/contact")); ?>">CONTACT<span class="name-r">お問い合わせ</span></a></li>
                </ul>
                <ul class="sns-r">
                    <li><a href="https://www.instagram.com/dp_uw1214x/" target="_blank"><img src="images/profile-img/insta.png" alt="insta"></a></li>
                    <li><a href="https://twitter.com/web_kouhei" target="_blank"><img src="images/profile-img/Twitter.png" alt="Twitter"></a></li>
                </ul>
            </nav>
        </div>
        
    </header>