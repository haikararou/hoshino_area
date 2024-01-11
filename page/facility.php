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

<section class="l-contents-block__wrap">
  <div class="l-contents-block">
    <article class="js-tab-parent">
      <div class="c-tab-control">
        <button class="c-tab-control__button js-tab-button -active" data-target="tab-list">施設一覧</button>
        <button class="c-tab-control__button js-tab-button" data-target="tab-map">エリアマップ</button>
      </div>
      <div class="l-contents-block__inner c-bg-white">

        <div class="l-container--primary">
          <div class="c-tab-contents -active" id="tab-list"><!--施設一覧-->
            <h2 class="c-title-small">施設一覧</h2>
            <dl class="p-facility-list">
              <div class="p-facility-list__item">
                <dt class="p-facility-list__dt">ハルニレテラス</dt>
                <dd class="p-facility-list__dd">
                  <ul>
                    <li><a href="">【イタリアン】イル・ソーニョ</a></li>
                    <li><a href="">【そば・美酒・料理】川上庵</a></li>
                    <li><a href="">【中国家庭料理】希須林</a></li>
                    <li><a href="">【ベーカリー＆レストラン】沢村</a></li>
                    <li><a href="">【菓子処】和泉屋 傳兵衛</a></li>
                    <li><a href="">【レストラン＆デリ・ワイン】CERCLE</a></li>
                    <li><a href="">【ジェラート】PURE MILK GELATO NAGAI FARM</a></li>
                    <li><a href="">【カフェ＆ブックス】丸山珈琲</a></li>
                    <li><a href="">【木製品専門店】我蘭憧</a></li>
                    <li><a href="">【北欧インテリア・手工芸】NATUR</a></li>
                    <li><a href="">【マテリアルアート＆クラフト】Gallery 樹環 ju-KAN</a></li>
                    <li><a href="">【農産物・食料品・飲料】Karuizawa Vegetable ココペリ</a></li>
                    <li><a href="">【ベッド・枕・くらしまわりの小物】TEAM7 軽井沢</a></li>
                    <li><a href="">【ガーデン＆アウトドアリビング】MORIASOBI</a></li>
                    <li><a href="">【ヒーリングマッサージ】常世tocoyo</a></li>
                </dt>
                <dt class="p-facility-list__dt"><a href="">協会</a></dt>
                <dt class="p-facility-list__dt"><a href="">ホテル</a></dt>
                <dt class="p-facility-list__dt"><a href="">星野温泉トンボの湯</a></dt>
                <dt class="p-facility-list__dt"><a href="">村民食堂</a></dt>
                <dt class="p-facility-list__dt"><a href="">カフェハングリースポット</a></dt>
                <dt class="p-facility-list__dt"><a href="">ピッキオ</a></dt>
                <dt class="p-facility-list__dt"><a href="">ケラ池スケートリンク</a></dt>
                <dt class="p-facility-list__dt"><a href="">別荘ナビ</a></dt>
                <dt class="p-facility-list__dt"><a href="">ブレストンコートユカワタン</a></dt>
              </div>
            </dl>
          </div>

          <div class="c-tab-contents" id="tab-map"><!--エリアマップ-->
            <h2 class="c-title-small">エリアマップ</h2>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/black1.jpg">
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
        </div>
      </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>