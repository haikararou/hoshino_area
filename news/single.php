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

<section class="l-spacer -medium -both">
	<div class="l-container--primary c-display-flex -between">
		<h1 class="c-title-ex-large">
			<span class="c-title-sub">
			<?php
			if ($terms = get_the_terms($post->ID, 'news_cat')) {
			foreach ( $terms as $term ):
			if($term->parent) echo esc_html($term->name);
			endforeach;
			} ?>
			</span>
			<?php the_title(); ?>
		</h1>
		<div class="p-news-date">
			<div><?php the_time('Y.m.d') ?></div>
			<ul class="c-list-category -newsDate">
				<?php
				$terms = get_the_terms($post->ID, 'news_cat');
				foreach($terms as $term){
				$term_name = $term->name;
				echo '<li><a href="./category/'. $term-> slug .'" class="c-list-category__item -act">';
				echo $term_name;
				echo '</a></li>';
				break; };
				?>
			</ul>
		</div>
	</div>
</section>

<div class="p-entry">
<?php the_content(); ?>
</div>

<section class="l-spacer -medium -both">
  <div class="l-container--primary-s c-text-center">
    <a href="<?php echo home_url('/news'); ?>" class="c-button-block -lightyellow -arrow"><span>ニュース一覧</span></a>
  </div>
</section>

<?php get_template_part('news/list-3'); ?>

<?php get_footer(); ?>

