<?php get_header(); ?>

<body class="bodySingle">
    <header>
        <a href="https://yayyay.rocks/">
            <img src="<?php echo get_template_directory_uri(); ?>/images/head_logo.png" alt="ヘッダーロゴ" id="head_img"></a>
        <button type="button" class="menu-btn">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </button>
        <nav class="global-navi">
            <div class="glitch" style="background-image: url(https://yayyay.rocks/wp-content/themes/YAYYAY/images/background_spMenu.png);">
                <div class="channel r"></div>
                <div class="channel g"></div>
                <div class="channel b"></div>
            </div>
            <ul class="head_nav">
                <li><a href="https://yayyay.rocks/">HOME</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/home/news">NEWS</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/home/profile">PROFILE</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/home/discography">DISCOGRAPHY</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/home/contact">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <div class="singlePage">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/human.png" alt="キャラクター" id="human">
    <img src="<?php echo get_template_directory_uri(); ?>/images/news.png" alt="プロフィール" id="news_img"> -->
        <!-- START -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1 class="singleTitle"><?php the_title(); ?></h1>
                <div id="singlePageDate">
                    <p>on <?php the_time('Y.m.d'); ?></p>
                </div>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="single_thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endif; ?>
                <div class="singleContent">
                    <?php the_content(); ?>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
    <!-- DONE -->
    <!-- particles.js container -->
    <!-- stats - count particles -->
    <div id="particles-js"></div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="<?php echo get_template_directory_uri(); ?>/script/back.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script/particles.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script/menu.js"></script>
    <?php get_footer(); ?>