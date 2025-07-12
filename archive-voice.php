<?php get_header(); ?>
    <main>
      <!-- サブビジュアル -->
      <div class="subvisual">
        <div class="subvisual__title">
          <h1 class="subvisual__title--en">Voice</h1>
          <p class="subvisual__title--ja">お客様の声</p>
        </div>
        <div class="subvisual__image">
          <picture>
            <source
              media="(max-width: 768px)"
              srcset="<?php echo get_template_directory_uri();?>/images/voice/SP-VOICE-subvisual.png"
            />
            <img
              src="<?php echo get_template_directory_uri();?>/images/voice/VOICE-subvisual.png"
              alt="お客様の声"
              class="subvisual__image-img"
            />
          </picture>
        </div>
      </div>
      <!-- ぱんくずリスト -->
      <div class="topnav">
        <ul class="topnav__list">
          <li class="topnav__item">ホーム</li>
          <li class="topnav__item">お客様の声</li>
        </ul>
      </div>
      <!-- お客様の声 -->
      <div class="container__voice2">
        <div class="voice__contents">
          <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
          <div class="voice__content">
            <div class="voice__image">
              <img
                src="<?php the_post_thumbnail_url();?>"
                alt="<?php the_title(); ?>"
                class="voice__img"
              />
            </div>
            <div class="voice__desc">
              <h2 class="voice__title"><?php the_title(); ?></h2>
              <p class="voice__text">
                <?php the_content(); ?>
              </p>
            </div>
          </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
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
<?php get_footer(); ?>