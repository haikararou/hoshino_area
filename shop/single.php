<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>
<div class="l-spacer">
	<div class="l-container--wide">
		<ul class="c-breadcrumb">
			<li class="c-breadcrumb__item"><a href="<?php echo home_url(); ?>">星野エリア</a></li>
			<li class="c-breadcrumb__item"><a href="<?php echo home_url('/event'); ?>">ショップ＆レストラン</a></li>
			<li class="c-breadcrumb__item"><?php the_title(); ?></li>
		</ul>
	</div>
</div>

<div class="p-entry">
<?php the_content(); ?>
</div>

<?php get_footer(); ?>

