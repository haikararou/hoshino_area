<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>

<div class="l-spacer">
	<div class="l-container--wide">
		<?php get_template_part('assets/inc/breadcrumb'); ?>
	</div>
</div>

<section class="l-spacer -medium -both c-border-t">
	<div class="l-container--primary">
		<h2 class="c-title-large">
			<?php if(get_field('logo')): ?>
			<div class="p-restaurant-card__logo000000">
				<img src="<?php the_field('logo'); ?>" alt="">
			</div>
			<?php endif; ?>
			<?php if(get_field('sub_title')): ?><span class="p-restaurant-card__cat"><?php the_field('sub_title'); ?></span><?php endif; ?><?php the_title(); ?>
		</h2>
		<article class="l-contents-2column">
			<?php if(has_post_thumbnail()) : ?>
			<div class="l-contents-2column__block -w-2_3">
				<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post_id)); ?>" alt="<?php the_title(); ?>" />
			</div>
			<?php endif; ?>
			<div class="l-contents-2column__block -w-1_3">
				<div class="l-spacer -small -both c-border-t c-border-b">
					<h3 class="c-title-small c-title-icon c-text-gold"><img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/icon-clock-gold.svg">本日の営業時間</h3>
					<?php
					$today = date_i18n('Ymd');
					$args = array(
					'post_type'=> 'opening',
					'meta_key' => 'opening_start', //ACFのフィールド名
					'meta_query' => array( // 判定条件…(開始日 >= 今日)or(終了日 >= 今日)
						'relation' => 'AND',
						array(
						'key'     => 'opening_start',
						'value'   => $today,
						'type'    => 'date',
						'compare' => '<=',
						),
						array(
						'key' => 'opening_end',
						'value' => $today,
						'type'    => 'date',
						'compare' => '>=',
						),
					),
					'posts_per_page' => 1,
					);
					$wp_query = new WP_Query( $args );
					?>
					<?php if ( $wp_query->have_posts() ): ?>
					<?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
						<?php
						if ( have_rows( 'opening_restaurant' ) ) :
							while ( have_rows( 'opening_restaurant' ) ) : the_row();
							if ( have_rows( 'ilsogno' ) ) :
								while ( have_rows( 'ilsogno' ) ) : the_row();
								$content = get_sub_field( 'time' );
								$style = get_sub_field( 'comment' );
								endwhile;
							endif;
							endwhile;
						endif;
						?>
						<?php echo $content; ?><br><span><?php echo $style; ?></span>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
				<div class="l-spacer -em2">
					<p>ソムリエとフレンチシェフのレストラン＆デリとワインショップ。従来のデリが持つ手軽さと、一流レストランにもひけをとらない美味しさ・高級さを巧くミックスし、ちょっと贅沢をしたい日やお客様をおもてなしする日のテーブルに彩りを添えるのに強い味方になれる食とワインを取り揃えています。</p>
				</div>
			</div>
		</article>
	</div>
</section>

<section class="l-spacer -medium -both c-border-t">
	<div class="l-container--primary">
		<h2 class="c-title-large">CERCLE<br>からのお知らせ</h2>
		<ul class="c-list-kome">
			<li class="c-list-kome__item">滑走時は必ず手袋とニット帽（またはヘルメット）を着用してください。持っていない方は、手袋（300円）、ニット帽（500円）を現地でご購入いただけます。ヘルメットの無料貸し出しもございます。</li>
			<li class="c-list-kome__item">天候により営業時間の変更や時間短縮、臨時休業になる場合があります。</li>
			<li class="c-list-kome__item">気温などの状況により、滑走できる範囲は異なります。</li>
			<li class="c-list-kome__item">貸靴の対応サイズは15～30㎝です。</li>
			<li class="c-list-kome__item">幼児用の2枚刃スケート靴もご用意しております。（対応サイズ15,16cm）</li>
			<li class="c-list-kome__item">リンク内での事故や怪我、金品等の盗難や紛失についての責任は負いかねます。詳しくは「ご利用に際してのお願い」をご確認ください。</li>
			<li class="c-list-kome__item">その他のスケートリンクに関する詳細は「よくあるご質問」をご覧ください。</li>
		</ul>
	</div>
</section>

<section class="l-spacer -medium -both">
	<div class="l-container--primary-scroll">
		<div class="swiper p-gallery-slider js-gallery-slider l-container--primary-scroll__inner">
		<div class="swiper-wrapper">
			<div class="swiper-slide p-gallery-slider__slide">
			<img class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/gallery1.jpg">
			<p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
			</div>
			<div class="swiper-slide p-gallery-slider__slide">
			<img  class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/gallery2.jpg">
			<p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
			</div>
			<div class="swiper-slide p-gallery-slider__slide">
			<img  class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/gallery3.jpg">
			<p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
			</div>
			<div class="swiper-slide p-gallery-slider__slide">
			<img class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/gallery1.jpg">
			<p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
			</div>
			<div class="swiper-slide p-gallery-slider__slide">
			<img  class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/gallery2.jpg">
			<p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
			</div>
			<div class="swiper-slide p-gallery-slider__slide">
			<img  class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/gallery3.jpg">
			<p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
			</div>
		</div>
		</div>
	</div>
</section>

<section class="l-spacer -medium -both c-border-t l-contents--ribbon-title">
	<div class="l-container--primary">
		<article class="l-contents--left-title -ribbon">
		<div class="l-contents--left-title__title">
			<h2 class="c-title-large -vertical l-contents--ribbon-title__ribbon">定番イチ推しベスト３</h2>
		</div>
		<div class="l-contents--left-title__conts">
			<section class="l-contents-2column -pc-rl">
			<div class="l-contents-2column__block -w-1_2--right2">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/food1.jpg">
			</div>
			<div class="l-contents-2column__block -w-1_2--left2">
				<h3 class="c-title-medium"><span class="c-title-gothic c-color-Dylw">Best 1</span>鶏の白レバーペースト</h3>
				<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
			</div>
			</section>
			<div class="l-spacer -medium">
			<section class="l-contents-2column -pc-rl">
				<div class="l-contents-2column__block -w-1_2--right2">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/food2.jpg">
				</div>
				<div class="l-contents-2column__block -w-1_2--left2">
				<h3 class="c-title-medium"><span class="c-title-gothic c-color-Dylw">Best 2</span>鶏の白レバーペースト</h3>
				<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
				</div>
			</section>
			</div>
		</div>
		</article>
	</div>
</section>

<section class="c-bg-yellow l-contents-block__wrap">
	<div class="l-contents-block c-bg-white">
		<div class="l-contents-block__inner">
			<div class="l-container--primary">
				Take out menu
				<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
				<dl class="c-list-dl">
					<dt>サンドイッチボックス<br>￥1,620</dt>
					<dd>ローストビーフサンド、サーモンクリームチーズサンド、デリ2種、キッシュ、サラダ</dd>

					<dt>サンドイッチボックス<br>￥1,620</dt>
					<dd>ローストビーフサンド、サーモンクリームチーズサンド、デリ2種、キッシュ、サラダ</dd>

					<dt>サンドイッチボックス<br>￥1,620</dt>
					<dd>ローストビーフサンド、サーモンクリームチーズサンド、デリ2種、キッシュ、サラダ</dd>
				</dl>
				<ul class="p-post-list">
					<li class="p-post-list__item">
						<a href="">
							<article class="p-post-card">
								<div class="p-post-card__img">
									<img src="https://test.ultra-l.net/a/hoshino-area/cms/wp-content/uploads/2023/12/article3.jpg" alt="">
								</div>
								<div class="p-post-card__text">
									<h3 class="p-post-card__title">サンドイッチボックス<br>￥1,620</h3>
									<p>ローストビーフサンド、サーモンクリームチーズサンド、デリ2種、キッシュ、サラダ</p>
								</div>
							</article>
						</a>
					</li>
					<li class="p-post-list__item">
						<a href="">
							<article class="p-post-card">
								<div class="p-post-card__img">
									<img src="https://test.ultra-l.net/a/hoshino-area/cms/wp-content/uploads/2023/12/article3.jpg" alt="">
								</div>
								<div class="p-post-card__text">
									<h3 class="p-post-card__title">サンドイッチボックス<br>￥1,620</h3>
									<p>ローストビーフサンド、サーモンクリームチーズサンド、デリ2種、キッシュ、サラダ</p>
								</div>
							</article>
						</a>
					</li>
					<li class="p-post-list__item">
						<a href="">
							<article class="p-post-card">
								<div class="p-post-card__img">
									<img src="https://test.ultra-l.net/a/hoshino-area/cms/wp-content/uploads/2023/12/article3.jpg" alt="">
								</div>
								<div class="p-post-card__text">
									<h3 class="p-post-card__title">サンドイッチボックス<br>￥1,620</h3>
									<p>ローストビーフサンド、サーモンクリームチーズサンド、デリ2種、キッシュ、サラダ</p>
								</div>
							</article>
						</a>
					</li>
				</ul>
				<div class="l-contents-2column">
					<div class="l-contents-2column__block -w-1_2">
						<img src="https://test.ultra-l.net/a/hoshino-area/cms/wp-content/themes/hoshino-area/assets/img/dummy/black1.jpg">
					</div>
					<div class="l-contents-2column__block -w-1_2">
						<h2 class="c-title-large"><span>料理長</span>フレデリック・コサール</h2>
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						<p><a href="#"><span class="c-button-arrow c-button-outerlink c-text-underline">Webサイトへ</span></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="l-spacer -medium -both c-border-t">
	<div class="l-container--primary">
		<article class="l-contents--left-title">
			<h2 class="c-title-large -vertical l-contents--left-title__title">タイトル</h2>

			<div class="l-contents-2column">
				<div class="l-contents-2column__block -w-1_2--left">
					<img src="https://test.ultra-l.net/a/hoshino-area/cms/wp-content/themes/hoshino-area/assets/img/dummy/black1.jpg">
					<p><a href="#"><span class="c-button-arrow c-button-outerlink c-text-underline">Webサイトへ</span></a></p>
					<div>
					Instagram
					Facebook
					</div>
				</div>
				<div class="l-contents-2column__block -w-1_2--right">
					<dl class="c-list-dl">
						<dt>店舗名</dt>
						<dd>レストラン＆デリ・ワイン CERCLE</dd>

						<dt>電話番号</dt>
						<dd>0267-31-0361</dd>

						<dt>営業時間</dt>
						<dd>
						<?php if ( $wp_query->have_posts() ): ?>
					<?php while ( $wp_query->have_posts() ): $wp_query->the_post(); ?>
						<?php
						if ( have_rows( 'opening_restaurant' ) ) :
							while ( have_rows( 'opening_restaurant' ) ) : the_row();
							if ( have_rows( 'ilsogno' ) ) :
								while ( have_rows( 'ilsogno' ) ) : the_row();
								$content = get_sub_field( 'time' );
								$style = get_sub_field( 'comment' );
								endwhile;
							endif;
							endwhile;
						endif;
						?>
						<?php echo $content; ?><br><span><?php echo $style; ?></span>
					<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>
						</dd>

						<dt>席予約</dt>
						<dd>ディナーのみ可</dd>

						<dt>席数</dt>
						<dd>なし</dd>

						<dt>ペットの入店</dt>
						<dd>なし</dd>

						<dt>テイクアウト</dt>
						<dd>なし</dd>
					</dl>
				</div>
			</div>
        </article>
	</div>
</section>

<?php the_content(); ?>

<?php get_footer(); ?>

