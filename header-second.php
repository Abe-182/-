<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <title>犬鷲探検隊</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="東北楽天ゴールデンイーグルスの魅力を紹介しています。筆者の“疫病神”っぷりと併せてお楽しみください。">
    <!-- <link rel="shortcut icon" href="img/favicon.png"> -->
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri(). '/img/favicon.png'); ?>">
    <!-- <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css"> -->
    <!-- プラグイン「slick」のcssを読み込む -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"> -->
<!-- style.css -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- googlefonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet"> -->
    <?php wp_head(); ?>
</head>

<body>
    <header id="header" class="container">
        <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo3.png' ); ?>"></a>
<!-- ナビゲーション -->
<nav id="nav">
            <ul class="nav-menu">
                <li><a href="<?php echo esc_url(home_url('/rice')); ?>">メシ</a></li>
                <li><a href="<?php echo esc_url(home_url('/view')); ?>">風景</a></li>
                <li><a href="<?php echo esc_url(home_url('/game')); ?>">試合</a></li>
                <li><a href="<?php echo esc_url(home_url('/about')); ?>">「犬鷲探検隊」とは</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">ご質問</a></li>
            </ul>
        </nav>
        <!-- 透過背景 -->
        <div class="mask"></div>
        <!-- ハンバーガーメニューボタン -->
        <div class="toggle_btn">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </header>