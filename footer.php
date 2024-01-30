<?php
/**
 * フッターテンプレート
 */
?>
</main>

<footer class="l-footer">
  <div class="l-footer__outline">
    <a href="<?php echo home_url('/areamap'); ?>" class="u-transparent">
      <section class="l-footer-map l-footer-buttonlink">
        <h2 class="l-footer-buttonlink__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/ttl-area-map.svg" alt="軽井沢 星野エリアマップ" width="172" height="133"></h2>
        <p class="l-footer-map__text">Karuizawa Hoshino Area Map</p>
        <button class="c-button-block -white -arrow l-footer-buttonlink__button">施設を探す</button>
      </section>
    </a>
    <a href="" class="u-transparent">
      <section class="l-footer-concept l-footer-buttonlink">
        <h2 class="l-footer-buttonlink__title"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/txt-copy-white.svg" alt="森が、居場所になる一日。" width="168" height="159"></h2>
        <p class="l-footer-concept__text">ゆれる木漏れ日、川のせせらぎ、鳥のさえずり。豊かな自然に包まれて、暮らすように一日を。</p>
        <button class="c-button-block -white -arrow l-footer-buttonlink__button">星野エリアで過ごす</button>
      </section>
    </a>
  </div>

  <?php if(!is_archive('event') && !is_singular('event') && !is_page('ended')): ?>
  <?php get_template_part('event/list-3'); ?>
  <?php endif; ?>

  <?php get_template_part('news/list-important'); ?>

  <?php if(is_page('harunireterrace')): ?>
  <?php get_template_part('news/list-3-facility'); ?>
  <?php endif; ?>

  <nav>
    <?php
    $args = ['class' => '-footer'];
    get_template_part('inc/info-menu', null, $args); ?>
  </nav>

  <div class="l-footer__bottom">
    <nav class="l-footer__sitemap">
      <ul>
        <li><a href="<?php echo home_url('/tombo-no-yu'); ?>">星野温泉 トンボの湯</a></li>
        <li><a href="<?php echo home_url('/harunireterrace'); ?>">ハルニレテラス</a></li>
        <li><a href="<?php echo home_url('/sonmin-shokudo'); ?>">村民食堂</a></li>
        <li><a href="<?php echo home_url('/church#picchio'); ?>">ピッキオ</a></li>
        <li><a href="<?php echo home_url('/kera-ike-icerink'); ?>">ケラ池スケートリンク</a></li>
        <li><a href="<?php echo home_url('/church#karuizawachurch'); ?>">軽井沢高原教会</a></li>
        <li><a href="<?php echo home_url('/church#stonechurch'); ?>">石の教会 内村鑑三記念堂</a></li>
        <li><a href="https://yukawatan.blestoncourt.com/" target="_blank">ブレストンコート ユカワタン</a></li>
        <li><a href="<?php echo home_url('/shop/hungryspot'); ?>">カフェ ハングリースポット</a></li>
        <li><a href="<?php echo home_url('/shop/ikarucafe'); ?>">イカルカフェ</a></li>
        <li><a href="http://www.besso-navi.com/" target="_blank">軽井沢 別荘Navi</a></li>
        <li class="no-arw">　</li>
        <li><a href="<?php echo home_url('/hotel#hoshinoya'); ?>">星のや軽井沢</a></li>
        <li><a href="<?php echo home_url('/hotel#hbc'); ?>">軽井沢ホテルブレストンコート</a></li>
        <li><a href="<?php echo home_url('/hotel#beb5'); ?>">BEB5軽井沢</a></li>
      </ul>
    </nav>
  </div>

  <div class="c-border-t l-footer-position">
    <div class="l-footer__bottom">
      <nav>
        <?php get_template_part('inc/other-menu', null, $args); ?>
      </nav>
    </div>
    <div class="l-footer__instagram">
    <a class="c-text-icon instagram" href="https://www.instagram.com/harunireterrace/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-insta.svg" width="16" height="16" class="icon lazyloaded">Instagram</a>
    </div>
    <div class="l-footer__logo">
      <a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo-en.png" width="170" height="17" alt="Hoshino resorts"></a>
      <p class="l-footer__copyright">Copyright &copy; All rights reserved. Hoshino Resorts Inc.</p>
    </div>
  </div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
