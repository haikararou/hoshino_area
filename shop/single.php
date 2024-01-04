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

<div class="p-entry">
<?php the_content(); ?>
</div>

<?php get_footer(); ?>

