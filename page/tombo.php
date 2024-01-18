<?php
/*Template Name: トンボの湯 */
?>
<?php get_header(); ?>

<section class="-tombo-bg">

	<div class="l-spacer pan">
		<div class="l-container--wide">
			<?php get_template_part('inc/breadcrumb'); ?>
		</div>
	</div>

	<section class="l-spacer -medium000000000 -both00000  p-tombo__kv">
		<div class="l-container--primary">
			<div class="p-tombo__kv__logo">
				<h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/logo.svg" alt="星野温泉トンボの湯"></h1>
				<a href="#usage-guide"class="c-button-block -lightyellow -arrow"><span>営業案内</span></a>
			</div>
			<div class="p-tombo__kv__news">
				<h2 class="c-title-ex-small"><span>重要なお知らせ</span></h2>
				<p><a href="#">重要なお知らせが入ります。</a></p>
			</div>
		</div>
	</section>

	<section class="l-spacer -medium0000000000 -both000000000  p-tombo__lead">
		<div class="l-container--primary">
			<div class="p-tombo__lead__inner">
				<h2 class="c-title-ex-small">古の湯に身をゆだね<br>明日への時間を養う</h1>
				<p>星野温泉は、1915年の開湯以来、避暑地軽井沢の名湯として愛されてきました。北原白秋や与謝野晶子など、多くの文化人も浸かったといいます。トンボの湯は、そんな星野温泉の歴史を汲む「源泉かけ流し」の立ち寄り湯。森を全身で感じながら、古の湯で心身をほぐし、英気を十分に養うことができます。</p>
			</h2>
		</div>
	</section>

	<section class="l-spacer -medium -both  p-tombo__news">
		<div class="l-container--primary">
			<h2 class="c-title-ex-small">トンボの湯からのお知らせ</h1>
			<ul>
				<li>今日はりんごの湯なので混雑が予想されます。</li>
			</ul>
		</div>
	</section>

	<?php get_template_part('event/list-3-facility'); ?>

	<section class="l-spacer -medium -both c-border-t  p-tombo__pickup">
		<div class="l-container--primary">
			<article class="l-contents-2column">
				<div class="l-contents-2column__block -w-2_3">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/apple.jpg">
				</div>
				<div class="l-contents-2column__block -w-1_3 c-block-conts-center">
					<div class="l-spacer -small -both">
						<h2 class="c-title-small"><span>ピックアップ</span>りんご湯フェア</h2>
						<p class="c-text-gold">期間 : 2023.10.14～16</p>
						<p>
							<a href="#" class="c-button-block -lightyellow -arrow"><span>詳しくはこちら</span></a>
						</p>
					</div>
				</div>
			</article>
		</div>
	</section>

	<section class="l-spacer -medium -both c-border-t  p-tombo__feature">
		<div class="l-container--primary">
			<h2 class="c-title-large">温泉の特徴</h2>
			<div class="l-spacer -medium">
				<article class="l-contents-2column">
					<div class="l-contents-2column__block -w-1_2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/feature01.jpg">
					</div>
					<div class="l-contents-2column__block -w-1_2 c-block-conts-center">
						<div class="c-block-conts-center__inner">
							<h3 class="c-title-medium">源泉かけ流し</h3>
							<p>トンボの湯の全ての浴槽は、源泉かけ流しです。湯舟には星野温泉の源泉が良質なまま溢れ、その軟らかいお湯は「美肌の湯」といわれています。新鮮な温泉である証として、飲泉用の蛇口もご用意。循環・加水はせず、毎日換水しています。</p>
						</div>
					</div>
				</article>
			</div>

			<div class="l-spacer -medium">
				<article class="l-contents-2column -pc-rl">
					<div class="l-contents-2column__block -w-1_2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/feature02.jpg">
					</div>
					<div class="l-contents-2column__block -w-1_2 c-block-conts-center">
						<div class="c-block-conts-center__inner">
							<h3 class="c-title-medium">自然と溶け込むくつろぎの空間</h3>
							<p>内湯と露天風呂は、樹林に向かって池を囲うように配置されています。池は移りゆく自然の景色を映し出し、広い露天風呂とつながるような一体感を生み出しています。<br>自然素材にもこだわり、内湯の内装と湯縁はヒノキ、壁や床、露天には天然石を使用。湯船は肩までゆったりと浸かれるよう、深め（男湯90センチ、女湯85センチ）につくっています。<br>自然の存在を五感で感じながら、ゆっくりくつろげる空間です。</p>
						</div>
					</div>
				</article>
			</div>

		<div class="l-spacer -medium">
				<article class="l-contents-2column">
					<div class="l-contents-2column__block -w-1_2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/feature03.jpg">
					</div>
					<div class="l-contents-2column__block -w-1_2 c-block-conts-center">
						<div class="c-block-conts-center__inner">
							<h3 class="c-title-medium">サウナ</h3>
							<p>温度は約 80~90 度。20 分に一度のオートロウリュを採用しています。BGM の JAZZ を聞きながら、窓から季節の景色を眺めることができます。水風呂には野鳥の森の湧き水が使われ、通年約 13 度と安定した水温を保っています。十分汗をかいたら、軽井沢の澄んだ空気の中で外気浴するのもおすすめです。</p>
						</div>
					</div>
				</article>
			</div>

			<div class="l-spacer -medium">
				<article class="l-contents-2column -pc-rl">
					<div class="l-contents-2column__block -w-1_2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/feature04.jpg">
					</div>
					<div class="l-contents-2column__block -w-1_2 c-block-conts-center">
						<div class="c-block-conts-center__inner">
							<h3 class="c-title-medium">季節の移ろい</h3>
							<p>四季折々の自然を、存分に感じることができます。端午の節句のしょうぶ湯、秋のりんご湯、冬至のゆず湯など、季節に合わせて季節湯を開催しています。<br>男湯と女湯の入り口には、周囲の自然を紹介する「森羅百撰」を掲示。季節によって入れ替えているため、訪れる時期によって異なる書画を見ることができます。</p>
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="l-spacer -medium -both">
		<div class="l-container--primary-scroll">
			<div class="swiper p-gallery-slider js-gallery-slider l-container--primary-scroll__inner">
				<div class="swiper-wrapper">
					<div class="swiper-slide p-gallery-slider__slide">
						<img class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/slide01.jpg">
						<p class="p-gallery-slider__caption">内湯</p>
					</div>
					<div class="swiper-slide p-gallery-slider__slide">
						<img  class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/slide02.jpg">
						<p class="p-gallery-slider__caption">露天風呂</p>
					</div>
					<div class="swiper-slide p-gallery-slider__slide">
						<img  class="p-gallery-slider__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/slide03.jpg">
						<p class="p-gallery-slider__caption">サウナ</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="l-spacer -medium c-border-t  p-tombo__intro">
		<div class="l-container--primary">
			<article class="l-contents--left-title">
				<h2 class="c-title-large -vertical l-contents--left-title__title">温泉のご紹介</h2>
				<div class="l-contents--left-title__conts">
					<div class="l-contents-2column reverse">
						<div class="l-contents-2column__block -w-1_2--right">
							<dl class="c-list-dl">
								<dt>泉質</dt>
								<dd>単純温泉（低張性弱アルカリ性高温泉）</dd>
								<dt>湧出量</dt>
								<dd>毎分400リットル</dd>
								<dt>適応症</dt>
								<dd>慢性的な腰痛症、冷え性、疲労回復など</dd>
							</dl>
						</div>
						<div class="l-contents-2column__block -w-1_2--left">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/tombo02.png">
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>


	<section class="c-bg-yellow l-contents-block__wrap">
		<div class="l-contents-block c-bg-white">
			<div class="l-contents-block__inner">
				<div class="l-container--primary">
					<article class="l-contents--left-title l-spacer -medium -both">
						<h2 class="c-title-large -vertical l-contents--left-title__title">湯上がりの楽しみ</h2>
						<div class="l-contents-2column">
							<div class="l-contents-2column__block -w-1_2--left">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/after01.jpg">
							</div>
							<div class="l-contents-2column__block -w-1_2--right  c-block-conts-center">
								<div>
									<h3 class="c-title-small">カフェハングリースポット</h3>
									<p>お風呂上がりは、徒歩０分のカフェ ハングリースポットへ。季節限定ドリンクやクラフトビール、ソフトクリームをお楽しみください。</p>
									<p>
										<a href="#" class="c-button-block -lightyellow -arrow"><span>もっと見る</span></a>
									</p>
								</div>
							</div>
						</div>
					</article>

					<article class="l-contents--left-title">
						<h2 class="c-title-large -vertical l-contents--left-title__title"></h2>
						<div class="l-contents-2column">
							<div class="l-contents-2column__block -w-1_2--left">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/after02.jpg">
							</div>
							<div class="l-contents-2column__block -w-1_2--right  c-block-conts-center">
								<div>
									<h3 class="c-title-small">天然の湯上がり処</h3>
									<p>お風呂上がりは木陰のベンチに座り、高原の風を感じながら一息つきませんか。</p>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section id="usage-guide" class="l-spacer -medium -both c-border-t  p-tombo__guide">
		<div class="l-container--primary">
			<article class="l-contents--left-title">
				<h2 class="c-title-large -vertical l-contents--left-title__title">営業案内</h2>
				<div class="l-contents--left-title__conts">
					<div class="l-contents-2column">
						<div class="l-contents-2column__block -w-1_2--left">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/guide.jpg">
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
								<dd><a href="tel:+81-267443580">0267-44-3580</a></dd>
								<dt>利用料金</dt>
								<dd>大人1,350円 / 子供（3才〜小学生）800円<br>ゴールデンウィーク、夏季、年末年始（12/29～1/3)は特別料金<br>大人1,550円 / 子供1,050円</dd>
								<dt>浴場内施設</dt>
								<dd>内湯、露天風呂、サウナ、水風呂、飲泉</dd>
								<dt>備品</dt>
								<dd>ボディソープ、シャンプー、コンディショナー、化粧水、乳液、クレンジングウォッシュ（女湯）、ドライヤー、タオル<br>貸しタオルセット 350円<br>浴用タオル販売 200円</dd>
								<dt>利用の目安</dt>
								<dd><!--10:00〜15:00は比較的ゆっくりお過ごし頂けます。-->
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/graph01.png">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/graph02.png">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/graph03.png">
								</dd>
							</dl>
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>

	<section class="l-contents-block__wrap  p-tombo__notices">
		<div class="l-contents-block c-bg-border">
			<div class="l-contents-block__inner">
				<div class="l-container--primary">
					<article class="l-contents-2column">
						<h2 class="c-title-medium">注意事項</h2>
						<div class="l-contents--left-title__conts">
							<ul class="c-list-dot">
								<li class="c-list-dot__item">乳幼児<br>トンボの湯の内湯は、湯温が高め（41度前後）で浴槽が深い（90cm）ため、ベビーバス、露天風呂のご利用をおすすめいたします。</li>
								<li class="c-list-dot__item">お子様の混浴<br>未就学のお子様に限り、保護者と一緒に入ることができます。</li>
								<li class="c-list-dot__item">入浴着<br>手術等の傷あとをカバーする入浴着は、ご利用いただけます。貸し出しはございません。</li>
							</ul>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section class="l-contents-block__wrap  p-tombo__notices">
		<div class="l-contents-block c-bg-border">
			<div class="l-contents-block__inner">
				<div class="l-container--primary">
					<article class="l-contents-2column">
						<h2 class="c-title-medium">禁止事項</h2>
						<div class="l-contents--left-title__conts">
							<ul class="c-list-dot">
								<li class="c-list-dot__item">電子機器の使用<br>脱衣場以降、浴場内は、携帯電話等の電子機器の使用をご遠慮いただいております。建物内玄関では使用可能です。</li>
								<li class="c-list-dot__item">タトゥー、刺繍が見える状態での入浴<br>刺青・タトゥーのある方の入場は原則としてお断りしておりますが、専用シール8枚（1枚10cm×8cm）で隠れるサイズの場合はご入浴いただけます。</li>
							</ul>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

	<section class="c-bg-yellow l-contents-block__wrap  p-tombo__howto">
		<div class="l-contents-block c-bg-white">
			<div class="l-contents-block__inner">
				<div class="l-container--primary">
					<article class="l-contents--left-title l-spacer -medium -both">
						<h2 class="c-title-large -vertical l-contents--left-title__title">温泉の入り方</h2>
						<div class="l-contents-2column">
							<div class="l-contents-2column__block -w-1_2--left">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tombo/movie.jpg">
							</div>
							<div class="l-contents-2column__block -w-1_2--right">
								<div>
									<ul class="c-list-dot">
										<li class="c-list-dot__item">掛け湯をしてからお入りください。</li>
										<li class="c-list-dot__item">長い髪の毛は結び、湯舟につけないようにしてください。</li>
										<li class="c-list-dot__item">サウナの後の汗はしっかり流してから、水風呂や湯船にお入りください。</li>
										<li class="c-list-dot__item">タオルは湯船につけないでください。</li>
										<li class="c-list-dot__item">カランの場所取りはご遠慮ください。</li>
										<li class="c-list-dot__item">シャワーやサウナは譲り合ってご利用ください。</li>
									</ul>
									<br><br>
									<p>それではみなさん心ゆくまで温泉をお楽しみください。</p>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

</section>

<section class="l-spacer -medium -both  p-tombo__faq">
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
</section>

<div class="l-spacer">
	<div class="l-container--wide">
		<?php get_template_part('inc/breadcrumb'); ?>
	</div>
</div>

<?php get_footer(); ?>