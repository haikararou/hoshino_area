<?php
/*Template Name: 村民食堂 */
?>
<?php get_header(); ?>

<section class="-sonmin-bg">

	<div class="l-spacer pan">
		<div class="l-container--wide">
			<?php get_template_part('inc/breadcrumb'); ?>
		</div>
	</div>

	<section class="l-spacer -medium000000000 -both00000  p-sonmin__kv">
		<div class="l-container--primary">
			<div class="p-sonmin__kv__logo">
				<h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/sonmin/logo.svg" alt="村民食堂"></h1>
				<a href="#usage-guide"class="c-button-block -lightyellow -arrow"><span>営業案内</span></a>
			</div>
			<div class="p-sonmin__kv__news">
				<h2 class="c-title-ex-small"><span>重要なお知らせ</span></h2>
				<p><a href="#">重要なお知らせが入ります。</a></p>
			</div>
		</div>
	</section>

	<section class="l-spacer -medium0000000000 -both000000000  p-sonmin__lead">
		<div class="l-container--primary">
			<div class="p-sonmin__lead__inner">
				<h2 class="c-title-ex-small">美しい村」に集う人々を<br>信州の食でおもてなし</h2>
				<p>小説家 堀辰雄は、自身の作品の中で軽井沢を「美しい村」と呼びました。<br>村民食堂はその名にちなみ、美しい村・軽井沢を訪れる人々を、おいしくもてなすカジュアルダイニングです。木々の緑と光を取り込む開放的な空間で、信州の郷土料理をベースにしたオリジナルメニューをお楽しみいただけます。散策の合間に、ぜひお気軽にお立ち寄りください。</p>
			</div>
		</div>
	</section>

	<section class="l-spacer -medium -both  p-sonmin__news">
		<div class="l-container--primary">
			<h2 class="c-title-ex-small">村民食堂からのお知らせ</h2>
			<ul>
				<li>開店の30分前より、入口にて受付番号を発券しております。</li>
				<li>受付後にご入店をお待ち頂いているお客様が多い場合、ラストオーダーの時間よりも早く受付を終了させて頂くことがございます。</li>
				<li>ディナーご利用時は18時前にご来店いただくと、比較的お待たせせずにお席にご案内できます。</li>
			</ul>
		</div>
	</section>

	<?php $title ="村民食堂の"; get_template_part('event/list-3-facility'); ?>

	<section class="l-spacer -medium -both c-border-t  p-sonmin__pickup">
		<div class="l-container--primary">
			<article class="l-contents-2column">
				<div class="l-contents-2column__block -w-2_3">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sonmin/fair.jpg">
				</div>
				<div class="l-contents-2column__block -w-1_3 c-block-conts-center">
					<div class="l-spacer -small -both">
						<h2 class="c-title-small"><span>イベント情報</span>信州夏うまっ！フェア</h2>
						<p class="c-text-gold">期間 : 2023.10.15</p>
						<p>
							<a href="#" class="c-button-block -lightyellow -arrow"><span>詳しくはこちら</span></a>
						</p>
					</div>
				</div>
			</article>
		</div>
	</section>

	<section class="l-spacer -medium -both c-border-t l-contents--ribbon-title">
		<div class="l-container--primary">
			<article class="l-contents--left-title -ribbon">
				<div class="l-contents--left-title__title">
					<h2 class="c-title-large -vertical l-contents--ribbon-title__ribbon">おすすめメニュー</h2>
				</div>
				<div class="l-contents--left-title__conts">
					<section class="l-contents-2column -pc-rl">
						<div class="l-contents-2column__block -w-1_2--right2">
							<img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2024/01/sonmin_menu01.jpg">
						</div>
						<div class="l-contents-2column__block -w-1_2--left2">
							<h3 class="c-title-medium"><span class="c-title-gothic c-color-Dylw">いちおし 1</span>信州彩り御膳</h3>
							<p>旬の食材を使った、村民食堂の看板メニュー。メインの牛すき鍋や信州サーモン、季節ごとに変わる天ぷらや小鉢で、村民食堂自慢の味を少しずつ楽しむことができます。</p>
						</div>
					</section>
					<div class="l-spacer -medium">
						<section class="l-contents-2column -pc-rl">
							<div class="l-contents-2column__block -w-1_2--right2">
								<img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2024/01/sonmin_menu02.jpg">
							</div>
							<div class="l-contents-2column__block -w-1_2--left2">
								<h3 class="c-title-medium"><span class="c-title-gothic c-color-Dylw">いちおし 2</span>和牛のよくばりひつまぶし</h3>
								<p>和牛のたたきとしぐれ煮の贅沢な2色の丼に、3種の薬味を添えて。〆にはかつお出汁と牛のごま和えでお茶漬け風にして、最後まで飽きずに楽しめます。</p>
							</div>
						</section>
					</div>
					<div class="l-spacer -medium">
						<section class="l-contents-2column -pc-rl">
							<div class="l-contents-2column__block -w-1_2--right2">
								<img src="<?php $upload_dir = wp_upload_dir(); echo $upload_dir['baseurl']; ?>/2024/01/sonmin_menu03.jpg">
							</div>
							<div class="l-contents-2column__block -w-1_2--left2">
								<h3 class="c-title-medium"><span class="c-title-gothic c-color-Dylw">いちおし 3</span>シャキッとレタスのシーザーサラダ</h3>
								<p>旬のレタスを半玉まるごと使用した、見た目にも楽しいシーザーサラダ。ザクザクと豪快にカットして、特製ドレッシングをかけてお楽しみください。</p>
							</div>
						</section>
					</div>
				</div>
			</article>
			<p class="p-sonmin__lnk"><a href="#" class="c-button-block -lightyellow -arrow -pdf"><span>さらにメニューを見る</span></a></p>
		</div>
	</section>


	<section class="l-spacer -medium -both">
		<div class="l-container--primary-scroll">
			<div class="swiper p-gallery-slider js-gallery-slider l-container--primary-scroll__inner">
				<div class="swiper-wrapper">
					<div class="swiper-slide p-gallery-slider__slide">
						<img class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/sonmin/slide01.jpg">
						<p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
					</div>
					<div class="swiper-slide p-gallery-slider__slide">
						<img  class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/sonmin/slide02.jpg">
						<p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
					</div>
					<div class="swiper-slide p-gallery-slider__slide">
						<img  class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/sonmin/slide03.jpg">
						<p class="p-gallery-slider__caption">短いキャプションが入ります。</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('news/list-3-facility'); ?>

	<section id="usage-guide" class="l-spacer -medium -both">
		<div class="l-container--primary">
			<article class="l-contents--left-title">
				<h2 class="c-title-large -vertical l-contents--left-title__title">ご利用案内</h2>
				<div class="l-contents--left-title__conts">
					<div class="l-contents-2column">
						<div class="l-contents-2column__block -w-1_2--left">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/sonmin/guide.jpg">
						</div>
						<div class="l-contents-2column__block -w-1_2--right">
							<dl class="c-list-dl">
								<dt>営業時間</dt>
								<dd>
									<?php
										$today = date_i18n('Ymd');
										$page = get_post(get_the_ID());
										$slug = $page->post_name;
										$args = array(
											'post_type'=> 'business-hours',
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
									<?php if($wp_query->have_posts()): ?>
										<?php while($wp_query->have_posts()): $wp_query->the_post(); ?>
											<?php
												if(have_rows('opening_hoshino')):
													while(have_rows('opening_hoshino')): the_row();
														if(have_rows($slug) ) :
															while(have_rows($slug)): the_row();
																$content = get_sub_field('time');
																$style = get_sub_field('comment');
															endwhile;
														endif;
													endwhile;
												endif;
											?>
											<?php echo $content; ?><span><br><?php echo $style; ?></span>
										<?php endwhile; ?>
									<?php endif; ?>
									<?php wp_reset_query(); ?>
								</dd>
								<dt>電話番号</dt>
								<dd>0267-44-3571</dd>
								<dt>席の予約</dt>
								<dd>席のみのご予約はできません。<br>個室での記念日プランのご予約は<a href="https://urakata.in/new_reserve/courses/hoshinoarea?center_id=832" target="_blank" class="c-text-underline">こちら</a></dd>
								<dt>ペットの入店</dt>
								<dd>1席のみ可（順番にご案内します）</dd>
								<dt>Wi-Fi</dt>
								<dd>あり</dd>
								<dt>子供椅子</dt>
								<dd>あり</dd>
								<dt>店内トイレ</dt>
								<dd>あり</dd>
								<dt>離乳食</dt>
								<dd>離乳食（7ヶ月・9ヶ月・12ヶ月）各500円</dd>
							</dl>
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>

</section>

<!--section class="l-spacer -medium -both">
	<div class="l-container--primary">
		<article class="l-contents--left-title -title-large">
			<h2 class="c-title-large -vertical l-contents--left-title__title"><span>トンボの湯</span>よくある質問</h2>
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
</section-->

<div class="l-spacer">
	<div class="l-container--wide">
		<?php get_template_part('inc/breadcrumb'); ?>
	</div>
</div>

<?php get_footer(); ?>