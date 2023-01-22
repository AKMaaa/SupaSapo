<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/SpaSapo_favicon.png">
    <title>SpaSapo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/home.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/head.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/footer.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>

<body>
    <img src="<?php echo get_template_directory_uri(); ?>/images/jumpButton_Top.png" alt="ページの最上部に遷移するボタンです。" id="button_jumpTop">
    <header>
        <div class="headList_Logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/SpaSapo_logo.png" alt="当サイトのロゴ" id="SiteLogo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Audio_Guide.png" alt="当サイトは音声案内機能がついております" id="SiteAudioGuide">
        </div>
        <div class="headMenu">
            <ul>
                <a href=""><li class="ListRightBorder">当サイトについて</li></a>
                <a href=""><li class="ListRightBorder">温泉情報</li></a>
                <a href=""><li class="ListRightBorder">お知らせ</li></a>
                <a href=""><li class="ListRightBorder">お問い合わせ</li></a>
            </ul>
        </div>