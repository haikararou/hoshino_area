<?php
/*Template Name: ハルニレテラス */
?>
<?php get_header(); ?>
<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <h1 class="c-title-ex-large">ハルニレテラス</h1>
    <div class="">
      <h2>重要なお知らせ</h2>
      <p><a href="#">重要なお知らせが入ります。</a></p>
    </div>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <h2 class="c-title-ex-small">軽井沢の日常を過ごす<br>森の中の小さな街</h1>
    <p class="">「軽井沢の日常」をコンセプトにした、森の中の小さな街。ハルニレの木立の中、湯川の清流沿いに連なる建物を、ウッドデッキでつないでいます。豊かな自然と個性的なお店が、星野エリアでの一日を彩ります。</p>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents--left-title">
      <h2 class="c-title-large -vertical l-contents--left-title__title"><span>現在開催中の</span>イベント情報</h2>
      <div class="l-contents--left-title__conts">
        <div class="l-contents-2column">
          <div class="l-contents-2column__block -w-1_2--left">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/layout1.jpg">
          </div>
          <div class="l-contents-2column__block -w-1_2--right">
            <h3 class="c-title-small">りんご湯りんご湯りんご湯りんご湯りんご湯りんご湯りんご湯りんご湯りんご湯</h3>
            <dl class="">
              <dt>⚫︎開催中</dt><dd>期間 : 2023.10.15</dd>
            </dl>
          </div>
          
        </div>
      </div>
    </article>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents--left-title">
      <h2 class="c-title-large -vertical l-contents--left-title__title"><span>ショップからの</span>ニュース</h2>
      <div class="l-contents--left-title__conts">
        <ul class="p-post-list">
          <li class="p-post-list__item">
            <a href="">
              <article class="p-post-card">
                <div class="p-post-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/article1.jpg">
                </div>
                <div class="p-post-card__text">
                  <p class="p-post-card__cat">ギャラリー樹環</p>
                  <time class="p-post-card__date">2023.08.21</time>
                  <h3 class="p-post-card__title">夏のこもれびワークショップを開催</h3>
                  <p class="p-post-card__info">期間 : 2023.10.15</p>
                </div>
              </article>
            </a>
          </li>
          <li class="p-post-list__item">
            <a href="">
              <article class="p-post-card">
                <div class="p-post-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/article2.jpg">
                </div>
                <div class="p-post-card__text">
                  <p class="p-post-card__cat">カフェ ハングリースポット</p>
                  <time class="p-post-card__date">2023.08.21</time>
                  <h3 class="p-post-card__title">夏のおすすめドリンク</h3>
                  <p class="p-post-card__info">期間 : 2023.10.15</p>
                </div>
              </article>
            </a>
          </li>
          <li class="p-post-list__item">
            <a href="">
              <article class="p-post-card">
                <div class="p-post-card__img">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/article3.jpg">
                </div>
                <div class="p-post-card__text">
                  <p class="p-post-card__cat">ピッキオ</p>
                  <time class="p-post-card__date">2023.08.21</time>
                  <h3 class="p-post-card__title">小学生の為の日帰りサマーキャンプ「ピッキオこども冒険クラブ」</h3>
                  <p class="p-post-card__info">期間 : 2023.10.15</p>
                </div>
              </article>
            </a>
          </li>
        </ul>
        <div class="l-spacer -em3 p-post-list__item__more">
          <p><a href="#" class="c-button-block -lightyellow -arrow -more"><span>もっと見る</span></a></p>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="l-spacer -medium -both c-border-t">
  <div class="l-container--primary">
    <article class="l-contents--left-title -title-large">
      <div class="l-contents--left-title__title">
        <h2 class="c-title-large -vertical">ショップリスト</h2>
        
        <ul class="c-list-std">
          <li class="c-list-std__item">
            <span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-restaurant.svg" width="40" height="40" class="icon">レストラン</span>
          </li>
          <li class="c-list-std__item">
            <span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-cafe.svg" width="40" height="40" class="icon">カフェ</span>
          </li>
          <li class="c-list-std__item">
            <span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-shop.svg" width="40" height="40" class="icon">ショップ</span>
          </li>
          <li class="c-list-std__item">
            <span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-pet.svg" width="40" height="40" class="icon">ペット同伴可</span>
          </li>
          <li class="c-list-std__item">
            <span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-pet-outside.svg" width="40" height="40" class="icon">テラス席ペット可</span>
          </li>
        </ul>
        <div class="l-spacer -em2">
          <a href="<?php echo home_url('/business-hours'); ?>" class="c-button-block -yellow -icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-clock.svg" width="16" height="16">営業時間</a>
        </div>
      </div>
      <div class="l-contents--left-title__conts">

        <ul class="p-restaurant-list">
          <li>
            <div class="p-restaurant-card">
              <div class="p-restaurant-card__wi-fi"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-wi-fi.svg" alt="Wi-fiあり" width="28" height="28"></div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant1.jpg" alt="">
              
              <div class="p-restaurant-card__text">
                <div class="p-restaurant-card__title">
                  <h3 class="p-restaurant-card__name"><span class="p-restaurant-card__cat">イタリアンレストラン</span>イル・ソーニョ</h3>
                  <div class="p-restaurant-card__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant-logo1.jpg" alt=""></div>
                </div>
                <div class="p-restaurant-card__info">
                  <!-- <div class="p-restaurant-card__time">
                    <dl class="c-list-time">
                      <dt>ランチ</dt><dd>11:00-15:00 (L.O.14:30)</dd>
                      <dt>ディナー</dt><dd>17:30-22:00 (L.O.21:00)</dd>
                    </dl>
                  </div> -->
                  <a href="" class="c-button-block -yellow -arrow -more p-restaurant-card__more"><span>詳細</span></a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="p-restaurant-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant2.jpg" alt="">
              
              <div class="p-restaurant-card__text">
                <div class="p-restaurant-card__title">
                  <h3 class="p-restaurant-card__name"><span class="p-restaurant-card__cat">カフェ・スパイス・雑貨</span>サジロカフェ リンデン</h3>
                  <div class="p-restaurant-card__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant-logo2.jpg" alt=""></div>
                </div>
                <div class="p-restaurant-card__info">
                  <!-- <div class="p-restaurant-card__time">
                    <dl class="c-list-time">
                      <dt>ランチ</dt><dd>11:00-15:00 (L.O.14:30)</dd>
                      <dt>ディナー</dt><dd>17:30-22:00 (L.O.21:00)</dd>
                    </dl>
                  </div> -->
                  <a href="" class="c-button-block -yellow -arrow -more p-restaurant-card__more"><span>詳細</span></a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="p-restaurant-card">
              <div class="p-restaurant-card__wi-fi"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-wi-fi.svg" alt="Wi-fiあり" width="28" height="28"></div>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant1.jpg" alt="">
              
              <div class="p-restaurant-card__text">
                <div class="p-restaurant-card__title">
                  <h3 class="p-restaurant-card__name"><span class="p-restaurant-card__cat">イタリアンレストラン</span>イル・ソーニョ</h3>
                  <div class="p-restaurant-card__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant-logo1.jpg" alt=""></div>
                </div>
                <div class="p-restaurant-card__info">
                  <!-- <div class="p-restaurant-card__time">
                    <dl class="c-list-time">
                      <dt>ランチ</dt><dd>11:00-15:00 (L.O.14:30)</dd>
                      <dt>ディナー</dt><dd>17:30-22:00 (L.O.21:00)</dd>
                    </dl>
                  </div> -->
                  <a href="" class="c-button-block -yellow -arrow -more p-restaurant-card__more"><span>詳細</span></a>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="p-restaurant-card">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant2.jpg" alt="">
              
              <div class="p-restaurant-card__text">
                <div class="p-restaurant-card__title">
                  <h3 class="p-restaurant-card__name"><span class="p-restaurant-card__cat">カフェ・スパイス・雑貨</span>サジロカフェ リンデン</h3>
                  <div class="p-restaurant-card__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/restaurant-logo2.jpg" alt=""></div>
                </div>
                <div class="p-restaurant-card__info">
                  <!-- <div class="p-restaurant-card__time">
                    <dl class="c-list-time">
                      <dt>ランチ</dt><dd>11:00-15:00 (L.O.14:30)</dd>
                      <dt>ディナー</dt><dd>17:30-22:00 (L.O.21:00)</dd>
                    </dl>
                  </div> -->
                  <a href="" class="c-button-block -yellow -arrow -more p-restaurant-card__more"><span>詳細</span></a>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </article>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents--left-title -title-large">
      <h2 class="c-title-large -vertical l-contents--left-title__title"><span>ハルニレテラス</span>よくある質問</h2>
      <div class="l-contents--left-title__conts">

        <dl class="p-faq-list">
          <div class="p-faq-list__item">
            <dt class="p-faq-list__question">犬と一緒に利用できますか？</dt>
            <dd class="p-faq-list__answer">
              <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              <p>
                <a href="#" class="c-button-arrow c-text-underline"><span>詳細はこちら</span></a><br>
              </p>
            </dt>
          </div>
          <div class="p-faq-list__item">
            <dt class="p-faq-list__question">天気・気候を教えてください。</dt>
            <dd class="p-faq-list__answer">
              <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
            </dt>
          </div>
          <div class="p-faq-list__item">
            <dt class="p-faq-list__question">タクシーにはどこで乗ることができますか？</dt>
            <dd class="p-faq-list__answer">
              <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              </dt>
          </div>
          <div class="p-faq-list__item">
            <dt class="p-faq-list__question">コインロッカーはありますか？</dt>
            <dd class="p-faq-list__answer">
              <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
              </dt>
          </div>
        </dl>
      </div>
    </article>
  </div>
</section>

<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<?php get_footer(); ?>