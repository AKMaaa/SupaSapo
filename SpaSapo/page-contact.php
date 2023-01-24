<?php
get_header("contact");
?>
</header>
<div class="">
    <img src="<?php echo get_template_directory_uri(); ?>/images/h1_Contact.png" alt="お問い合わせはこちらから" id="title_aboutSite">
    <div class="contact_form">
        <?php echo do_shortcode('[contact-form-7 id="108" title="コンタクトフォーム 1"]'); ?>
    </div>
</div>
<?php
get_footer(); ?>