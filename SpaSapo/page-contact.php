<?php
get_header("contact");
?>
    </header>
    <img src="<?php echo get_template_directory_uri(); ?>/images/h1_Contact.png" alt="お問い合わせはこちらから" id="title_aboutSite">
    <div class="contact_form">
        <?php echo do_shortcode('[contact-form-7 id="23" title="[contact-form-7 id="23" title="contact form"]'); ?>
    </div>
    <?php
    get_footer(); ?>