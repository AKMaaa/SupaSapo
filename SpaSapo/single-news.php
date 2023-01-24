<?php get_header("news"); ?>
</header>
<div class="newsContent">
    <img src="<?php echo get_template_directory_uri(); ?>/images/h1_News.png" alt="以下にはニュースがまとめられています" id="title_aboutSite">
    <h2>「<?php the_title(); ?>」の情報を掲載しているページです。</h2>
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>