<?php get_header(); ?>
    <main>
      <!-- サブビジュアル -->
      <div class="subvisual">
        <div class="subvisual__title">
          <h1 class="subvisual__title--en">About</h1>
          <p class="subvisual__title--ja">当院について</p>
        </div>
        <div class="subvisual__image">
          <picture>
            <source
              media="(max-width: 768px)"
              srcset="<?php echo get_template_directory_uri();?>/images/about/SP-ABOUT-subvisual.png"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/images/about/ABOUT-subvisual.png"
              alt="当院について"
              class="subvisual__image-img"
            />
          </picture>
        </div>
      </div>
      <!-- ぱんくずリスト -->
      <div class="topnav">
        <ul class="topnav__list">
          <li class="topnav__item">ホーム</li>
          <li class="topnav__item">当院について</li>
        </ul>
      </div>
      <!-- コンセプト -->
      <section class="concept">
        <div class="container__concept">
          <div class="imagegroup">
            <div class="image__main">
              <img
                src="<?php echo get_template_directory_uri();?>/images/top/TOP-imagegroup-main.png"
                alt="特徴メインイメージ"
                class="imagegroup-img"
              />
            </div>
            <div class="image__sub1">
              <img
                src="<?php echo get_template_directory_uri();?>/images/top/TOP-imagegroup-sub1.png"
                alt="特徴サブイメージ１"
                class="imagegroup-img"
              />
            </div>
            <div class="image__sub2">
              <img
                src="<?php echo get_template_directory_uri();?>/images/top/TOP_imagegroup-sub2.png"
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
          </div>
        </div>
      </section>
      <!-- フロー -->
      <section class="flow">
        <div class="container__flow">
          <div class="imagegroup">
            <div class="image__main">
              <img
                src="<?php echo get_template_directory_uri();?>/images/about/ABOUT-imagegroup-main.png"
                alt="フローメインイメージ"
                class="imagegroup-img"
              />
            </div>
            <div class="image__sub1">
              <img
                src="<?php echo get_template_directory_uri();?>/images/about/ABOUT-imagegrour-sub1.png"
                alt="フローサブイメージ１"
                class="imagegroup-img"
              />
            </div>
            <div class="image__sub2">
              <img
                src="<?php echo get_template_directory_uri();?>/images/about/ABOUT-imagegroup-sub2.png"
                alt="フローサブイメージ２"
                class="imagegroup-img"
              />
            </div>
          </div>
          <div class="flow__content">
            <h2 class="flow__header--en">Flow</h2>
            <p class="flow__header--ja">施術の流れ</p>
            <ol class="flow__list">
              <li class="flow__item">受付</li>
              <li class="flow__item">問診票のご記入</li>
              <li class="flow__item">カウンセリング</li>
              <li class="flow__item">施術</li>
              <li class="flow__item">アフターカウンセリング</li>
            </ol>
          </div>
        </div>
      </section>
      <!-- 根本改善のポイント -->
      <section class="point">
        <div class="container__point">
          <h2 class="h2__title">根本改善のポイント</h2>
          <p class="point__subtitle">
            お体の状態や生活習慣、ご要望を丁寧にお伺いします。<br />ご自身でできるケアなども含めて施術方針をお作りします。
          </p>
          <div class="point__items">
            <div class="point__item">
              <div class="point__item-image">
                <img
                  src="<?php echo get_template_directory_uri();?>/images/about/ABOUT-Point1.png"
                  alt=" 丁寧なカウンセリング"
                  class="point__item-img"
                />
              </div>
              <div class="point__item-desc">
                <h3 class="point__item-title">丁寧なカウンセリング</h3>
              </div>
            </div>
            <div class="point__item">
              <div class="point__item-image">
                <img
                  src="<?php echo get_template_directory_uri();?>/images/about/ABOUT-Point2.png"
                  alt="徹底的分析"
                  class="point__item-img"
                />
              </div>
              <div class="point__item-desc">
                <h3 class="point__item-title">徹底的分析</h3>
              </div>
            </div>
            <div class="point__item">
              <div class="point__item-image">
                <img
                  src="<?php echo get_template_directory_uri();?>/images/about/ABOUT-Point3.png"
                  alt="施術計画のご提案"
                  class="point__item-img"
                />
              </div>
              <div class="point__item-desc">
                <h3 class="point__item-title">施術計画のご提案</h3>
              </div>
            </div>
          </div>
        </div>
      </section>
<?php get_footer(); ?>