<?php get_header(); ?>

<body>
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
                <li><a href="<?php echo get_template_directory_uri(); ?>/home/profile-yayyay">PROFILE</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/home/discography">DISCOGRAPHY</a></li>
                <li><a href="<?php echo get_template_directory_uri(); ?>/home/contact">CONTACT</a></li>
            </ul>
        </nav>
    </header>
    <img src="<?php echo get_template_directory_uri(); ?>/images/human.png" alt="キャラクター" id="human">
    <img src="<?php echo get_template_directory_uri(); ?>/images/news.png" alt="プロフィール" id="news_img">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        // 'post_status' => 'publish',
        'paged' => $paged,
        'posts_per_page' => 5, // 表示件数
        'orderby'     => 'date',
        'category_name' => 'news',
        'order' => 'DESC'
    );
    $query = new WP_Query($args);
    ?>
    <div class="news_pages_container">
        <!-- <h2 id="news_title">News</h2> -->
        <div class="news_articles">
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="news_articles_article_page">
                        <div class="news_articles_article_date_page">
                            <?php the_time('Y.m.d'); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>">
                            <div class="news_articles_article_title_page">
                                <?php the_title(); ?>
                            </div>
                        </a>
                    </div>
                    <div class="news_article_sub">
                        <?php
                        $content = str_replace('\n', '', mb_substr(strip_tags($post->post_content), 0, 70));
                        if (mb_strlen($post->post_content) - 52 <= 70) {
                            echo $content;
                        } else {
                            echo $content . '...';
                        }
                        // echo mb_strlen($post->post_content)-52; 何故か52語プラスで表示される。
                        ?>
                    </div>
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
        <!-- pagenation -->
        <div class="pagenation">
            <?php
            if ($query->max_num_pages > 1) {
                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => 'page/%#%/',
                    'current' => max(1, $paged),
                    'mid_size' => 1,
                    'total' => $query->max_num_pages,
                    'prev_text' => '<',
                    'next_text' => '>',
                ));
            }
            wp_reset_postdata(); ?>
        </div><!-- /pagenation -->
    </div>

    <!-- particles.js container -->
    <!-- stats - count particles -->
    <div id="particles-js"></div>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
    <script src="<?php echo get_template_directory_uri(); ?>/script/back.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script/particles.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script/menu.js"></script>
    <?php get_footer(); ?>