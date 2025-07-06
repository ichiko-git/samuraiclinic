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
              <a href="<?php echo home_url(); ?>/contact" class="access__link"
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
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img
              src="<?php echo get_template_directory_uri();?>/images/top/logo.svg"
              alt="SAMURAI整体院のロゴ"
              class="footer__logo-img"
            />
          </a>
        </div>
        <nav class="footer__nav">
          <ul class="footer__nav-list">
            <li class="footer__nav-item">
              <a href="<?php echo esc_url(home_url('/')); ?>" class="footer__nav-link">TOP</a>
            </li>
            <li class="footer__nav-item">
              <a href="<?php echo home_url(); ?>/about" class="footer__nav-link">当院について</a>
            </li>
            <li class="footer__nav-item">
              <a href="<?php echo home_url(); ?>/course" class="footer__nav-link">コース・料金</a>
            </li>
            <li class="footer__nav-item">
              <a href="<?php echo home_url(); ?>/news" class="footer__nav-link">お知らせ</a>
            </li>
            <li class="footer__nav-item">
              <a href="<?php echo home_url(); ?>/voice" class="footer__nav-link">お客様の声</a>
            </li>
            <li class="footer__nav-item">
              <a href="<?php echo home_url(); ?>/contact" class="footer__nav-link"
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
    <script src="<?php echo get_template_directory_uri();?>/js/script.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
