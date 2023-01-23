<?php get_header("news"); ?>
</header>

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
<img src="<?php echo get_template_directory_uri(); ?>/images/h1_News.png" alt="以下にはニュースがまとめられています" id="title_aboutSite">
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
                'mid_size' => 3,
                'total' => $query->max_num_pages,
                'prev_text' => '< 前のページへ移動する',
                'next_text' => '次のページに移動する',
            ));
        }
        wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer(); ?>