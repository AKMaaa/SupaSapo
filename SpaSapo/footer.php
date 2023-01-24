<?php wp_footer(); ?>
<footer>
    <img src="<?php echo get_template_directory_uri(); ?>/images/SpaSapo_logo_footer.png" alt="当サイトのロゴ" id="SiteLogo_footer">
    <div class="footerLinkList">
        <ul>
            <a href="<?php echo esc_url(home_url('home')); ?>">
                <li>当サイトについて</li>
            </a>
            <a href="<?php echo esc_url(home_url('onsen_infomation')); ?>">
                <li>温泉情報</li>
            </a>
            <a href="<?php echo esc_url(home_url('tos')); ?>">
                <li>利用規約</li>
            </a>
            <a href="<?php echo esc_url(home_url('news')); ?>">
                <li>おしらせ</li>
            </a>
            <a href="<?php echo esc_url(home_url('contact')); ?>">
                <li>お問い合わせ</li>
            </a>
            <a href="<?php echo esc_url(home_url('privacy_policy')); ?>">
                <li>プライバシーポリシー</li>
            </a>
        </ul>
    </div>
    <p id="copyRight">Copyright © SpaSapo.com. All Rights Reserved.</p>
</footer>
</body>

</html>