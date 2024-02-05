<?php
/*Template Name: ケラ池スケートリンク */
?>
<?php get_header(); ?>

<section class="-keraike-bg">

	<div class="l-spacer pan">
		<div class="l-container--wide">
			<?php get_template_part('inc/breadcrumb'); ?>
		</div>
	</div>

<div id="key_wrap">
  <div id="keyVisual">
    <div class="videoBox">
      <video playsinline autoplay muted preload="none" poster="./img/poster.jpg" loop class="pc-video" id="js-video-pc" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/keraike_pc.mp4"></video>
      <video playsinline autoplay muted preload="none" poster="./img/poster-sp.jpg" loop class="sp-video" id="js-video-sp" src="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/video/keraike_sp.mp4"></video>
      <div class="p-keraike__kv__logo">
	  <h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/keraike/logo.svg" alt="ケラ池スケートリンク"></h1>
		<a href="#usage-guide"class="c-button-block -lightyellow -arrow"><span>営業案内</span></a>
		</div>
      <div class="p-keraike__kv__news">
        <h2 class="c-title-ex-small"><span>重要なお知らせ</span></h2>
        <div class="endress">
          <div class="loop_wrap">
            <?php
            $args = array (
                'post_type' => 'news',
                'posts_per_page' => 3,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'news_cat',
                        'field' => 'slug',
                        'terms' => 'important-news',
                        'operator' => 'IN'
                    ),
                )
            );
            $news = new WP_Query( $args );
            if ($news -> have_posts()):
            ?>
            <?php while ($news -> have_posts()): $news -> the_post(); ?>
            <div><a href="<?php the_permalink();?>"><span><?php the_time('Y.m.d') ?></span><?php the_title(); ?></a>　</div>
            <?php endwhile; ?>
            </div>
            <?php endif; wp_reset_postdata(); ?>
          </div>
      </div>
    </div>
  </div>
</div>
<style>
.sp-video {
  display: block;
}
.pc-video {
  display: none;
}
@media screen and (min-width: 768px) {
  .sp-video {
    display: none;
  }
  .pc-video {
    display: block;
  }
}
</style>
<script>
const videoPc = document.querySelector("#js-video-pc"); //pc版のビデオタグ
const videPcSrc = videoPc.getAttribute("data-src"); //pc版のビデオタグのdata-src

const videoSp = document.querySelector("#js-video-sp"); //sp版のビデオタグ
const videoSpSrc = videoSp.getAttribute("data-src"); //sp版のビデオタグのdata-src

let pcVideoBool = false;
let spVideoBool = false;

if (768 <= window.innerWidth) {
  //画面幅768pxより大きければpc版読み込み
  videoPc.src = videPcSrc;
  pcVideoBool = true;
} else {
  //それ以外の場合sp版読み込み
  videoSp.src = videoSpSrc;
  spVideoBool = true;
}
window.addEventListener("resize", () => {
  //画面をresize時
  if (768 <= window.innerWidth && !pcVideoBool) {
    //画面幅768pxより大きいかつ、pc版の動画をまだ読み込んでいない場合
    videoPc.src = videPcSrc;
    pcVideoBool = true;
  }

  if (768 > window.innerWidth && !spVideoBool) {
    //画面幅768px未満かつ、sp版の動画をまだ読み込んでいない場合
    videoSp.src = videoSpSrc;
    spVideoBool = true;
  }
});
</script>

	<!-- <section class="l-spacer -medium000000000 -both00000  p-keraike__kv">
		<div class="l-container--primary">
			<div class="p-keraike__kv__logo">
				<h1><img src="<?php echo get_template_directory_uri(); ?>/assets/img/keraike/logo.svg" alt="ケラ池スケートリンク"></h1>
				<a href="#usage-guide"class="c-button-block -lightyellow -arrow"><span>営業案内</span></a>
			</div>
			<div class="p-keraike__kv__news">
				<h2 class="c-title-ex-small"><span>重要なお知らせ</span></h2>
				<p><a href="#">重要なお知らせが入ります。</a></p>
			</div>
		</div>
	</section> -->

	<?php $title ="ケラ池の"; get_template_part('event/list-3-facility'); ?>

	<section class="l-spacer -medium0000000000 -both000000000  p-keraike__lead">
		<div class="l-container--primary">
			<div class="p-keraike__lead__inner">
				<h2 class="c-title-ex-small">池が凍ると現れる<br>森の中のスケートリンク</h2>
				<p>ピッキオの前にある「ケラ池」には、秋の紅葉の時期からスケートリンクが現れます。寒さが増すごとに池一面の氷が厚さを増し、厳冬期には天然氷でのスケートができるようになります。ここは「軽井沢野鳥の森」に隣接しており、多くの野鳥や動物が生息する環境です。<br>池の小さな島をめぐったり、氷に閉じ込められた落ち葉を探したり。軽井沢の森の中で、思い思いに氷上散歩をお楽しみください。</p>
			</div>
		</div>
	</section>


	<section class="l-spacer -medium -both  p-keraike__news">
		<div class="l-container--primary">
			<h2 class="c-title-ex-small">ケラ池スケートリンク<br>からのお知らせ</h2>
			<ul>
				<li>滑走時は必ず手袋とニット帽（またはヘルメット）を着用してください。持っていない方は、手袋（300円）、ニット帽（500円）を現地でご購入いただけます。ヘルメットの無料貸し出しもございます。</li>
				<li>天候により営業時間の変更や時間短縮、臨時休業になる場合があります。</li>
				<li>気温などの状況により、滑走できる範囲は異なります。</li>
				<li>貸靴の対応サイズは15～30㎝です。</li>
				<li>幼児用の2枚刃スケート靴もご用意しております。（対応サイズ15,16cm)</li>
				<li>リンク内での事故や怪我、金品等の盗難や紛失についての責任は負いかねます。詳しくは「<a href="https://picchio.co.jp/facility/kera/" target="_blank">ご利用に際してのお願い</a>」をご確認ください。</li>
				<li>その他のスケートリンクに関する詳細は「よくあるご質問」をご覧ください。</li>
			</ul>
		</div>
	</section>

	<!--section class="l-spacer -medium -both">
		<div class="l-container--primary">
			<article class="l-contents--left-title">
				<h2 class="c-title-large -vertical l-contents--left-title__title"><span>現在開催中の</span>イベント情報</h2>
				<div class="l-contents--left-title__conts">
					<div class="l-contents-2column">
						<div class="l-contents-2column__block -w-1_2--left">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/dummy/layout1.jpg">
						</div>
						<div class="l-contents-2column__block -w-1_2--right">
							<h3 class="c-title-small"><span>ピックアップ</span>りんご湯フェア</h3>
							<dl class="">
								<dt>⚫︎開催中</dt><dd>期間 : 2023.10.15</dd>
							</dl>
							<p>
								<a href="#" class="c-button-block -lightyellow -arrow"><span>詳しくはこちら</span></a>
							</p>
						</div>
						
					</div>
				</div>
			</article>
		</div>
	</section-->

	<section class="l-spacer -medium -both c-border-t">
		<div class="l-container--primary">
			<h2 class="c-title-large">氷上に感じる季節の変化</h2>
			<div class="l-spacer -medium">
				<article class="l-contents-2column -pc-rl">
					<div class="l-contents-2column__block -w-1_2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/keraike/feature01.jpg">
					</div>
					<div class="l-contents-2column__block -w-1_2 c-block-conts-center">
						<div class="c-block-conts-center__inner">
							<h3 class="c-title-medium">紅葉期</h3>
							<p>紅葉の時期になると、人工エリアがオープンします。このリンクは、全国で最も早い時期にオープンする屋外アイスリンクです(当社調べ)。もみじの紅葉やカラマツの黄葉を眺めながら、スケートをお楽しみいただけます。</p>
						</div>
					</div>
				</article>
			</div>

			<div class="l-spacer -medium">
				<article class="l-contents-2column">
					<div class="l-contents-2column__block -w-1_2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/keraike/feature02.jpg">
					</div>
					<div class="l-contents-2column__block -w-1_2 c-block-conts-center">
						<div class="c-block-conts-center__inner">
							<h3 class="c-title-medium">厳寒期</h3>
							<p>12月末になると、天然氷エリアが結氷し、池の全面がリンクになります。氷の中には落ち葉が見え隠れ。天然氷ならではの、透明度が高くツルツルした質感をお楽しみください。2 月 20 日頃まで滑ることができます。</p>
						</div>
					</div>
				</article>
			</div>

			<div class="l-spacer -medium">
				<article class="l-contents-2column -pc-rl">
					<div class="l-contents-2column__block -w-1_2">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/keraike/feature03.jpg">
					</div>
					<div class="l-contents-2column__block -w-1_2 c-block-conts-center">
						<div class="c-block-conts-center__inner">
							<h3 class="c-title-medium">希少な天然氷のリンク</h3>
							<p>冬がとても寒い軽井沢だからこそ生まれる、天然氷のリンク。今やとても希少な存在です。古くからスケートが盛んだった軽井沢においても、2023年現在、天然氷のスケートができるのはこのリンクだけです。</p>
						</div>
					</div>
				</article>
			</div>
		</div>
	</section>

	<section class="l-contents-block__wrap  p-keraike__notices">
		<div class="l-contents-block c-bg-border">
			<div class="l-contents-block__inner">
				<div class="l-container--primary">
					<article class="l-contents-2column">
						<h2 class="c-title-medium">貸出品</h2>
						<div class="l-contents--left-title__conts">
							<ul class="c-list-dot">
								<li class="c-list-dot__item">レンタルスケート靴<br>15cm〜30cmまでサイズを揃えています。また、二枚刃のスケート（15cm、16cmのみ）のご用意もありますので、小さなお子様でも安転ばず安心してスケートを楽しむことができます。</li>
								<li class="c-list-dot__item">そり<br>スケートに不慣れな方は、そりのついた専用椅子をご利用ください。温かみのある木製の椅子につかまれば、自由に好きな場所へと滑って行くことができます。<br>※利用料無料。数に限りがあるため、譲り合ってご利用ください。</li>
							</ul>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>


	<section class="c-bg-yellow l-contents-block__wrap">
		<div class="l-contents-block c-bg-white">
			<div class="l-contents-block__inner">
				<div class="l-container--primary">
					<article class="l-contents--left-title l-spacer -medium -both">
						<h2 class="c-title-large -vertical l-contents--left-title__title">スケートの後は</h2>
						<div class="l-contents--left-title__conts">
							<div class="l-contents-2column">
								<div class="l-contents-2column__block -w-1_2--left">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/keraike/ikarucafe_winter.jpg">
								</div>
								<div class="l-contents-2column__block -w-1_2--right">
									<h3 class="c-title-small">イカルカフェでお茶</h3>
									<p>隣接するカフェでは、森をイメージした 2 種類のホットドリンクを期間限定で販売します。氷上の円形ベンチにテイクアウトすることもできます。</p>
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
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/keraike/picchio_winter.jpg">
								</div>
								<div class="l-contents-2column__block -w-1_2--right">
									<h3 class="c-title-small">ピッキオのネイチャーツアー</h3>
									<p>ケラ池の目の前にあるピッキオでは、森の生き物との出会いを楽しむネイチャーツアーが開催されています。ツアー内容は季節によってさまざま。自然をこよなく愛するスタッフが、心躍る動植物との出会いをサポートいたします。</p>
									<p>
										<a href="#" class="c-button-block -lightyellow -arrow"><span>もっと見る</span></a>
									</p>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part('news/list-3-facility'); ?>
	
	<section id="usage-guide" class="l-spacer -medium -both c-border-t">
		<div class="l-container--primary">
			<article class="l-contents--left-title">
				<h2 class="c-title-large -vertical l-contents--left-title__title">営業案内</h2>
				<div class="l-contents--left-title__conts">
					<div class="l-contents-2column">
						<div class="l-contents-2column__block -w-1_2--left">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/keraike/guide.jpg">
						</div>
						<div class="l-contents-2column__block -w-1_2--right">
							<dl class="c-list-dl">
								<dt>期間</dt>
								<dd>2023年10月20日～2024年3月3日<br>＊気象状況により変更または臨時休業になる場合あり</dd>
								<dt>休業日</dt>
								<dd>2023年11月28日 / 2024年1月10～12日および15～19日</dd>
								<dt>時間</dt>
								<dd>10:00～16:00</dd>
								<dt>時間制限</dt>
								<dd>90分<br>＊年末年始、1月と2月の土日祝日のみ</dd>
								<dt>靴のサイズ</dt>
								<dd>大人（中学生以上） 1,900円<br>小学生以下 1,300円<br>＊貸し靴料込</dd>
								<dt>駐車場</dt>
								<dd>P1駐車場（村民食堂横）＊徒歩約5分</dd>
								<dt>滑走時の注意</dt>
								<dd>必ず手袋・ニット帽（またはヘルメット）を着用してください。レンタル＆販売もあります。<ul class="c-list-dot">
									<li class="c-list-dot__item">手袋（指をすべて覆えるもの。300円で販売）</li>
									<li class="c-list-dot__item">ニット帽（頭全体を覆えるもので脱げにくいもの。500円で販売）</li>
									<li class="c-list-dot__item">ヘルメット（無料レンタル）</li>
								</ul></dd>
								<dt>その他</dt>
								<dd><ul class="c-list-dot">
									<li class="c-list-dot__item">リンク内での事故や怪我、金品等の盗難や紛失についての責任は負いかねます。詳しくは「ご利用に際してのお願い」をご確認ください。</li>
									<li class="c-list-dot__item">繁忙日（クリスマスや年末年始、土日祝日など）は、安全管理のためご利用人数と時間を制限する場合があります。</li>
									<li class="c-list-dot__item">気象状況により、滑走できる範囲は予告なく変動します。</li>
								</ul></dd>
								<dt>電話番号</dt>
								<dd>ピッキオ　0267-45-7777</dd>
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