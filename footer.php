<?php
/**
 * フッターテンプレート
 */
?>
</main>

<footer class="l-footer">
  <div class="l-footer__outline">
    <a href="" class="u-transparent">
      <section class="l-footer-map l-footer-buttonlink">
        <h2 class="l-footer-buttonlink__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ttl-area-map.svg" alt="軽井沢 星野エリアマップ" width="172" height="133"></h2>
        <p class="l-footer-map__text">Karuizawa Hoshino Area Map</p>
        <button class="c-button-block -white -arrow l-footer-buttonlink__button">施設を探す</button>
      </section>
    </a>
    <a href="" class="u-transparent">
      <section class="l-footer-concept l-footer-buttonlink">
        <h2 class="l-footer-buttonlink__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/txt-copy-white.svg" alt="森と、ひとつになる一日。" width="168" height="159"></h2>
        <p class="l-footer-concept__text">ゆれる木漏れ日、川のせせらぎ、鳥のさえずり。豊かな自然に包まれて、暮らすように一日を。</p>
        <button class="c-button-block -white -arrow l-footer-buttonlink__button">星野の森を歩く</button>
      </section>
    </a>
  </div>
  
  <div class="l-footer-important-news">
    <div class="l-container--primary">
      <div class="l-footer-important-news__inner">
        <h2 class="l-footer-important-news__title">重要なお知らせ</h2>

        <dl class="c-list-news l-footer-important-news__news">
          <div class="c-list-news__item">
            <dt class="c-list-news__date">2023.08.21</dt>
            <dt class="c-list-news__conts"><a href="">23年お盆期間の混雑予想</a></dt>
          </div>
          <div class="c-list-news__item">
            <dt class="c-list-news__date">2023.08.21</dt>
            <dt class="c-list-news__conts"><a href="">23年お盆期間の混雑予想</a></dt>
          </div>
          <div class="c-list-news__item">
            <dt class="c-list-news__date">2023.08.21</dt>
            <dt class="c-list-news__conts"><a href="">23年お盆期間の混雑予想</a></dt>
          </div>
        </dl>
      </div>
      <div class="l-footer-important-news__more">
        <a href="#" class="c-button-block -lightyellow -arrow -more"><span>もっと見る</span></a>
      </div>
    </div>
  </div>

  <div class="l-footer-information">
    <?php get_template_part('inc/today'); ?>
    <section class="l-footer-pickup">
      <h2 class="l-footer-pickup__title">Pick up</h2>
      <a href=""><span class="l-footer-pickup__conts">アンブレラスカイ開催中</span></a>
    </section>
  </div>

  <nav>
    <?php 
    $args = ['class' => '-footer'];
    get_template_part('inc/info-menu', null, $args); ?>
  </nav>

  <div class="l-footer__bottom">
    <nav>
      <?php get_template_part('inc/other-menu', null, $args); ?>
    </nav>

    <p class="l-footer__copyright">Copyright &copy; All rights reserved. Hoshino Resorts Inc.</p>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
