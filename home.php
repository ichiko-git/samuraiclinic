<?php get_header(); ?>
    <main>
      <!-- サブビジュアル -->
      <div class="subvisual">
        <div class="subvisual__title">
          <h1 class="subvisual__title--en">Infomation</h1>
          <p class="subvisual__title--ja">お知らせ</p>
        </div>
        <div class="subvisual__image">
          <picture>
            <source
              media="(max-width: 768px)"
              srcset="<?php echo get_template_directory_uri();?>/images/news/SP-NEWS-subvisual.png"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/images/news/NEWS-subvisual.png"
              alt="お知らせ"
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
      <div class="container container__news">
        <!-- ニュース記事一覧＋ページネーション -->
        <div class="news-list-area">
          <article class="news__contents">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="news__content">
              <div class="news__content-image">
                <a href="<?php the_permalink(); ?>">
                  <img
                    src="<?php the_post_thumbnail_url();?>"
                    alt="投稿記事サンプル"
                    class="news__content-img"
                  />
                </a>
              </div>
              <div class="news__content-desc">
                <h2 class="news__content-title">
                  <a href="<?php the_permalink(); ?>" class="news__content-link">
                    <?php the_title(); ?>
                  </a>
                </h2>
                <div>
                  <time datetime="<?php echo get_the_date(); ?>" class="news__content-date">
                    <?php echo get_the_date(); ?>
                  </time>
                  <?php
                    $categories = get_the_category();
                    $tag_class = 'news__item-tag';
                    $tag_label = '';
                    if ( ! empty( $categories ) ) {
                      $cat_name = $categories[0]->name;
                      $tag_label = esc_html($cat_name);
                      if ($cat_name === '営業日時') {
                        $tag_class .= ' news__item-tag--green';
                      } elseif ($cat_name === 'キャンペーン') {
                        $tag_class .= ' news__item-tag--orange';
                      } elseif ($cat_name === 'その他') {
                        $tag_class .= ' news__item-tag--blue';
                      }
                    }
                  ?>
                  <div class="<?php echo $tag_class ?>">
                      <?php echo $tag_label; ?>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
          </article>
          <!-- ページネーション -->
          <?php
            the_posts_pagination(array(
              'mid_size'  => 1,
              'prev_text' => '',
              'next_text' => '',
              'class'     => 'pager'
            ));
          ?>
        </div>
        <!-- サイドバー -->
        <aside class="category">
          <p class="category__title">カテゴリ</p>
          <ul class="category__list">
            <li class="category__item"><a href="#">営業日時</a></li>
            <li class="category__item"><a href="#">キャンペーン</a></li>
            <li class="category__item"><a href="#">その他</a></li>
          </ul>
        </aside>
      </div>
      
<?php get_footer(); ?>