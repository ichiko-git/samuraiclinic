<?php get_header(); ?>
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
                  srcset="<?php echo get_template_directory_uri();?>/images/top/SP-TOP-carousel1.png"
                />
                <img
                  src="<?php echo get_template_directory_uri();?>/images/top/TOP-carousel1.png"
                  alt="メインビジュアル1"
                  class="mv__image-img"
                />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source
                  media="(max-width: 768px)"
                  srcset="<?php echo get_template_directory_uri();?>/images/top/SP-TOP-carousel2.png"
                />
                <img
                  src="<?php echo get_template_directory_uri();?>/images/top/TOP-carousel2.png"
                  alt="メインビジュアル2"
                  class="mv__image-img"
                />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source
                  media="(max-width: 768px)"
                  srcset="<?php echo get_template_directory_uri();?>/images/top/SP-TOP-carousel3.png"
                />
                <img
                  src="<?php echo get_template_directory_uri();?>/images/top/TOP-carousel3.png"
                  alt="メインビジュアル3"
                  class="mv__image-img"
                />
              </picture>
            </div>
            <div class="swiper-slide">
              <picture>
                <source
                  media="(max-width: 768px)"
                  srcset="<?php echo get_template_directory_uri();?>/images/top/SP-TOP-carousel4.png"
                />
                <img
                  src="<?php echo get_template_directory_uri();?>/images/top/TOP-carousel4.png"
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
        <?php
        // お知らせで表示する投稿を1件取得
        $args = array(
          // 投稿タイプ
          'post_type'      => 'post',
          // 1ページに表示する投稿数
          'posts_per_page' => 1,
        );
        // データの取得
        $posts = get_posts($args);
        // ループ処理
        foreach($posts as $post):
        ?>
        <article class="news__item">
          <div>
            <time class="news__item-date" datetime="<?php echo get_the_date(); ?>">
              <?php echo get_the_date(); ?>
            </time>
            <div class="news__item-tag">
              <?php
              $categories = get_the_category();
              if ( ! empty( $categories ) ) {
                echo esc_html( $categories[0]->name );
              }
              ?>
            </div>
          </div>
          <a href="<?php the_permalink(); ?>" class="news__item-title">
            <?php the_title(); ?>
          </a>
        </article>
        <?php
        // ループ処理
        endforeach;
        // 使用した投稿データをリセット
        wp_reset_postdata();
        ?>
        <div class="news__footer">
          <a href="<?php echo home_url(); ?>/news" class="news__link">→ お知らせ一覧へ</a>
        </div>
      </section>
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
            <a href="<?php echo home_url(); ?>/about" class="concept__link">→ 当院について</a>
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
          <a href="<?php echo home_url(); ?>/price" class="course__link">→ コース・料金詳細へ</a>
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
                  src="<?php echo get_template_directory_uri();?>/images/top/TOP-voice-user1.png"
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
                  src="<?php echo get_template_directory_uri();?>/images/top/TOP-voice-user2.png"
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
                  src="<?php echo get_template_directory_uri();?>/images/top/TOP-voice-user3.png"
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
          <a href="<?php echo home_url(); ?>/voice" class="voice__link">→ お客様の声一覧へ</a>
        </div>
      </section>
<?php get_footer(); ?>