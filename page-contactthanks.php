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
      <!-- サンクスページ -->
      <section class="thanks">
        <div class="container__thanks">
          <h2 class="thanks__title">お問い合わせ内容を<br />送信しました</h2>
          <p class="thanks__text">
            ありがとうございます。２営業日以内にご返信いたします。
          </p>
          <a href="<?php echo esc_url(home_url('/')); ?>" class="contact__btn">戻る</a>
        </div>
      </section>
<?php get_footer(); ?>