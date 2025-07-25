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
    <link rel="stylesheet" href="css/style.css" />
    <!-- Swiper CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
  </head>
  <body>
    <!-- ヘッダー -->
    <header class="header--top">
      <h1 class="header__logo">
        <a href="index.html">
          <img
            src="images/top/logo.svg"
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
            <a href="index.html" class="header__nav-link">ホーム</a>
          </li>
          <li class="header__nav-item">
            <a href="about.html" class="header__nav-link">当院について</a>
          </li>
          <li class="header__nav-item">
            <a href="price.html" class="header__nav-link">コース・料金</a>
          </li>
          <li class="header__nav-item">
            <a href="news.html" class="header__nav-link">お知らせ</a>
          </li>
          <li class="header__nav-item">
            <a href="voice.html" class="header__nav-link">お客様の声</a>
          </li>
          <li class="header__nav-item">
            <a href="contact.html" class="header__nav-link btn btn--reserve"
              >ご予約・お問い合わせ</a
            >
          </li>
        </ul>
      </nav>
      <!-- ドロワーメニュー -->
      <nav class="header__drawer">
        <div class="header__drawer-menu">
          <h1 class="header__logo">
            <a href="index.html">
              <img
                src="images/top/logo.svg"
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
            <a href="index.html" class="header__drawer-link">ホーム</a>
          </li>
          <li class="header__drawer-item">
            <a href="about.html" class="header__drawer-link">当院について</a>
          </li>
          <li class="header__drawer-item">
            <a href="price.html" class="header__drawer-link">コース・料金</a>
          </li>
          <li class="header__drawer-item">
            <a href="news.html" class="header__drawer-link">お知らせ</a>
          </li>
          <li class="header__drawer-item">
            <a href="voice.html" class="header__drawer-link">お客様の声</a>
          </li>
          <li class="header__drawer-item">
            <a href="contact.html" class="header__drawer-link btn btn--reserve"
              >ご予約・お問い合わせ</a
            >
          </li>
        </ul>
      </nav>
      <div class="overlay"></div>
    </header>
    <main>
      <!-- メインビジュアル -->
      <section class="mv">
        <div class="mv__catch">
          <p class="mv__catch-text">
            <span class="mv__catch-line">根本的な症状改善を</span><br />
            <span class="mv__catch-line">サポートします</span>
          </p>
        </div>
        <!-- Swiperカルーセル -->
        <!-- Slider main container -->
        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <picture>
                <source
                  media="(max-width: 768px)"
                  srcset="images/top/SP-TOP-carousel1.png"
                />
                <img
                  src="images/top/TOP-carousel1.png"
                  alt="メインビジュアル1"
                  class="mv__image-img"
                />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source
                  media="(max-width: 768px)"
                  srcset="images/top/SP-TOP-carousel2.png"
                />
                <img
                  src="images/top/TOP-carousel2.png"
                  alt="メインビジュアル2"
                  class="mv__image-img"
                />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source
                  media="(max-width: 768px)"
                  srcset="images/top/SP-TOP-carousel3.png"
                />
                <img
                  src="images/top/TOP-carousel3.png"
                  alt="メインビジュアル3"
                  class="mv__image-img"
                />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source
                  media="(max-width: 768px)"
                  srcset="images/top/SP-TOP-carousel4.png"
                />
                <img
                  src="images/top/TOP-carousel4.png"
                  alt="メインビジュアル4"
                  class="mv__image-img"
                />
              </picture>
            </div>
          </div>
          <!-- If we need scrollbar -->
          <div class="swiper-scrollbar"></div>
        </div>
      </section>
      <!-- ニュース -->
      <section class="news">
        <div class="news__title">
          <h2 class="news__title--en">News</h2>
          <span class="news__title--ja">お知らせ</span>
        </div>
        <article class="news__item">
          <div>
            <time class="news__item-date" datetime="2022/12/21"
              >2022/12/21</time
            >
            <div class="news__item-tag">営業日時</div>
          </div>
          <a href="page-name.html" class="news__item-title"
            >年末年始の営業時間について</a
          >
        </article>
        <div class="news__footer">
          <a href="news.html" class="news__link">→ お知らせ一覧へ</a>
        </div>
      </section>
      <!-- コンセプト -->
      <section class="concept">
        <div class="container__concept">
          <div class="imagegroup">
            <div class="image__main">
              <img
                src="images/top/TOP-imagegroup-main.png"
                alt="特徴メインイメージ"
                class="imagegroup-img"
              />
            </div>
            <div class="image__sub1">
              <img
                src="images/top/TOP-imagegroup-sub1.png"
                alt="特徴サブイメージ１"
                class="imagegroup-img"
              />
            </div>
            <div class="image__sub2">
              <img
                src="images/top/TOP_imagegroup-sub2.png"
                alt="特徴サブイメージ２"
                class="imagegroup-img"
              />
            </div>
          </div>
          <div class="concept__content">
            <h2 class="concept__header--en">Concept</h2>
            <p class="concept__header--ja">特長</p>
            <p class="concept__title">
              日々変化する<br class="concept__title-br" />カラダと心を癒す<br
                class="concept__title-br"
              />パーソナル<br class="concept__title-br" />トレーナーとして
            </p>
            <p class="concept__subtitle">
              当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。<br /><br />
              また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。<br /><br />
              ご不安な点や疑問点などお気軽にご相談くださいませ。
            </p>
            <a href="about.html" class="concept__link">→ 当院について</a>
          </div>
        </div>
      </section>
      <!-- コース・料金 -->
      <section class="course">
        <div class="container__course">
          <h2 class="h2__title">コース・料金</h2>
          <p class="course__subtitle">
            当院では保険診療、自費診療ともに<br />ご対応しております
          </p>
          <div class="course__items">
            <div class="course__item">
              <div class="course__item-image">
                <img
                  src="images/top/TOP-course1.png"
                  alt="保険診療"
                  class="course__item-img"
                />
              </div>
              <div class="course__item-desc">
                <h3 class="course__item-title">保険診療</h3>
                <ul class="course__item-lists">
                  <li class="course__item-list">骨折・打撲・捻挫・脱臼</li>
                  <li class="course__item-list">スポーツ診療</li>
                  <li class="course__item-list">交通事故</li>
                </ul>
              </div>
            </div>
            <div class="course__item">
              <div class="course__item-image">
                <img
                  src="images/top/TOP-course2.png"
                  alt="自費診療"
                  class="course__item-img"
                />
              </div>
              <div class="course__item-desc">
                <h3 class="course__item-title">自費診療</h3>
                <ul class="course__item-lists">
                  <li class="course__item-list">腰痛・肩こり</li>
                  <li class="course__item-list">冷え性・だるさ</li>
                  <li class="course__item-list">骨盤・背骨矯正</li>
                </ul>
              </div>
            </div>
          </div>
          <a href="price.html" class="course__link">→ コース・料金詳細へ</a>
        </div>
      </section>
      <!-- お客様の声 -->
      <section class="voice">
        <div class="voice__head">
          <div class="voice__subtract"></div>
        </div>
        <div class="container__voice">
          <h2 class="h2__title">お客様の声</h2>
          <p class="voice__subtitle">
            痛みの改善に加えて自分で予防も<br />できるようになりました
          </p>
          <div class="voice__items">
            <div class="voice__item">
              <div class="voice__item-image">
                <img
                  src="images/top/TOP-voice-user1.png"
                  alt="S・K様　30代女性"
                  class="voice__item-img"
                />
              </div>
              <div class="voice__item-desc">
                <h3 class="voice__item-name">S・K様　30代女性</h3>
                <p class="voice__item-text">
                  1ヶ月で腰の痛みが軽減しました。自分で自宅でできるケアも教えていただき、お任せしてよかったです。
                </p>
              </div>
            </div>
            <div class="voice__item">
              <div class="voice__item-image">
                <img
                  src="images/top/TOP-voice-user2.png"
                  alt="T・M様　40代男性"
                  class="voice__item-img"
                />
              </div>
              <div class="voice__item-desc">
                <h3 class="voice__item-name">T・M様　40代男性</h3>
                <p class="voice__item-text">
                  マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。
                </p>
              </div>
            </div>
            <div class="voice__item">
              <div class="voice__item-image">
                <img
                  src="images/top/TOP-voice-user3.png"
                  alt="S・T様　60代女性"
                  class="voice__item-img"
                />
              </div>
              <div class="voice__item-desc">
                <h3 class="voice__item-name">S・T様　60代女性</h3>
                <p class="voice__item-text">
                  転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。
                </p>
              </div>
            </div>
          </div>
          <a href="voice.html" class="voice__link">→ お客様の声一覧へ</a>
        </div>
      </section>
      <!-- アクセス -->
      <section class="access">
        <div class="container__access">
          <h2 class="h2__title">お気軽にご来院ください</h2>
          <div class="access__contents">
            <div class="access__content">
              <p class="access__trans">JR「秋葉原駅」より徒歩1分</p>
              <p class="access__adress">
                〒101-0022<br />東京都千代田区神田練塀町300番地<br />住友不動産秋葉原駅前ビル5F
              </p>
              <p class="access__tel">tel: <span>03-1234-5678</span></p>
              <table class="access__table">
                <tr class="access__table-row">
                  <th class="access__table-header access__table-time">
                    営業時間
                  </th>
                  <th class="access__table-header">月</th>
                  <th class="access__table-header">火</th>
                  <th class="access__table-header">水</th>
                  <th class="access__table-header">木</th>
                  <th class="access__table-header">金</th>
                  <th class="access__table-header">土</th>
                  <th class="access__table-header">日</th>
                </tr>
                <tr class="access__table-row">
                  <td class="access__table-data access__table-time">
                    9:00〜12:30
                  </td>
                  <td class="access__table-data">●</td>
                  <td class="access__table-data">●</td>
                  <td class="access__table-data">−</td>
                  <td class="access__table-data">●</td>
                  <td class="access__table-data">●</td>
                  <td class="access__table-data">●</td>
                  <td class="access__table-data">●</td>
                </tr>
                <tr class="access__table-row">
                  <td class="access__table-data access__table-time">
                    15:30〜20:00
                  </td>
                  <td class="access__table-data">●</td>
                  <td class="access__table-data">●</td>
                  <td class="access__table-data">−</td>
                  <td class="access__table-data">●</td>
                  <td class="access__table-data">●</td>
                  <td class="access__table-data">●</td>
                  <td class="access__table-data">●</td>
                </tr>
              </table>
              <a href="contact.html" class="access__link"
                >ご予約・お問い合わせはこちらから</a
              >
            </div>
            <div class="access__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.8275574319946!2d135.8248718263107!3d34.684301422925415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60013a29d1dd2621%3A0x540d42181874f344!2z6L-R6YmE5aWI6Imv6aeF!5e0!3m2!1sja!2sjp!4v1749909255471!5m2!1sja!2sjp"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- フッター -->
    <footer>
      <div class="footer__contents">
        <div class="footer__logo">
          <a href="#">
            <img
              src="images/top/logo.svg"
              alt="SAMURAI整体院のロゴ"
              class="footer__logo-img"
            />
          </a>
        </div>
        <nav class="footer__nav">
          <ul class="footer__nav-list">
            <li class="footer__nav-item">
              <a href="index.html" class="footer__nav-link">TOP</a>
            </li>
            <li class="footer__nav-item">
              <a href="about.html" class="footer__nav-link">当院について</a>
            </li>
            <li class="footer__nav-item">
              <a href="price.html" class="footer__nav-link">コース・料金</a>
            </li>
            <li class="footer__nav-item">
              <a href="news.html" class="footer__nav-link">お知らせ</a>
            </li>
            <li class="footer__nav-item">
              <a href="voice.html" class="footer__nav-link">お客様の声</a>
            </li>
            <li class="footer__nav-item">
              <a href="contact.html" class="footer__nav-link"
                >ご予約・お問い合わせ</a
              >
            </li>
          </ul>
        </nav>
      </div>
      <div class="footer__copyright">
        <small>&copy;2023 SAMURAI整体院</small>
      </div>
      <a id="back-btn" href="#">
        <div class="back-btn-arrow"></div>
      </a>
    </footer>
    <!-- Swiper CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- JavaScript読み込み -->
    <script src="js/script.js"></script>
  </body>
</html>
