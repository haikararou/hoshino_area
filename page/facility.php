<?php
/*Template Name: 施設を探す */
?>
<?php get_header(); ?>
<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <h1 class="c-title-ex-large">施設を探す</h1>
  </div>
</section>

<!-- <section class="l-contents-block__wrap"> -->
  <div class="l-contents-block">
    <article class="js-tab-parent">
      <div class="c-tab-control facility-tab">
        <button class="c-tab-control__button js-tab-button -active" data-target="tab-list">施設一覧</button>
        <button class="c-tab-control__button js-tab-button" data-target="tab-map">エリアマップ</button>
      </div>
      <div class="l-contents-block__inner000000000 c-bg-white">

        <!-- <div class="l-container--primary"> -->
          <div class="c-tab-contents -active" id="tab-list"><!--施設一覧-->
            <div class="facility-flex">
              <div class="facility-flex-img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/map.png">
              </div>
              <div class="facility-flex-txt">
                <h2 class="c-title-small">施設一覧</h2>
                <dl class="p-facility-list">
                  <div class="p-facility-list__item">
                    <div>
                      <dt class="p-facility-list__dt"><a href="<?php echo home_url('/tombo-no-yu'); ?>">星野温泉トンボの湯</a></dt>
                    </div>
                    <div>
                      <dt class="p-facility-list__dt"><a href="<?php echo home_url('/sonmin-shokudo'); ?>">村民食堂</a></dt>
                    </div>
                    <div>
                      <dt class="p-facility-list__dt"><a href="<?php echo home_url('/shop/hungryspot'); ?>">カフェハングリースポット</a></dt>
                    </div>
                    <div>
                      <dt class="p-facility-list__dt facility-acd"><span>ハルニレテラス</span></dt>
                      <dd class="p-facility-list__dd">
                        <ul>
                          <li><a href="<?php echo home_url('/shop/izumiya'); ?>">和泉屋 傳兵衛</a></li>
                          <li><a href="<?php echo home_url('/shop/ilsogno'); ?>">イル・ソーニョ</a></li>
                          <li><a href="<?php echo home_url('/shop/garandou'); ?>">我蘭憧</a></li>
                          <li><a href="<?php echo home_url('/shop/kawakamian'); ?>">せきれい橋 川上庵</a></li>
                          <li><a href="<?php echo home_url('/shop/kisurin'); ?>">希須林</a></li>
                          <li><a href="<?php echo home_url('/shop/ju-kan'); ?>">ギャラリー樹環</a></li>
                          <li><a href="<?php echo home_url('/shop/crafyglanta'); ?>">CRAFY・glänta</a></li>
                          <li><a href="<?php echo home_url('/shop/kokoperi'); ?>">Karuizawa Vegetable ココぺリ</a></li>
                          <li><a href="<?php echo home_url('/shop/sajilocafe'); ?>">サジロカフェ リンデン</a></li>
                          <li><a href="<?php echo home_url('/shop/sawamura'); ?>">ベーカリー＆レストラン沢村</a></li>
                          <li><a href="<?php echo home_url('/shop/cercle'); ?>">CERCLE wine&deli</a></li>
                          <li><a href="<?php echo home_url('/shop/team7'); ?>">TEAM7 軽井沢</a></li>
                          <li><a href="<?php echo home_url('/shop/natur'); ?>">NATUR TERRACE</a></li>
                          <li><a href="<?php echo home_url('/shop/nagaifarm'); ?>">HARVEST NAGAI FARM</a></li>
                          <li><a href="<?php echo home_url('/shop/maruyamacoffee'); ?>">丸山珈琲</a></li>
                          <li><a href="<?php echo home_url('/shop/moriasobi'); ?>">モリアソビ</a></li>
                      </dt>
                    </div>
                    <div>
                      <dt class="p-facility-list__dt"><a href="https://yukawatan.blestoncourt.com/" target="_blank">ブレストンコートユカワタン</a></dt>
                    </div>
                    <div>
                      <dt class="p-facility-list__dt"><a href="https://picchio.co.jp/" target="_blank">ピッキオ</a></dt>
                    </div>
                    <div>
                      <dt class="p-facility-list__dt"><a href="<?php echo home_url('/kera-ike-icerink'); ?>" target="_blank">イカルカフェ</a></dt>
                    </div>
                    <div>
                      <dt class="p-facility-list__dt"><a href="<?php echo home_url('/kera-ike-icerink'); ?>" target="_blank">ケラ池スケートリンク</a></dt>
                    </div>
                    <div>
                      <dt class="p-facility-list__dt"><a href="">教会</a></dt>
                    </div>
                    <div>
                      <dt class="p-facility-list__dt"><a href="">ホテル</a></dt>
                    </div>
                  </div>
                </dl>
              </div>
            </div>
          </div>

          <div class="c-tab-contents" id="tab-map"><!--エリアマップ-->
            <h2 class="c-title-small">エリアマップ</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facility/map.png">
            <ul class="">
              <li><a href="#">ハルニレテラス</a></li>
              <li><a href="#">星野温泉トンボの湯</a></li>
              <li><a href="#">村民食堂</a></li>
              <li><a href="#">カフェハングリースポット</a></li>
              <li><a href="#">ピッキオ</a><br><a href="#">イカルカフェ</a><br><a href="#">ケラ池スケートリンク</li>
              <li><a href="#">星のや軽井沢</a></li>
              <li><a href="#">軽井沢別荘Navi</a></li>
              <li><a href="#">ブレストンコートユカワタン</a></li>
              <li><a href="#">石の教会内村鑑三記念</a></li>
              <li><a href="#">軽井沢高原教会</a></li>
              <li><a href="#">軽井沢ホテルブレストンコート</a></li>
              <li><a href="#">BEB5</a></li>
            </ul>
          </div>
        <!-- </div> -->
      </div>
    </article>
  </div>
<!-- </section> -->

<?php get_footer(); ?>