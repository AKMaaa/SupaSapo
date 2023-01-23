<?php get_header("onsen_infomation"); ?>
</header>
<div class="infoContent">
    <img src="<?php echo get_template_directory_uri(); ?>/images/h1_AboutInfo.png" alt="以下に温泉情報がまとめられています" id="title_aboutSite">
    <h2>「<?php the_title(); ?>」の情報を掲載しているページです。</h2>

    <div class="singleTitle">
        <?php the_title(); ?>
    </div>
    <?php the_content(); ?>

</div>
<?php get_footer(); ?>