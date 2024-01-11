<?php
/*Template Name: 駐車場のご案内 */
?>
<?php get_header(); ?>
<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <h1 class="c-title-ex-large">駐車場のご案内</h1>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents-2column">
      <div class="l-contents-2column__block -w-1_2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/black1.jpg">
      </div>
      <div class="l-contents-2column__block -w-1_2--left">
        <div class="">
          <h3 class="c-title-small">満車予測時間帯</h3>
          <p>中軽井沢駅寄りの駐車場から混み合います。<br>満車の場合は路上で待機せず、［P6］へお進みください。</p>
          <dl class="c-list-dl">
            <dt>平日</dt>
            <dd>P2 P3 11～14時頃に混み合うことが多いです。</dd>
            <dd>P1 12～13時頃に混み合うことが多いです。</dd>
            <dt>土日祝</dt>
            <dd>P2 P3 10～15時頃に混み合うことが多いです。</dd>
            <dd>P1 11～14時頃に混み合います。</dd>
          </dl>
        </div>
        <div class="">
          <h3 class="c-title-small">バイク・自転車でお越しの方</h3>
          <p class="">駐輪場　P1、P2、P3（無料）</p>
        </div>
        <div class="">
          <h3 class="c-title-small">駐車場概要</h3>
          <dl class="c-list-dl">
            <dt>駐車料金（P1-P3）</dt>
            <dd>最初の30分　無料<br>以降1時間毎　300円（上限3,000円）</dd>
            <dt>サービス料金</dt>
            <dd>トンボの湯、ピッキオ、村民食堂、ハルニレテラス各店舗で合計2,000円以上ご利用いただくと、</dd>
            <dt>営業時間</dt>
            <dd>時間　7：00～23：00（店舗営業時間に準ずる）</dd>
            <dt>ご案内事項</dt>
            <dd><ul class="c-list-dot">
              <li class="c-list-dot__item">駐車券を持ってお出かけください。</li>
              <li class="c-list-dot__item">駐車券紛失の場合には、駐車券紛失料金3,000円申し受けます。</li>
              <li class="c-list-dot__item">ご精算は現金（千円札、500、100、50、10円硬貨）にてお願いいたします。</li>
            </ul></dd>
          </dl>
          <a href=""><span class="c-button-arrow c-text-underline">駐車場管理規定（PDF）</span></a>
        </div>
      </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>