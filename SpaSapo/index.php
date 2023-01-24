<?php get_header('home'); ?>
<!-- 投稿をクリックすると見られる詳細なページ -->
</header>
<div class="audioContent">
    <p>音声案内の音声案内</p>
    <audio controls='' style="width: 100%;">
        <source src="https://storage.googleapis.com/ondoku3/media/82ec537853b6e639a026ca86b6e0df3423564fc95ef045b6e0803ce3.mp3?" type="audio/mpeg">
    </audio><br />
</div>
<img src="<?php echo get_template_directory_uri(); ?>/images/Back_Onsen.png" alt="温泉の湯船の画像です。ページ下部に行くと温泉情報が一覧で表示されています。" id="BackImg_home">
<p id="Intr">湯の川の温泉の情報を<br>カンタンに手に入れる</p>

<a href="<?php echo esc_url(home_url('onsen_infomation')); ?>" id="button_searchOnsen">
    <img src="<?php echo get_template_directory_uri(); ?>/images/Button_searchOnsen.png" alt="このボタンを選択すると温泉の一覧情報が掲載されているページに遷移します。">
</a>


<div class="homeContent">
    <div class="audioContent">
        <p>サイトについての音声案内</p>
        <audio controls='' style="width: 100%;">
            <source src="https://storage.googleapis.com/ondoku3/media/024f3c3bf46b324dfe45b1745cd1d27451fa876a9f6d0b6be6046e6a.mp3?" type="audio/mpeg">
        </audio><br />
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/h1_AboutSite.png" alt="当サイ
トについての説明です。" id="title_aboutSite">
    <h1>温泉施設までの距離や設備について<br>視覚障碍をお持ちの方向けのサイトです。</h1>
    <p>目が見えないと億劫になりがちな温泉への入浴。<br>
        そんな温泉への入浴への抵抗を少しでも減らせるように<br>
        安心できる情報を確認できるサイトになります。<br><br>

        個人風呂がある温泉や貸し切りのできる温泉<br>
        施設までの道のりが簡単な温泉など<br>
        温泉への”入りやすさ”を意識した情報を多く掲載しています。<br><br>

        ぜひ函館湯の川温泉で日々の疲れを癒しましょう。</p>
</div>

<div class="homeContent">
    <div class="audioContent">
        <p>温泉情報についての音声案内</p>
        <audio controls='' style="width: 100%;">
            <audio controls='' style="width: 100%;">
                <source src="https://storage.googleapis.com/ondoku3/media/afe924668e359106350b8adab20b4b832c863c40a8a4f07d0d4fcd6b.mp3?" type="audio/mpeg">
            </audio><br />
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/h1_AboutInfo.png" alt="以下に温泉情報がまとめられています" id="title_aboutSite">
    <h1>各温泉施設までの最寄駅からの道のりなどの詳細情報<br>
        は下部のボタンより調べることが可能です。</h1>
    <a href="<?php echo esc_url(home_url('onsen_infomation')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/viewMore.png" alt="このボタンをクリックすると最寄駅から温泉までの道のりの情報や施設の情報を取得することが可能です。" id="Button_viewMore"></a>
</div>

<img src="<?php echo get_template_directory_uri(); ?>/images/BackImg_Sea.png" alt="温泉から見える湯の川の綺麗な海の眺めを捉えた写真" id="BackImg_home">

<!-- お知らせ -->
<div class="homeContent">
    <img src="<?php echo get_template_directory_uri(); ?>/images/h1_News.png" alt="以下にはニュースがまとめられています" id="title_aboutSite">

    <?php
    $news_cat_id = get_cat_ID('news');
    $args = array(
        'posts_per_page' => 5,
        'cat' => $news_cat_id,
        // 'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $query = new WP_Query($args);
    ?>
    <div class="news">
        <div class="news_articles">
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="news_articles_article">
                        <div class="news_articles_article_date">
                            <?php the_time('Y.m.d'); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>">
                            <div class="news_articles_article_title">
                                <!-- <?php the_title(); ?> -->
                                <?php
                                $content = str_replace('\n', '', mb_substr(strip_tags($post->post_title), 0, 20));
                                if (mb_strlen($post->post_title) <= 20) {
                                    echo $content;
                                    // echo mb_strlen($post->post_title);
                                } else {
                                    echo $content . '...';
                                    // echo mb_strlen($post->post_title);
                                }
                                // echo mb_strlen($post->post_content)-52; 何故か52語プラスで表示される。
                                ?>
                            </div>
                        </a>
                    </div>
            <?php endwhile;
            endif;
            wp_reset_postdata(); ?>
        </div>
    </div>
    <a href="<?php echo esc_url(home_url('news')); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/viewMore.png" alt="このボタンをクリックするとお知らせを閲覧することができます。" id="Button_viewMore">
    </a>
</div>

<div class="homeContent">
    <img src="<?php echo get_template_directory_uri(); ?>/images/h1_Contact.png" alt="以下にはお問い合わせに関する情報がまとまっています。" id="title_aboutNews">
    <h1>お問い合わせは詳細ボタンから行えます。</h1>
    <a href="<?php echo esc_url(home_url('contact')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/viewMore.png" alt="このボタンをクリックすると最寄駅から温泉までの道のりの情報や施設の情報を取得することが可能です。" id="Button_viewMore"></a>
</div>
<?php get_footer(); ?>