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
      <div class="container container__page">
        <div class="news-page-area">
        <!-- 投稿記事内容 -->
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
          <article class="page__content">
            <h1 class="page__content-title">
              <?php the_title(); ?>
            </h1>
            <div class="page__content-item">
              <time datetime="<?php echo get_the_date(); ?>" class="page__content-date">
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
            <div class="page__content-image">
              <img
                src="<?php the_post_thumbnail_url();?>"
                alt="<?php the_title(); ?>"
                class="page__content-img"
              />
            </div>
            <?php the_content(); ?>
          </article>
            <?php endwhile; ?>
          <?php endif; ?>

          <!-- ページネーション -->
          <div class="page__link">
            <?php if(get_previous_post_link()) : ?>
            <a href="<?php echo get_permalink(get_previous_post()); ?>" class="prev-news">前の記事へ</a>
            <?php endif; ?>
            <a href="<?php echo home_url(); ?>/news"><span>お知らせ</span>一覧</a>
            <?php if(get_next_post_link()) : ?>
            <a href="<?php echo get_permalink(get_next_post()); ?>" class="next-news">次の記事へ</a>
            <?php endif; ?>
          </div>
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