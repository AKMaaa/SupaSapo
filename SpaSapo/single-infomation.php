<?php get_header("onsen_infomation"); ?>
</header>
<div class="infoContent">
    <img src="<?php echo get_template_directory_uri(); ?>/images/h1_AboutInfo.png" alt="以下に温泉情報がまとめられています" id="title_aboutSite">
    <h2>「<?php the_title(); ?>」の情報を掲載しているページです。</h2>

    <div class="singleTitle">
        <?php the_title(); ?>
    </div>
    <?php the_content(); ?>
    <?php
    global $post;
    $post_id = $post->ID;
    ?>
    <div class="reviewContent">
        <h1 class="reviewTitle">レビューコーナー</h1>
        <h3 class="reviewH3">レビューの平均</h3>
        <?php echo do_shortcode('[site_reviews_summary assigned_posts="' . $post_id . '"]'); ?>
        <h3 class="reviewH3">利用者の声</h3>
        <?php echo do_shortcode('[site_reviews assigned_posts="' . $post_id . '"]'); ?>
        <h3 class="reviewH3">入力フォーム</h3>
        <?php echo do_shortcode('[site_reviews_form assigned_posts="' . $post_id . '"]'); ?>
    </div>
</div>
<?php get_footer(); ?>