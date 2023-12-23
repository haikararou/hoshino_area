<?php
/*Template Name: お問い合わせ */
?>
<?php get_header(); ?>
<div class="l-spacer">
	<div class="l-container--wide">
		<?php get_template_part('inc/breadcrumb'); ?>
	</div>
</div>

<section class="l-spacer -medium -both">
	<div class="l-container--primary">
		<h1 class="c-title-ex-large">お問い合わせ</h1>
	</div>
</section>

<section class="l-spacer -medium -both">
	<div class="l-container--primary-s">
		<article class="l-contents">
			<p class="">下記の入力フォームに必要事項をご入力のうえ、お問い合わせください。<br>
			なお、お問い合わせをいただいてから、ご連絡までにお時間をいただく場合がございます。ご了承ください。</p>
			<ul class="c-list-kome">
				<li class="c-list-kome__item">ご宿泊に関するお問い合わせは、各施設の公式サイトに掲載のお電話までお申し付けください。
				<li class="c-list-kome__item">団体バスでのご利用について：</li>
				<li class="c-list-kome__item">採用についてのお問合せ：</li>
				<li class="c-list-kome__item">ポップアップショップやイベントの出店のご希望は現在承っておりません。</li>

			</ul>
			<div class="l-spacer -medium">
				<?php echo do_shortcode('[contact-form-7 id="198a905" title="お問い合わせ"]'); ?>
			</div>
		</article>
	</div>
</section>

<?php get_footer(); ?>