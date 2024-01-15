<?php
/*Template Name: 交通アクセス */
?>
<?php get_header(); ?>
<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <h1 class="c-title-ex-large">アクセス</h1>
  </div>
</section>

<section class="l-spacer -medium -both c-border-t">
  <div class="l-container--primary">
    <article class="l-contents">
      <div class="l-contents__block">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3212.9792666866465!2d138.58612247700245!3d36.361281092316624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601dd3a1cc80e7f1%3A0x98ae4e19525e1b0c!2z6Lu95LqV5rKi5pif6YeO44Ko44Oq44Ki!5e0!3m2!1sja!2sjp!4v1701934750676!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="l-contents-2column -pc-lr">
        <!-- <div class="l-contents-2column__block -w-1_2">
          <h3 class="c-title-small">軽井沢星野エリア</h3>
        </div> -->
        <div class="l-contents-2column__block -w-1_3">
          <a href="" class="c-button-block -yellow -arrow -parking"><span><i class="icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-parking.svg"></i>駐車場</span></a>
          <a href="" class="c-button-block -yellow -arrow -more"><span>Google Map</span></a>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="l-spacer -medium -both">
</section>

<section class="c-bg-yellow l-contents-block__wrap">
  <div class="l-container--primary">
    <article class="l-contents--left-title">
      <h2 class="c-title-large -vertical l-contents--left-title__title">アクセス</h2>

      <div class="l-contents-2column__block -w-1_3">
        <div class="l-spacer">
          <p>星野エリアにお越しいただく方法は、以下の4つがあります。土日や連休は道路・駐車場が大変混雑いたしますので、公共機関のご利用をおすすめいたします。</p>
        </div>
      </div>
    </article>
  </div>

  <div class="l-contents-block">
    <article class="js-tab-parent">
      <div class="c-tab-control">
        <button class="c-tab-control__button js-tab-button -active" data-target="tab-car">車</button>
        <button class="c-tab-control__button js-tab-button" data-target="tab-bus">バス</button>
        <button class="c-tab-control__button js-tab-button" data-target="tab-train">電車<span class="u-sp-hidden">・</span><br class="u-sp-visible">タクシー</button>
        <button class="c-tab-control__button js-tab-button" data-target="tab-bike">バイク<span class="u-sp-hidden">・</span><br class="u-sp-visible">自転車</button>
      </div>
      <div class="l-contents-block__inner c-bg-white">

        <div class="l-container--primary">
          <div class="c-tab-contents -active" id="tab-car"><!--車-->
            <div class="">
              <p>カーナビ入力設定は、「長野県北佐久郡軽井沢町長倉2148」、<br>もしくは「星野温泉トンボの湯」で検索ください。</p>
            </div>
            <div class="">
              <h3 class="c-title-small">近隣のICからのアクセス</h3>
            </div>
            <div class="">
<style>
.parent1 {
  text-align: center;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(11, 1fr);
  grid-column-gap: 0px;
  grid-row-gap: 0px;
  justify-content: center;
}
.div1-1 { grid-area: 1 / 1 / 3 / 2; }
.div1-2 { grid-area: 1 / 2 / 2 / 3; }
.div1-3 { grid-area: 4 / 1 / 6 / 2; }
.div1-4 { grid-area: 4 / 2 / 5 / 3; }
.div1-5 { grid-area: 7 / 1 / 9 / 2; }
.div1-6 { grid-area: 7 / 2 / 8 / 3; }
.div1-7 { grid-area: 10 / 1 / 12 / 2; }
.div1-8 { grid-area: 10 / 2 / 11 / 3; }
.div1-9 { grid-area: 1 / 3 / 12 / 4; }

.div1-1,
.div1-3,
.div1-5,
.div1-7,
.div1-9 { border: 1px solid black; padding: 1em; }
.div1-2,
.div1-4,
.div1-6,
.div1-8 { border-bottom: 1px solid black; padding: 1em; }
</style>
<div class="parent1">
  <div class="div1-1"><span>関越自動車道</span>碓氷軽井沢IC</div>
  <div class="div1-2"><span>平均約25分</span></div>
  <div class="div1-3"><span>関越自動車道</span>小諸IC</div>
  <div class="div1-4"><span>平均約30分</span></div>
  <div class="div1-5"><span>関越自動車道</span>佐久IC</div>
  <div class="div1-6"><span>平均約20分</span></div>
  <div class="div1-7"><span>関越自動車道</span>佐久平スマートIC（ETC専用）</div>
  <div class="div1-8"><span>平均約20分</span></div>
  <div class="div1-9">軽井沢星野エリア<br><a href="" class="c-button-block -yellow -arrow -more"><span>駐車場</span></a></div>
</div>
            </div>
            <div class="">
              <h2 class="c-title-small">冬用タイヤの装着について</h2>
              <p>冬期（おおむね12月中旬～3月中旬）に車で軽井沢にお越しの際は、冬用タイヤまたはタイヤチェーンをご準備ください。最高気温が零下となる日も多く、少量の降雪や融雪でも路面が凍結します。安全のため、ノーマルタイヤでの運転は控えていただくようお願いいたします。</p>
            </div>
          </div>

          <div class="c-tab-contents" id="tab-bus"><!--バス-->
            <div class="">
              <h2 class="c-title-small"><span>バス</span>軽井沢駅から西武観光バス（路線バス）で星野エリアまで20分</h2>
            </div>
            <div class="">
<style>
.parent2 {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(2, 1fr);
  grid-column-gap: 0px;
  grid-row-gap: 0px;
}

.div2-1 { grid-area: 1 / 1 / 3 / 2; }
.div2-2 { grid-area: 1 / 2 / 2 / 3; }
.div2-3 { grid-area: 1 / 3 / 3 / 4; }

.div2-1,
.div2-3 { border: 1px solid black; padding: 1em; }
.div2-2 { border-bottom: 1px solid black; padding: 1em; }
</style>
<div class="parent2">
  <div class="div2-1">JR軽井沢駅<span>軽井沢駅北口乗り場</span></div>
  <div class="div2-2"><span>約20分</span></div>
  <div class="div2-3">軽井沢星野エリア<span>西武観光バス降り場</span></div>
</div>
            </div>
            <div class="">
              <h3 class="c-title-small">近隣のICからのアクセス</h3>
            </div>
            <div class="l-contents-2column">
              <div class="l-contents-2column__block -w-1_2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/black1.jpg">
                <a href="#">乗り場をGoogle Mapで見る</a>
              </div>
              <div class="l-contents-2column__block -w-1_2">
                <h3 class="c-title-small">JR軽井沢駅北口 1番のり場</h3>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <a href="" class="c-button-block -yellow -arrow -more"><span>西武観光バスの時刻表はこちら</span></a>
                <ul class="">
                  <li><a href="">バスおりば<span>拡大して表示</span></a></li>
                  <li><a href="">バスのりば<span>拡大して表示</span></a></li>
                </ul>
              </div>
            </div>
            <div class="l-contents-2column">
              <div class="l-contents-2column__block -w-1_2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/black1.jpg">
                <a href="#">乗り場をGoogle Mapで見る</a>
              </div>
              <div class="l-contents-2column__block -w-1_2">
                <h3 class="c-title-small">星野エリア 西武観光バス停</h3>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <a href="" class="c-button-block -yellow -arrow -more"><span>西武観光バスの時刻表はこちら</span></a>
                <ul class="">
                  <li><a href="">バスおりば<span>拡大して表示</span></a></li>
                  <li><a href="">バスのりば<span>拡大して表示</span></a></li>
                </ul>
              </div>
            </div>

            <div class="l-contents-2column c-border-t">
              <div class="l-contents-2column__block -w-1_2">
                <h3 class="c-title-small">宿泊者専用のバスのご案内</h3>
                <p>「星のや軽井沢」「ホテルブレストンコート」ご宿泊のお客様はご宿泊者専用のバスがございます。</p>
              </div>
              <div class="l-contents-2column__block -w-1_2">
                <h3 class="c-title-small">星野エリア 西武観光バス停</h3>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <a href="" class="c-button-block -yellow -arrow -more"><span>西武観光バスの時刻表はこちら</span></a>
                <ul class="">
                  <li><a href="">星のや軽井沢にご宿泊の方</a></li>
                  <li><a href="">ブレストンコートにご宿泊の方</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="c-tab-contents" id="tab-train"><!--電車・タクシー-->
            <div class="">
<style>
.parent3 {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  grid-template-rows: repeat(8, 1fr);
  grid-column-gap: 0px;
  grid-row-gap: 0px;
}

.div3-1 { grid-area: 1 / 1 / 9 / 2; }
.div3-2 { grid-area: 3 / 2 / 4 / 3; }
.div3-3 { grid-area: 1 / 3 / 6 / 4; }
.div3-4 { grid-area: 1 / 4 / 2 / 5; }
.div3-5 { grid-area: 4 / 4 / 5 / 5; }
.div3-6 { grid-area: 1 / 5 / 9 / 6; }
.div3-7 { grid-area: 7 / 2 / 8 / 5; }

.div3-1,
.div3-3,
.div3-6 { border: 1px solid black; padding: 1em; }
.div3-2,
.div3-4,
.div3-5,
.div3-7 { border-bottom: 1px solid black; padding: 1em; }
</style>
<div class="parent3">
  <div class="div3-1"><span>JR</span>軽井沢駅</div>
  <div class="div3-2">しなの鉄道<br>約5分</div>
  <div class="div3-3"><span>しなの鉄道</span>中軽井沢駅</div>
  <div class="div3-4">タクシー<br>約5分</div>
  <div class="div3-5">徒歩<br>約17分</div>
  <div class="div3-6">軽井沢星野エリア</div>
  <div class="div3-7">タクシー<br>約15分</div>
</div>
            </div>
            <div class="l-contents-2column">
              <div class="l-contents-2column__block -w-1_2">
                <h2 class="c-title-small"><span>電車</span>JR軽井沢駅から1駅の中軽井沢駅下車。</h2>
                <p>軽井沢駅から1駅の中軽井沢駅（約5分）にて下車ください。</p>
                <a href="">しなの鉄道時刻表</a>
              </div>
              <div class="l-contents-2column__block -w-1_2">
                <h2 class="c-title-small"><span>タクシー</span>近隣のタクシー会社に直接ご連絡いただきご予約ください。</h2>
                <p>ますや交通（ TEL:<a href="tel:+81-267455223">0267-45-5223 ）<br>軽井沢観光タクシー（ TEL:<a href="tel:+81-267455408">0267-45-5408</a> ）<br>浅間観光タクシー（ TEL:<a href="tel:+81-267455264">0267-45-5264</a> ）</p>
              </div>
            </div>
          </div>

          <div class="c-tab-contents" id="tab-bike"><!--バイク・自転車-->
            <div class="l-contents-2column">
              <div class="l-contents-2column__block -w-1_2">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/black1.jpg">
              </div>
              <div class="l-contents-2column__block -w-1_2">
                <p>駐輪場　P1、P2、P3（無料）</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents--left-title -title-large">
      <h2 class="c-title-large -vertical l-contents--left-title__title"><span>アクセス</span>よくある質問</h2>
      <div class="l-contents--left-title__conts">

        <dl class="p-faq-list">
          <div class="p-faq-list__item">
            <dt class="p-faq-list__question">コインロッカーはありますか？</dt>
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
            <dt class="p-faq-list__question">犬と一緒に利用できますか？</dt>
            <dd class="p-faq-list__answer">
              <p>
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
              </p>
            </dt>
          </div>
          <div class="p-faq-list__item">
            <dt class="p-faq-list__question">犬と一緒に利用できますか？</dt>
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

<?php get_footer(); ?>