<?php get_header("onsen_infomation"); ?>
</header>
<div class="infoContent">
    <img src="<?php echo get_template_directory_uri(); ?>/images/h1_AboutInfo.png" alt="以下に温泉情報がまとめられています" id="title_aboutSite">
    <h1>各温泉施設で特徴的な機能をタグ別で分類しています。<br>下部でタグの説明を行います。</h1>
    <div class="tagContent">
        <div class="tagContent_comp">
            <div class="tag1">
                <p>貸切</p>
            </div>
            <p>貸切可能な温泉がある施設です</p>
        </div>
        <div class="tagContent_comp">
            <div class="tag2">
                <p>行きやすい</p>
            </div>
            <p>駅やバス停などからの道のりが容易な施設です</p>
        </div class="tagContent_comp">
        <div class="tagContent_comp">
            <div class="tag3">
                <p>サポート有り</p>
            </div>
            <p>スタッフによるサポートが受けられる施設です</p>
        </div>
        <div class="tagContent_comp">
            <div class="tag4">
                <p>バリアフリー</p>
            </div>
            <p>バリアフリーな設備が整った施設です</p>
        </div>
        <div class="tagContent_comp">
            <div class="tag5">
                <p>個室</p>
            </div>
            <p>風呂付の客室など個人で入れる温泉がある施設です</p>
        </div>
    </div>
</div>

<p id="intrInfomation">新型コロナウィルス感染症に係る諸情勢から、函館湯の川温泉エリアにおいてもご提供内容の変更・休館などの対応をとらせていただいている施設がございます。ご利用の際は、お手数ですが事前に直接施設にお問い合わせくださいますようお願い申し上げます。</p>
</div>

<div class="infomationOnsenContent">
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        // 'post_status' => 'publish',
        'paged' => $paged,
        'posts_per_page' => 6, // 表示件数
        'orderby'     => 'date',
        'category_name' => 'infomation',
        'order' => 'DESC'
    );
    $query = new WP_Query($args);
    ?>
    <div class="infomationPageContainer">
        <div class="infomation_articles">
            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="infomationContent">
                        <a href="<?php the_permalink(); ?>">
                            <div class="infomationContent_Title">
                                <?php the_title(); ?>
                            </div>
                            <div class="tagLists">
                                <?php
                                $posttags = get_the_tags();
                                if ($posttags) {
                                    foreach ($posttags as $tag) {
                                        if ($tag->name == "貸切") {
                                            echo '<div class="tagContent_compList"><div class="tag1">
                                        <p>' . $tag->name . '</p>
                                    </div></div>';
                                        } else if ($tag->name == "行きやすい") {
                                            echo '<div class="tagContent_compList"><div class="tag2">
                                        <p>' . $tag->name . '</p>
                                    </div></div>';
                                        } else if ($tag->name == "サポート有り") {
                                            echo '<div class="tagContent_compList"><div class="tag3">
                                        <p>' . $tag->name . '</p>
                                    </div></div>';
                                        } else if ($tag->name == "バリアフリー") {
                                            echo '<div class="tagContent_compList"><div class="tag4">
                                        <p>' . $tag->name . '</p>
                                    </div></div>';
                                        } else if ($tag->name == "個室") {
                                            echo '<div class="tagContent_compList"><div class="tag5">
                                        <p>' . $tag->name . '</p>
                                    </div></div>';
                                        }
                                    }
                                } ?>
                            </div>
                            <div class="infomationContent_Img">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                            <div class="infomationContet_another">
                                <?php the_excerpt(); ?>
                            </div>
                    </div>
                    </a>
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
</div>

<?php get_footer(); ?>