<?php
/*Template Name: アクティビティ */
?>
<?php get_header(); ?>
<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <h1 class="c-title-ex-large">アクティビティ</h1>
    <p>自然に囲まれた星野エリアならではのアクティビティで、今日を、もっと思い出深い日に。</p>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents-2column">
      <div class="l-contents-2column__block -w-1_2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/activity/picchio.jpg">
      </div>
      <div class="l-contents-2column__block -w-1_2--left">
        <div class="p-activity--title">
          <h3 class="c-title-large">ピッキオ</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/activity/logo_picchio.svg">
        </div>
        <div class="l-spacer -em2">
          <p>ピッキオは、森の生き物との出会いを楽しむ自然観察ツアーを開催しています。<br>自然をこよなく愛するスタッフのサポートで、動植物の様子や自然の仕組みが手に取るように見えてきます。</p>
        </div>
        <div class="l-spacer -em2">
          <a href="" class="c-button-block -yellow -arrow -more"><span>施設サイト</span></a>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents-2column">
      <div class="l-contents-2column__block -w-1_2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/activity/keraike.jpg">
      </div>
      <div class="l-contents-2column__block -w-1_2--left">
        <div class="p-activity--title">
          <h3 class="c-title-large">ケラ池スケートリンク</h3>
        </div>
        <div class="l-spacer -em2">
          <p>ケラ池スケートリンクは、「森を感じるスケートリンク」がコンセプト。秋の紅葉の時期からスケートリンクが現れ、寒さが増すごとに池一面の氷が厚さを増し、厳冬期には天然氷でのスケートもができるようになります。森の小鳥の声に軽井沢の自然を感じながら、氷上散歩を楽しんでみませんか。</p>
        </div>
        <div class="l-spacer -em2">
          <a href="<?php echo home_url('/kera-ike-icerink'); ?>" class="c-button-block -yellow -arrow -more"><span>施設サイト</span></a>
        </div>
      </div>
    </article>
  </div>
</section>

<section class="l-spacer -medium -both">
  <div class="l-container--primary">
    <article class="l-contents-2column">
      <div class="l-contents-2column__block -w-1_2">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/activity/crafy.jpg">
      </div>
      <div class="l-contents-2column__block -w-1_2--left">
        <div class="p-activity--title">
          <h3 class="c-title-large"><span class="c-title-sub">ハルニレテラス</span>CRAFY・glänta</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/activity/logo_crafy.jpg">
        </div>
        <div class="l-spacer -em2">
          <p>指輪を手作りできる工房です。初めてでも思い通りの指輪作りができるよう、専任のスタッフが丁寧にサポートします。体験を通して、軽井沢の思い出となるような「豊かな時間」を提供します。</p>
        </div>
        <div class="l-spacer -em2">
          <a href="<?php echo home_url('/shop/cercle/'); ?>" class="c-button-block -yellow -arrow -more"><span>施設サイト</span></a>
        </div>
      </div>
    </article>
  </div>
</section>

<?php get_footer(); ?>