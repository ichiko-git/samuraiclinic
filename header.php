<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    <meta
      name="description"
      content="秋葉原駅徒歩1分のSAMURAI整体院。丁寧なカウンセリングとオーダーメイド施術で、肩こり・腰痛など様々なお悩みに対応。初めての方も安心してご来院いただけます。最新情報やコース案内も掲載中。"
    />
    <title>ホーム - SAMURAI整体院</title>
    <!-- googleフォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300..800;1,300..800&family=Noto+Sans+JP:wght@100..900&family=Shippori+Mincho&display=swap"
      rel="stylesheet"
    />
    <!-- リセットCSS -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <!-- CSS読み込み -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css" />
    <!-- Swiper CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!-- ヘッダー -->
    <?php
    // ページタイプを判定
    $header_class = '';
    $link_class = '';
    if (is_front_page()) {
      // トップページのみclassを追加
      $header_class = 'header--top';
      $link_class = 'header__nav-link--top';
    } else {
      // 何もつけない
    }
    ?>
    <header class="header <?php echo $header_class; ?>">
      <h1 class="header__logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img
            src="<?php echo get_template_directory_uri();?>/images/top/logo.svg"
            alt="SAMURAI整体院のロゴ"
            class="header__logo-img"
          />
        </a>
      </h1>
      <!-- ハンバーガーメニュー -->
      <button class="header__hamburger--open" aria-label="メニューを開く">
        <span class="header__hamburger-line"></span>
        <span class="header__hamburger-line"></span>
        <span class="header__hamburger-line"></span>
      </button>
      <!-- PC用ナビゲーション -->
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="header__nav-item">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="header__nav-link <?php echo $link_class; ?>">ホーム</a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo home_url(); ?>/about" class="header__nav-link <?php echo $link_class; ?>">当院について</a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo home_url(); ?>/course" class="header__nav-link <?php echo $link_class; ?>">コース・料金</a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo home_url(); ?>/news" class="header__nav-link <?php echo $link_class; ?>">お知らせ</a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo home_url(); ?>/voice" class="header__nav-link <?php echo $link_class; ?>">お客様の声</a>
          </li>
          <li class="header__nav-item">
            <a href="<?php echo home_url(); ?>/contact" class="header__nav-link <?php echo $link_class; ?> btn btn--reserve"
              >ご予約・お問い合わせ</a
            >
          </li>
        </ul>
      </nav>
      <!-- ドロワーメニュー -->
      <nav class="header__drawer">
        <div class="header__drawer-menu">
          <h1 class="header__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img
                src="<?php echo get_template_directory_uri();?>/images/top/logo.svg"
                alt="SAMURAI整体院のロゴ"
                class="header__logo-img"
              />
            </a>
          </h1>
          <button
            class="header__hamburger--close"
            aria-label="メニューを閉じる"
          >
            <span class="header__hamburger-line"></span>
            <span class="header__hamburger-line"></span>
          </button>
        </div>
        <p class="header__drawer-title">メニュー</p>
        <ul class="header__drawer-list">
          <li class="header__drawer-item">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="header__drawer-link">ホーム</a>
          </li>
          <li class="header__drawer-item">
            <a href="<?php echo home_url(); ?>/about" class="header__drawer-link">当院について</a>
          </li>
          <li class="header__drawer-item">
            <a href="<?php echo home_url(); ?>/course" class="header__drawer-link">コース・料金</a>
          </li>
          <li class="header__drawer-item">
            <a href="<?php echo home_url(); ?>/news" class="header__drawer-link">お知らせ</a>
          </li>
          <li class="header__drawer-item">
            <a href="<?php echo home_url(); ?>/voice" class="header__drawer-link">お客様の声</a>
          </li>
          <li class="header__drawer-item">
            <a href="<?php echo home_url(); ?>/contact" class="header__drawer-link btn btn--reserve"
              >ご予約・お問い合わせ</a
            >
          </li>
        </ul>
      </nav>
      <div class="overlay"></div>
    </header>