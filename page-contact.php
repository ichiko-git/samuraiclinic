<?php get_header(); ?>
    <main>
      <!-- サブビジュアル -->
      <div class="subvisual">
        <div class="subvisual__title">
          <h1 class="subvisual__title--en">Contact</h1>
          <p class="subvisual__title--ja">ご予約・お問い合わせ</p>
        </div>
        <div class="subvisual__image">
          <picture>
            <source
              media="(max-width: 768px)"
              srcset="<?php echo get_template_directory_uri();?>/images/contact/SP-CONTACT-subvisual.png"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/images/contact/CONTACT-subvisual.png"
              alt="ご予約・お問い合わせ"
              class="subvisual__image-img"
            />
          </picture>
        </div>
      </div>
      <!-- ぱんくずリスト -->
      <div class="topnav">
        <ul class="topnav__list">
          <li class="topnav__item">ホーム</li>
          <li class="topnav__item">ご予約・お問い合わせ</li>
        </ul>
      </div>
      <div class="container container__contact">
        <!-- お電話でのご予約・お問い合わせ -->
        <section class="contact__phone">
          <h2 class="contact__title">お電話でのご予約・お問い合わせ</h2>
          <p class="contact__text">
            〒101-0022 東京都千代田区神田練塀町300番地<br />住友不動産秋葉原駅前ビル
            5F
          </p>
          <p class="contact__text">
            tel:<span class="contact__tel">03-1234-5678</span>
          </p>
        </section>
        <!-- ご予約・お問い合わせフォーム -->
        <section class="contact__form">
          <h2 class="contact__title">ご予約・お問い合わせフォーム</h2>
          <p class="contact__text">※ 2営業日以内にご返信いたします。</p>
          <?php echo do_shortcode('[wpforms id="61"]'); ?>
        </section>
      </div>
<?php get_footer(); ?>