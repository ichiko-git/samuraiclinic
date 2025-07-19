<?php get_header(); ?>
    <main>
      <!-- サブビジュアル -->
      <div class="subvisual">
        <div class="subvisual__title">
          <h1 class="subvisual__title--en">Price</h1>
          <p class="subvisual__title--ja">コース・料金</p>
        </div>
        <div class="subvisual__image">
          <picture>
            <source
              media="(max-width: 768px)"
              srcset="<?php echo get_template_directory_uri();?>/images/price/SP-PRICE-subvisual.png"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/images/price/PRICE-subvisual.png"
              alt="コース・料金"
              class="subvisual__image-img"
            />
          </picture>
        </div>
      </div>
      <!-- ぱんくずリスト -->
      <div class="topnav">
        <div class="topnav__list">
        <?php if ( function_exists( 'bcn_display' ) ) {
          bcn_display();
        } ?>
        </div>
      </div>
      <!-- コース・料金 -->
      <section class="price">
        <div class="container__price">
          <h2 class="h2__title">コース・料金</h2>
          <p class="course__subtitle">
            当院では保険診療、自費診療ともに<br />ご対応しております
          </p>
          <div class="course__items">
            <div class="course__item">
              <div class="course__item-image">
                <img
                  src="<?php echo get_template_directory_uri();?>/images/top/TOP-course1.png"
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
                  src="<?php echo get_template_directory_uri();?>/images/top/TOP-course2.png"
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
        </div>
      </section>
      <!-- 保険診療 -->
      <section class="insurance">
        <div class="container__insurance">
          <div class="insurance__image">
            <img
              src="<?php echo get_template_directory_uri();?>/images/top/TOP-course1.png"
              alt="保険診療"
              class="insurance__img"
            />
          </div>
          <div class="insurance__content">
            <h2 class="insurance__header--en">Insurance</h2>
            <p class="insurance__header--ja">保険診療</p>
            <p class="insurance__desc">
              健康保険の適用は、慢性化していない、急性のけがのみが対象となります。<br />「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。
            </p>
            <ul class="insurance__list">
              <li class="insurance__item">骨折・打撲・捻挫・脱臼</li>
              <li class="insurance__item">スポーツ診療</li>
              <li class="insurance__item">交通事故</li>
            </ul>
          </div>
        </div>
      </section>
      <!-- 自費診療 -->
      <section class="selfpay">
        <div class="container__selfpay">
          <div class="selfpay__image">
            <img
              src="<?php echo get_template_directory_uri();?>/images/top/TOP-course2.png"
              alt="自費診療"
              class="selfpay__img"
            />
          </div>
          <div class="selfpay__content">
            <h2 class="selfpay__header--en">Self-pay</h2>
            <p class="selfpay__header--ja">自費診療</p>
            <p class="selfpay__desc">
              慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は健康保険の適用がなく、全額自己負担となります。
            </p>
            <ul class="selfpay__list">
              <li class="selfpay__item">腰痛・肩こり</li>
              <li class="selfpay__item">冷え性・だるさ</li>
              <li class="selfpay__item">骨盤・背骨矯正</li>
            </ul>
            <p class="selfpay__price">
              初回　8,800円（税込） / 50分<br />2回目以降　6,600円（税込） /30分
            </p>
          </div>
        </div>
      </section>
<?php get_footer(); ?>