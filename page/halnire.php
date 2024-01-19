<?php
/*Template Name: ハルニレテラス */
?>
<?php get_header(); ?>


  <div class="l-spacer pan">
    <div class="l-container--wide">
      <?php get_template_part('inc/breadcrumb'); ?>
    </div>
  </div>

  <section class="l-spacer -medium000000000 -both00000 p-harunire__kv">
		<div class="l-container--primary">
			<div class="p-harunire__kv__logo">
				<h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/harunire/logo.svg" alt="ハルニレテラス"></h1>
				<a href="#usage-guide"class="c-button-block -lightyellow -arrow"><span>営業案内</span></a>
			</div>
			<div class="p-harunire__kv__news">
				<h2 class="c-title-ex-small"><span>重要なお知らせ</span></h2>
				<p><a href="#">重要なお知らせが入ります。</a></p>
			</div>
		</div>
	</section>

	<section class="l-spacer -medium0000000000 -both000000000  p-harunire__lead">
		<div class="l-container--primary">
			<div class="p-harunire__lead__inner">
				<h2 class="c-title-ex-small">軽井沢の日常を過ごす<br>森の中の小さな街</h1>
				<p>「軽井沢の日常」をコンセプトにした、森の中の小さな街。ハルニレの木立の中、湯川の清流沿いに連なる建物を、ウッドデッキでつないでいます。豊かな自然と個性的なお店が、星野エリアでの一日を彩ります。</p>
			</h2>
		</div>
	</section>

  <?php get_template_part('event/list-3-facility'); ?>

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

	<?php get_template_part('news/list-3-facility'); ?>

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
            <li class="c-list-std__item active"><a class="all" href="<?php echo home_url(); ?>/shop/"><span class="c-text-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-all.svg" width="40" height="40" class="icon -shopicon">すべて</span></a></li>
            <?php
              $terms = get_terms('shop_cat');
              $args = array(
                'exclude' => array(60), //除外したいタームのIDを指定。
              );
              $terms = get_terms('shop_cat', $args);
              foreach ($terms as $term ) {
                $des_list .= '<li class="c-list-std__item"><a class="'. $term-> slug .'" href="' . get_term_link( $term ) . '"><span class="c-text-icon"><img src="'.get_template_directory_uri().'/assets/img/common/icon-'. $term-> slug .'.svg" width="40" height="40" class="icon -shopicon">';
                $des_list .= $term->name . '</span></a></li>';
              }
              echo $des_list;
            ?>
          </ul>
          <div class="l-spacer -em2">
              <a href="<?php echo home_url('/business-hours'); ?>" class="c-button-block -yellow -icon"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-clock.svg" width="16" height="16">営業時間</a>
          </div>
        </div>
        <div class="l-contents--left-title__conts">
          <?php
          $args = array(
            'post_type' => 'shop',
            'posts_per_page' => -1,
            'tax_query' => array(
              array(
                'taxonomy' => 'shop_cat', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => 'halnire', //表示したいタームをスラッグで指定
                'operator' => 'IN'
              ),
            )
          );
          $the_query = new WP_Query($args);
          ?>
          <?php if ($the_query->have_posts()): ?>
          <ul class="p-restaurant-list">
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
              <li>
                  <a href="<?php if( get_field('facility-url')): ?><?php the_field('facility-url'); ?><?php else: ?><?php the_permalink();?><?php endif; ?>"<?php if(get_field('blank')): ?> target="_blank"<?php endif; ?> class="p-restaurant-card <?php if(get_field('blank')): ?>blank<?php endif; ?>">
                      <?php if( get_field('wi-fi')): ?>
                      <div class="p-restaurant-card__wi-fi">
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-wi-fi.svg" alt="Wi-fiあり" width="28" height="28">
                      </div>
                      <?php endif; ?>
                      <?php if(has_post_thumbnail()): ?><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" /><?php endif; ?>
                      <div class="p-restaurant-card__text">
                          <div class="p-restaurant-card__title">
                              <h3 class="p-restaurant-card__name"><?php if(get_field('sub_title')): ?><span class="p-restaurant-card__cat"><?php the_field('sub_title'); ?></span><?php endif; ?><em><?php the_title(); ?></em></h3>
                              <?php if(get_field('logo')): ?>
                              <div class="p-restaurant-card__logo">
                                  <img src="<?php the_field('logo'); ?>" alt="">
                              </div>
                              <?php endif; ?>
                          </div>
                      </div>
                  </a>
              </li>
              <?php endwhile; ?>
          </ul>
          <?php endif; wp_reset_postdata(); ?>
        </div>
      </article>
    </div>
  </section>


<!-- <section class="l-spacer -medium -both">
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
</section> -->

<div class="l-spacer">
  <div class="l-container--wide">
    <?php get_template_part('inc/breadcrumb'); ?>
  </div>
</div>

<?php get_footer(); ?>